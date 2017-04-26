<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Saves a document after uploading it to a server.
 *
 * @see https://vk.com/dev/docs.save
 * @see https://vk.com/dev/upload_files_2?f=10.%2BUploading%2BDocuments
 */
class SaveController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('file', 'title', 'tags');
}
