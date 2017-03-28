<?php

namespace Helldar\Vk\Controllers;

use Helldar\Vk\Models\VkRequest;

class AccountController
{
    /**
     * @var
     */
    private $user;

    /**
     * @var RequestController
     */
    private $api_request;

    function __construct()
    {
        $this->user        = \Auth::user();
        $this->api_request = new RequestController();
    }

    /**
     * Adds user to the banlist.
     *
     * @see    https://vk.com/dev/account.banUser
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param int $user_id
     *
     * @return mixed
     */
    public function banUser($user_id = 0)
    {
        $validator = \Validator::make(['user_id' => $user_id], [
            'user_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        $id = VkRequest::insertGetId([
            'user_id' => $this->user->id,
            'request' => $this->api_request->build([
                'user_id' => $user_id,
            ]),
        ]);

        return $id;
    }
}