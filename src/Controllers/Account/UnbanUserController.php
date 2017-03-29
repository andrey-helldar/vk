<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes user from the blacklist.
 *
 * @see     https://vk.com/dev/account.unbanUser
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class UnbanUserController extends Controller
{
    /**
     * User ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $user_id
     *
     * @return $this
     */
    public function userId($user_id = null)
    {
        $this->setParameter('user_id', $user_id);

        return $this;
    }
}
