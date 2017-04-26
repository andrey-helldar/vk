<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes a user or community document.
 *
 * @see https://vk.com/dev/docs.delete
 */
class DeleteController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('owner_id', 'doc_id');
}
