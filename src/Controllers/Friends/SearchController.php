<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of friends matching the search criteria.
 *
 * @see     https://vk.com/dev/friends.search
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Friends
 */
class SearchController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id', 'q', 'fields', 'name_case', 'offset', 'count');
}
