<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about countries by their IDs.
 *
 * @see    https://vk.com/dev/database.getCountriesById
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetCountriesByIdController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('country_ids');
}
