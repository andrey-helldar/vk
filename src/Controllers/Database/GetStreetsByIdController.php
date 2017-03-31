<?php

namespace Helldar\Vk\Controllers\Database;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about streets by their IDs.
 *
 * @see    https://vk.com/dev/database.getStreetsById
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
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
