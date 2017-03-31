<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of schools.
 *
 * @see    https://vk.com/dev/database.getSchools
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetSchoolsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('q', 'city_id', 'offset', 'count');
}
