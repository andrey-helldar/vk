<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes a retarget group.
 *
 * @see    https://vk.com/dev/ads.deleteTargetGroup
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class DeleteTargetGroupController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'client_id', 'target_group_id');
}
