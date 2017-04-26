<?php

namespace Helldar\Vk\Controllers\Docs;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns documents types available for current user.
 *
 * @see https://vk.com/dev/docs.getTypes
 */
class GetTypesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('owner_id');
}
