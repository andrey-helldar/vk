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
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class DeleteClientsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids');
}
