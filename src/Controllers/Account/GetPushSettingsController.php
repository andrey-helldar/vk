<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Gets settings of push notifications.
 *
 * @see     https://vk.com/dev/account.getPushSettings
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class GetPushSettingsController extends Controller
{
    /**
     * Unique device ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $device_id
     *
     * @return $this
     */
    public function deviceId($device_id = null)
    {
        $this->setParameter('device_id', $device_id);

        return $this;
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param $token
     *
     * @return $this
     */
    public function token($token)
    {
        $this->setParameter('token', $token);

        return $this;
    }
}