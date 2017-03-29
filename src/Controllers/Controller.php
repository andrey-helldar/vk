<?php

namespace Helldar\Vk\Controllers;

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
     * @var array
     */
    protected $params = array();

    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @return $this
     */
    public function start()
    {
        return $this;
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
    public function get()
    {
        $item = VkRequest::create(array(
            'user_id' => $this->user->id,
            'request' => $this->makeParams(),
        ));

        return $item->id;

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
    private function makeParams()
    {
        $user = VkUser::whereUserId($this->user->id)->first();

        return json_encode(array_merge($this->params, array(
            'access_token' => $user->access_token,
            'v'            => config('vk.version', 5.63),
        )));
    }
}
