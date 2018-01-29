<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications.
 *
 * @see     https://vk.com/dev/account.registerDevice
 */
class RegisterDeviceController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['token', 'device_model', 'device_year', 'device_id', 'system_version', 'settings', 'sandbox'];
}
