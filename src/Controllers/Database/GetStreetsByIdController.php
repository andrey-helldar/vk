<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about streets by their IDs.
 *
 * @see    https://vk.com/dev/database.getStreetsById
 */
class GetStreetsByIdController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('street_ids');
}
