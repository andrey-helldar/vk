<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns list of chairs on a specified faculty.
 *
 * @see    https://vk.com/dev/database.getChairs
 */
class GetChairsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('faculty_id', 'offset', 'count');
}
