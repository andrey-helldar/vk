<?php

namespace Helldar\Vk\Controllers\Likes;

/**
 * Returns a list of IDs of users who added the specified object to their Likes list.
 *
 * @see     https://vk.com/dev/likes.getList
 */
class GetListController
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array(
        'type',
        'owner_id',
        'item_id',
        'page_url',
        'filter',
        'friends_only',
        'extended',
        'offset',
        'count',
        'skip_own',
    );
}
