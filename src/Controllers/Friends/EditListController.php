<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits a friend list of the current user.
 *
 * @see     https://vk.com/dev/friends.editList
 */
class EditListController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['name', 'list_id', 'user_ids', 'add_user_ids', 'delete_user_ids'];
}
