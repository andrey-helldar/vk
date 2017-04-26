<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of school classes specified for the country.
 *
 * @see    https://vk.com/dev/database.getSchoolClasses
 */
class GetSchoolClassesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('country_id');
}
