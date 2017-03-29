<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits a friend list of the current user.
 *
 * @see     https://vk.com/dev/friends.editList
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class EditListController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('name', 'list_id', 'user_ids', 'add_user_ids', 'delete_user_ids');
}
