<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of possible ad categories.
 *
 * @see    https://vk.com/dev/ads.getCategories
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetCategoriesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('lang');
}
