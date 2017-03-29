<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of user IDs of a user's friends who are online.
 *
 * @see     https://vk.com/dev/friends.getOnline
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Friends
 */
class GetOnlineController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id', 'list_id', 'online_mobile', 'order', 'count', 'offset');
}
