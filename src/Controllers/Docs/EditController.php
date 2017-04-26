<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits a document.
 *
 * @see https://vk.com/dev/docs.edit
 */
class EditController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('owner_id', 'doc_id', 'title', 'tags');
}
