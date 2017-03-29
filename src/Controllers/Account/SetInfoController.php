<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Allows to edit the current account info.
 *
 * @see     https://vk.com/dev/account.setInfo
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class SetInfoController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('name', 'value', 'intro', 'own_posts_default', 'no_wall_replies');
}
