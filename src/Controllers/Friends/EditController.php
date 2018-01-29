<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits the friend lists of the selected user.
 *
 * @see     https://vk.com/dev/friends.edit
 */
class EditController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['user_id', 'list_ids'];
}
