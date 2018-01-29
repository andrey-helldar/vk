<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits ads.
 * Please note! Allowed number of ads edited in one request is 20. Minimum size of ad audience is 50 people.
 *
 * @see    https://vk.com/dev/ads.updateAds
 */
class UpdateAdsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['account_id', 'data'];
}
