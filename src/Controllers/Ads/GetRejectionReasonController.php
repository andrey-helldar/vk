<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a reason of ad rejection for pre-moderation.
 *
 * @see    https://vk.com/dev/ads.getRejectionReason
 */
class GetRejectionReasonController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ad_id');
}
