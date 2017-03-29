<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications.
 *
 * @see     https://vk.com/dev/account.registerDevice
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class RegisterDeviceController extends Controller
{
    /**
     * Device token used to send notifications. (for mpns, the token shall be URL for sending of notifications).
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $token
     *
     * @return $this
     */
    public function token($token = null)
    {
        $this->setParameter('token', $token);

        return $this;
    }

    /**
     * String name of device model.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $device_model
     *
     * @return $this
     */
    public function deviceModel($device_model = null)
    {
        $this->setParameter('device_model', $device_model);

        return $this;
    }

    /**
     * Device year.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $device_year
     *
     * @return $this
     */
    public function deviceYear($device_year = null)
    {
        $this->setParameter('device_year', $device_year);

        return $this;
    }

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
     * String version of device operating system.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $system_version
     *
     * @return $this
     */
    public function systemVersion($system_version = null)
    {
        $this->setParameter('system_version', $system_version);

        return $this;
    }

    /**
     * Push settings in a special format.
     *
     * @see    https://vk.com/dev/push_settings
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $settings
     *
     * @return $this
     */
    public function settings($settings = null)
    {
        $this->setParameter('settings', $settings);

        return $this;
    }

    /**
     * For iOS devices. 1 — to use sandbox server.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-92
     *
     * @param int $sandbox
     *
     * @return $this
     */
    public function sandbox($sandbox = 0)
    {
        $this->setParameter('sandbox', $sandbox);

        return $this;
    }
}