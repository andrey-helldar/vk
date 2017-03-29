<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes a friend list of the current user.
 *
 * @see     https://vk.com/dev/friends.deleteList
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class DeleteListController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('list_id');
}
