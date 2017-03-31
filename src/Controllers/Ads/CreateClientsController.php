<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates clients of an advertising agency.
 * Available only for advertising agencies.
 *
 * Please note! Allowed number of clients created in one request is 50.
 *
 * @see    https://vk.com/dev/ads.createClients
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class CreateClientsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'data');
}
