<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Archives advertising campaigns.
 *
 * @see    https://vk.com/dev/ads.deleteCampaigns
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class DeleteCampaignsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids');
}