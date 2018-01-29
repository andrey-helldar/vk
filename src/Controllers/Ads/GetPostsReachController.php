<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * @see    https://vk.com/dev/ads.getPostsReach
 */
class GetPostsReachController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['account_id', 'ids_type', 'ids'];
}
