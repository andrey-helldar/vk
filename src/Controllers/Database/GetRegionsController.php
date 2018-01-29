<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of regions.
 *
 * @see    https://vk.com/dev/database.getRegions
 */
class GetRegionsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['country_id', 'q', 'offset', 'count'];
}
