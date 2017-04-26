<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of user IDs of the mutual friends of two users.
 *
 * @see     https://vk.com/dev/friends.getMutual
 */
class GetMutualController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('source_uid', 'target_uid', 'target_uids', 'order', 'count', 'offset');
}
