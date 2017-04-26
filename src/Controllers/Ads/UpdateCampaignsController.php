<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits advertising campaigns.
 *
 * @see    https://vk.com/dev/ads.updateCampaigns
 */
class UpdateCampaignsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'data');
}
