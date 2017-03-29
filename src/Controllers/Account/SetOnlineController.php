<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Marks the current user as online for 15 minutes.
 *
 * @see     https://vk.com/dev/account.setOnline
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class SetOnlineController extends Controller
{
    /**
     * 1 if videocalls are available for current device.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $voip
     *
     * @return $this
     */
    public function voip($voip = null)
    {
        $this->setParameter('voip', $voip);

        return $this;
    }
}
