<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Checks the current user's friendship status with other specified users.
 * Also returns information specifying whether there is an outgoing or incoming friend request (new follower).
 *
 * @see     https://vk.com/dev/friends.areFriends
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class AreFriendsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_ids', 'need_sign');
}
