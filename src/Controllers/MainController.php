<?php

namespace Helldar\Vk\Controllers;

use Helldar\Vk\Facade\Account;
use Helldar\Vk\Facade\Friends;
use Illuminate\Http\Request;

class MainController extends BaseController
{
    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     *
     * @param Request $request
     *
     * @return array|mixed
     */
    public function authRequest(Request $request)
    {
        if (isset($request->code)) {
            return $this->authResponse($request);
        }

        return (new AuthController())->auth();
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     *
     * @param Request $request
     *
     * @return array|mixed
     */
    private function authResponse(Request $request)
    {
        return (new AuthController())->getAccessToken($request);
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     *
     * @return mixed
     */
    public function authButton()
    {
        return view('vendor/vk/auth');
    }

    public function account($method = 'getInfo')
    {
        switch ($method) {
            case 'banUser':
                return Account::banUser();

            default:
                return Account::getInfo();
        }
    }

    /**
     * Get friends list.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $method
     *
     * @return $this
     */
    public function friends($method = 'get')
    {
        switch ($method) {
            default:
                return Friends::get();
        }
    }
}
