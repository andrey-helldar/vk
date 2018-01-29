<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of target groups.
 *
 * @see    https://vk.com/dev/ads.getTargetGroups
 */
class GetTargetGroupsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['account_id', 'client_id', 'extended'];
}
