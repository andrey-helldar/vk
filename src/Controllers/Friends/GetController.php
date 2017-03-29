<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of user IDs or detailed information about a user's friends.
 *
 * @see     https://vk.com/dev/friends.get
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class GetController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id', 'order', 'list_id', 'count', 'offset', 'fields', 'name_case');
}
