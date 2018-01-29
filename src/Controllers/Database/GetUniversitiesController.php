<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of higher education institutions.
 *
 * @see    https://vk.com/dev/database.getUniversities
 */
class GetUniversitiesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['q', 'country_id', 'city_id', 'offset', 'count'];
}
