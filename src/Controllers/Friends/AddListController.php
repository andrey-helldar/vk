<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates a new friend list for the current user.
 *
 * @see     https://vk.com/dev/friends.addList
 */
class AddListController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('name', 'user_ids');
}
