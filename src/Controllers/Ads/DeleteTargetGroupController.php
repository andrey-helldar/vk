<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes a retarget group.
 *
 * @see    https://vk.com/dev/ads.deleteTargetGroup
 */
class DeleteTargetGroupController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['account_id', 'client_id', 'target_group_id'];
}
