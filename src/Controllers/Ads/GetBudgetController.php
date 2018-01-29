<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns current budget of the advertising account.
 *
 * @see    https://vk.com/dev/ads.getBudget
 */
class GetBudgetController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['account_id'];
}
