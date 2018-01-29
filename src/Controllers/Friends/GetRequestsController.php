<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about the current user's incoming and outgoing friend requests.
 *
 * @see     https://vk.com/dev/friends.getRequests
 */
class GetRequestsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['offset', 'count', 'extended', 'need_mutual', 'out', 'sort', 'need_viewed', 'suggested'];
}
