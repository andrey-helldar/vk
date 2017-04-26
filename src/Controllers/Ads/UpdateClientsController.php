<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits clients of an advertising agency.
 * Available only for advertising agencies.
 *
 * Please note! Maximum allowed number of clients edited in one request is 50.
 *
 * @see    https://vk.com/dev/ads.updateClients
 */
class UpdateClientsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'data');
}
