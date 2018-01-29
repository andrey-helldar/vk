<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Copies a document to a user's or community's document list.
 *
 * @see https://vk.com/dev/docs.add
 */
class AddController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['owner_id', 'doc_id', 'access_key'];
}
