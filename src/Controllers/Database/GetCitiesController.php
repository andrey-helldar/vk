<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of cities.
 *
 * @see    https://vk.com/dev/database.getCities
 */
class GetCitiesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['country_id', 'region_id', 'q', 'need_all', 'offset', 'count'];
}
