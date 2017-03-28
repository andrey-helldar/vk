<?php

namespace Helldar\Vk\Controllers;

use Illuminate\Http\Request;

class BaseController
{
    /**
     * @var AuthController
     */
    private $auth;

    public function __construct()
    {
        $this->auth = new AuthController();
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     */
    public function auth(Request $request)
    {
        if (isset($request->code)) {
            return $this->auth_response($request);
        }

        return $this->auth->auth();
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
    private function auth_response(Request $request)
    {
        return $this->auth->getAccessToken($request);
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     *
     * @return mixed
     */
    public function auth_button()
    {
        return view('vendor/vk/auth');
    }
}
