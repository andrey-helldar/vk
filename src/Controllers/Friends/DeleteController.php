<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Declines a friend request or deletes a user from the current user's friend list.
 * If the selected user ID is in the friend request list obtained using the friends.getRequests method, this method declines the friend
 * request. Otherwise, this method deletes the specified user from the friend list of the current user obtained using the friends.get
 * method.
 *
 * @see     https://vk.com/dev/friends.delete
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Friends
 */
class DeleteController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id');
}
