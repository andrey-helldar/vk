<?php

namespace Helldar\Vk\Controllers\Auth;

use Helldar\Vk\Controllers\Controller;

/**
 * Completes a user's registration (begun with the auth.signup method) using an authorization code.
 *
 * @see    https://vk.com/dev/auth.confirm
 * @see    https://vk.com/dev/auth.signup
 */
class ConfirmController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('client_id', 'client_secret', 'phone', 'code', 'password', 'test_mode', 'intro');
}
