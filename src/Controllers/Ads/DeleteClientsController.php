<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Archives clients of an advertising agency.
 * Available only for advertising agencies.
 *
 * Please note! Maximum allowed number of clients edited in one request is 10.
 *
 * @see    https://vk.com/dev/ads.deleteClients
 */
class DeleteClientsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['account_id', 'ids'];
}
