<?php

namespace Helldar\Vk\Controllers\Likes;

/**
 * Adds the specified object to the Likes list of the current user.
 *
 * @see https://vk.com/dev/likes.add
 */
class AddController
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['type', 'owner_id', 'item_id', 'access_key'];
}
