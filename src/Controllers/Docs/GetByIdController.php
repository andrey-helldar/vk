<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about documents by their IDs.
 *
 * @see https://vk.com/dev/docs.getById
 */
class GetByIdController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['docs'];
}
