<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of advertising agency's clients.
 * Available only for advertising agencies.
 *
 * @see    https://vk.com/dev/ads.getClients
 */
class GetClientsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id');
}
