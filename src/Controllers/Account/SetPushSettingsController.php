<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Change push settings.
 *
 * @see     https://vk.com/dev/account.setPushSettings
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class SetPushSettingsController extends Controller
{
    /**
     * Unique device ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $device_id
     *
     * @return $this
     */
    public function deviceId($device_id = null)
    {
        $this->setParameter('device_id', $device_id);

        return $this;
    }

    /**
     * Push settings in a special format.
     *
     * @see    https://vk.com/dev/objects/push_settings
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $settings
     *
     * @return $this
     */
    public function settings($settings = null)
    {
        $this->setParameter('settings', $settings);

        return $this;
    }

    /**
     * Notification key.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $key
     *
     * @return $this
     */
    public function key($key = null)
    {
        $this->setParameter('key', $key);

        return $this;
    }

    /**
     * New value for the key in a special format.
     *
     * @see    https://vk.com/dev/objects/push_settings
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $value
     *
     * @return $this
     */
    public function value($value = null)
    {
        $this->setParameter('value', $value);

        return $this;
    }
}
