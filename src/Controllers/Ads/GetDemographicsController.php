<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns demographics for ads or campaigns.
 *
 * @see    https://vk.com/dev/ads.getDemographics
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetDemographicsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids_type', 'ids', 'period', 'date_from', 'date_to');
}