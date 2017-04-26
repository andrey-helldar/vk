<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns detailed information about user or community documents.
 *
 * @see https://vk.com/dev/docs.get
 */
class GetController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('owner_id', 'count', 'offset', 'type');
}
