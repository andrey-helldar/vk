<?php

namespace Helldar\Vk\Controllers\Likes;

/**
 * Deletes the specified object from the Likes list of the current user.
 *
 * @see     https://vk.com/dev/likes.delete
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class DeleteController
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('type', 'owner_id', 'item_id');
}
