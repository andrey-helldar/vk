<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Retuns ad targeting parameters.
 *
 * @see    https://vk.com/dev/ads.getAdsTargeting
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetAdsTargetingController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'client_id', 'include_deleted', 'campaign_ids', 'ad_ids', 'limit', 'offset');
}
