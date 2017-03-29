<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Sets an application screen name (up to 17 characters), that is shown to the user in the left menu.
 * This happens only in case the user added such application in the left menu from application page, from list of applications and settings.
 *
 * @see     https://vk.com/dev/account.setNameInMenu
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class SetNameInMenuController extends Controller
{
    /**
     * User ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $user_id
     *
     * @return $this
     */
    public function userId($user_id = null)
    {
        $this->setParameter('user_id', $user_id);

        return $this;
    }

    /**
     * Application screen name.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $name
     *
     * @return $this
     */
    public function name($name = null)
    {
        $this->setParameter('name', $name);

        return $this;
    }
}
