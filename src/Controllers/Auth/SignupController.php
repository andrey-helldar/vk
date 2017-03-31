<?php

namespace Helldar\Vk\Controllers\Auth;

use Helldar\Vk\Controllers\Controller;

/**
 * Registers a new user by phone number.
 *
 * @see    https://vk.com/dev/auth.signup
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class SignupController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array(
        'first_name',
        'last_name',
        'client_id',
        'client_secret',
        'phone',
        'password',
        'test_mode',
        'voice',
        'sex',
        'sid',
    );
}