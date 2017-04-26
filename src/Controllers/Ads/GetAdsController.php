<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns number of ads.
 *
 * @see    https://vk.com/dev/ads.getAds
 */
class GetAdsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'client_id', 'include_deleted', 'campaign_ids', 'ad_ids', 'limit', 'offset');
}
