<?php

namespace Helldar\Vk\Controllers;

use Helldar\Vk\Models\VkRequest;

class Controller
{
    /**
     * @var
     */
    protected $user;

    /**
     * @var array
     */
    protected $params = array();

    public function __construct()
    {
        $this->user = \Auth::user();
    }

    /**
     * Add request to queue with return ID of new row.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @return mixed
     */
    public function run()
    {
        return VkRequest::insertGetId(array(
            'user_id' => $this->user->id,
            'request' => json_encode(array_merge($this->params, $this->getBaseParams())),
        ));
    }

    /**
     * Get base params.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @return array
     */
    private function getBaseParams()
    {
        return array(
            'access_token' => $this->user->access_token,
            'v' => config('vk.version', 5.63),
        );
    }
}
