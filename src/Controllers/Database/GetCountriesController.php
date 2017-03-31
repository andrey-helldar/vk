<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of countries.
 *
 * @see    https://vk.com/dev/database.getCountries
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetCountriesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('need_all_id', 'code', 'offset', 'count');
}
