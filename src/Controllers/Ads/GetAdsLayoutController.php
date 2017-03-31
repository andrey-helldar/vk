<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns descriptions of ad layouts.
 *
 * @see    https://vk.com/dev/ads.getAdsLayout
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetAdsLayoutController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'client_id', 'include_deleted', 'campaign_ids', 'ad_ids', 'limit', 'offset');
}
