<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of documents matching the search criteria.
 *
 * @see https://vk.com/dev/docs.search
 */
class SearchController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['q', 'count', 'offset'];
}
