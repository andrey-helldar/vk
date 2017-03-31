<?php

namespace Helldar\Vk\Controllers;

use Helldar\Vk\Facade\Account;
use Helldar\Vk\Facade\Ads;
use Helldar\Vk\Facade\Friends;
use Helldar\Vk\Facade\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

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
        $this->checkAuth();

        if (isset($request->code)) {
            return $this->authResponse($request);
        }

        return (new AuthController())->auth();
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @return mixed
     */
    private function checkAuth()
    {
        if (Auth::guest()) {
            throw new UnauthorizedException('Unauthorized', 401);
        }
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
        $this->checkAuth();

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

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $method
     *
     * @return mixed
     */
    public function account($method = 'getInfo')
    {
        $this->checkAuth();

        return (new Account())->{$method}($method);
    }

    /**
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
        $this->checkAuth();

        return (new Friends())->{$method}($method);
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-30
     *
     * @param string $method
     *
     * @return mixed
     */
    public function likes($method = 'isLiked')
    {
        $this->checkAuth();

        return (new Likes())->{$method}($method);
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-31
     *
     * @param string $method
     *
     * @return mixed
     */
    public function ads($method = 'getAds')
    {
        $this->checkAuth();

        return (new Ads())->{$method}($method);
    }
}
