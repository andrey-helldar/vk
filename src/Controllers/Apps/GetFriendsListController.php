<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates friends list for requests and invites in current app.
 *
 * @see    https://vk.com/dev/apps.getFriendsList
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetFriendsListController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('extended', 'count', 'offset', 'type', 'fields');
}
