<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of user IDs of the current user's recently added friends.
 *
 * @see     https://vk.com/dev/friends.getRecent
 */
class GetRecentController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('count');
}
