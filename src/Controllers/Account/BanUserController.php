<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

class BanUserController extends Controller
{
    /**
     * Adds user to the banlist.
     *
     * @see    https://vk.com/dev/account.banUser
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
        $this->params['user_id'] = (int) $user_id;

        return $this;
    }
}
