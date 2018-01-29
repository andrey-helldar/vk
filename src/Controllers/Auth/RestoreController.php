<?php

namespace Helldar\Vk\Controllers\Auth;

use Helldar\Vk\Controllers\Controller;

/**
 * Allows to restore account access using a code received via SMS.
 *
 * @see    https://vk.com/dev/auth.restore
 */
class RestoreController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['phone', 'libverify_support'];
}
