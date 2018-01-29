<?php

namespace Helldar\Vk\Controllers;

use BadMethodCallException;
use Helldar\Vk\Jobs\ProcessVkQueue;
use Helldar\Vk\Models\VkRequest;
use Helldar\Vk\Models\VkUser;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    /**
     * @var
     */
    protected $user;

    /**
     * @var null|string
     */
    protected $method = null;

    /**
     * Available parameters.
     *
     * @var array
     */
    protected $parameters = [];

    /**
     * @var array
     */
    protected $params = [];

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Run controller.
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function start($method = null)
    {
        $this->method = trim($method);

        return $this;
    }

    /**
     * Add request to queue with return ID of new row.
     *
     * @return mixed
     */
    public function send()
    {
        $item = VkRequest::firstOrNew([
            'user_id' => $this->user->id,
            'method' => $this->method,
        ]);

        $item->request = $this->makeParams();
        $item->response = null;
        $item->deleted_at = null;
        $item->save();

        // Add to queue.
        dispatch(new ProcessVkQueue($item));

        return $item->id;
    }

    /**
     * Get base params.
     *
     * @return array
     */
    protected function makeParams()
    {
        $user = VkUser::whereUserId($this->user->id)->first();

        return json_encode(array_merge($this->params, [
            'access_token' => $user->access_token,
            'v' => config('vk.version', 5.63),
        ]));
    }

    /**
     * Check and receive a response.
     *
     * @return null|string
     */
    public function get()
    {
        $item = VkRequest::whereUserId($this->user->id)->whereMethod($this->method)->first();

        if (is_null($item) || !$this->is_success) {
            return null;
        }

        $item->delete();

        return $item->response;
    }

    /**
     * @param $param
     * @param $parameters
     *
     * @return $this
     */
    public function __call($param, $parameters)
    {
        if (!in_array(snake_case($param), $this->parameters)) {
            throw new BadMethodCallException("Param [{$param}] does not exist.");
        }

        $this->setParameter(snake_case($param), $parameters[0]);

        return $this;
    }

    /**
     * Set a parameter.
     *
     * @param string     $parameter
     * @param null|mixed $value
     */
    protected function setParameter($parameter, $value = null)
    {
        if (gettype($value) == 'array' || gettype($value) == 'object') {
            $value = implode(',', $value);
        }

        $this->params[$parameter] = $value;
    }
}
