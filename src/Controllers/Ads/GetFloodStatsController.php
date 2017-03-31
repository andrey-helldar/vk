<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in
 * seconds.
 *
 * @see    https://vk.com/dev/ads.getFloodStats
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetFloodStatsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id');
}