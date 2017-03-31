<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of faculties (i.e., university departments).
 *
 * @see    https://vk.com/dev/database.getFaculties
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetFacultiesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('university_id', 'offset', 'count');
}
