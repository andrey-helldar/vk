<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of faculties (i.e., university departments).
 *
 * @see    https://vk.com/dev/database.getFaculties
 */
class GetFacultiesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['university_id', 'offset', 'count'];
}
