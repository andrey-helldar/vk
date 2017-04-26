<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of the user's friend lists.
 *
 * @see     https://vk.com/dev/friends.getLists
 */
class GetListsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id', 'return_system');
}
