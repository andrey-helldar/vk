<?php

namespace Helldar\Vk\Controllers;

use Helldar\Vk\Models\VkUser;

class RequestController
{
    /**
     * @var
     */
    private $user;

    function __construct()
    {
        $this->user = \Auth::user();
    }

    /**
     * Build http parameters for query.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param array $params
     *
     * @return string
     */
    public function build($params = [])
    {
        $user = VkUser::whereUserId($this->user->id)->first();

        return json_encode(array_merge($params, [
            'access_token' => $user->access_token,
        ]));
    }
}