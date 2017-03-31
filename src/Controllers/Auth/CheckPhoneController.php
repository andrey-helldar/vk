<?php

namespace Helldar\Vk\Controllers\Auth;

use Helldar\Vk\Controllers\Controller;

/**
 * Checks a user's phone number for correctness.
 *
 * @see    https://vk.com/dev/auth.checkPhone
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class CheckPhoneController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('phone', 'client_id', 'client_secret', 'auth_by_phone');
}
