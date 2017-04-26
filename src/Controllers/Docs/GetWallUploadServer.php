<?php

namespace Helldar\Vk\Controllers\Docs;

/**
 * Returns the server address for document upload onto a user's or community's wall.
 *
 * @see https://vk.com/dev/docs.getWallUploadServer
 */
class GetWallUploadServer
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id');
}
