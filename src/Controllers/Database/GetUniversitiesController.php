<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of higher education institutions.
 *
 * @see    https://vk.com/dev/database.getUniversities
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetUniversitiesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('q', 'country_id', 'city_id', 'offset', 'count');
}
