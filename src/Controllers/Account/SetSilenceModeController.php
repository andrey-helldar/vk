<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Mutes push notifications for the set period of time.
 *
 * @see     https://vk.com/dev/account.setSilenceMode
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class SetSilenceModeController extends Controller
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
     * Time in seconds for what notifications should be disabled. -1 to disable forever.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $time
     *
     * @return $this
     */
    public function time($time = null)
    {
        $this->setParameter('time', $time);

        return $this;
    }

    /**
     * Destination ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $peer_id
     *
     * @return $this
     */
    public function peerId($peer_id = null)
    {
        $this->setParameter('peer_id', $peer_id);

        return $this;
    }

    /**
     * 1 — to enable sound in this dialog,
     * 0 — to disable sound.
     * Only if peer_id contains user or community ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $sound
     *
     * @return $this
     */
    public function sound($sound = null)
    {
        $this->setParameter('sound', $sound);

        return $this;
    }
}
