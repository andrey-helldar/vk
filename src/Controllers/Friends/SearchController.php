<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of friends matching the search criteria.
 *
 * @see     https://vk.com/dev/friends.search
 */
class SearchController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['user_id', 'q', 'fields', 'name_case', 'offset', 'count'];
}
