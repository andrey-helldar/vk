<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of countries.
 *
 * @see    https://vk.com/dev/database.getCountries
 */
class GetCountriesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['need_all_id', 'code', 'offset', 'count'];
}
