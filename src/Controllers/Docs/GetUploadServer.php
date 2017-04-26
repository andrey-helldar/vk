<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns the server address for document upload.
 *
 * @see https://vk.com/dev/docs.getUploadServer
 */
class GetUploadServer extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id');
}
