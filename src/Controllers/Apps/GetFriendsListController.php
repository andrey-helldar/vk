<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates friends list for requests and invites in current app.
 *
 * @see    https://vk.com/dev/apps.getFriendsList
 */
class GetFriendsListController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['extended', 'count', 'offset', 'type', 'fields'];
}
