<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of possible ad categories.
 *
 * @see    https://vk.com/dev/ads.getCategories
 */
class GetCategoriesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['lang'];
}
