<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Adds user to the banlist.
 *
 * @see     https://vk.com/dev/account.banUser
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class BanUserController extends Controller
{
    /**
     * Adds user to the banlist.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param int $user_id
     *
     * @return $this
     */
    public function userId($user_id = 0)
    {
        $this->setParameter('user_id', abs((int) $user_id));

        return $this;
    }
}
