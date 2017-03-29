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
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id', 'name');
}
