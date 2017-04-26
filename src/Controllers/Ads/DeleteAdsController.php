<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Archives ads.
 *
 * @see    https://vk.com/dev/ads.deleteAds
 */
class DeleteAdsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids');
}
