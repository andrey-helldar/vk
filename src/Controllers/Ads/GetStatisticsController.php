<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns statistics of performance indicators for ads, campaigns, clients or the whole account.
 *
 * @see    https://vk.com/dev/ads.getStatistics
 */
class GetStatisticsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids_type', 'ids', 'period', 'date_from', 'date_to');
}
