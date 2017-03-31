<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates ads.
 * Please note! Maximum allowed number of ads created in one request is 5. Minimum size of ad audience is 50 people.
 *
 * @see    https://vk.com/dev/ads.createAds
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class CreateAdsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'data');
}