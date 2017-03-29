<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about the current user's incoming and outgoing friend requests.
 *
 * @see     https://vk.com/dev/friends.getRequests
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Friends
 */
class GetRequestsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('offset', 'count', 'extended', 'need_mutual', 'out', 'sort', 'need_viewed', 'suggested');
}
