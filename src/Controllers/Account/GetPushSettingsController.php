<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Gets settings of push notifications.
 *
 * @see     https://vk.com/dev/account.getPushSettings
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class GetPushSettingsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['device_id'];
}
