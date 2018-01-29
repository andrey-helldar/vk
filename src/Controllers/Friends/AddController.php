<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Approves or creates a friend request.
 * If the selected user ID is in the friend request list obtained using the friends.getRequests method, this method approves the friend
 * request and adds the selected user to the current user's friend list. Otherwise, this method creates a friend request from the current
 * user to the selected user.
 *
 * @see     https://vk.com/dev/friends.add
 */
class AddController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['user_id', 'text', 'follow'];
}
