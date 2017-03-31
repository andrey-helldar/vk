<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * @see    https://vk.com/dev/ads.getPostsReach
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetPostsReachController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids_type', 'ids');
}