<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Change push settings.
 *
 * @see     https://vk.com/dev/account.setPushSettings
 */
class SetPushSettingsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['device_id', 'settings', 'key', 'value'];
}
