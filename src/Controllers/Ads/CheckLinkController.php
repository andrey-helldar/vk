<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Allows to check the ad link.
 *
 * @see    https://vk.com/dev/ads.checkLink
 */
class CheckLinkController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'link_type', 'link_url', 'campaign_id');
}
