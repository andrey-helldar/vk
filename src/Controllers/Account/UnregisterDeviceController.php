<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

class UnregisterDeviceController extends Controller
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
     * For iOS devices.
     *   1 — to unsubscribe a device that used sandbox server.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $sandbox
     *
     * @return $this
     */
    public function sandbox($sandbox = null)
    {
        $this->setParameter('sandbox', $sandbox);

        return $this;
    }
}
