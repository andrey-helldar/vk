<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns non-null values of user counters.
 *
 * @see     https://vk.com/dev/account.getCounters
 */
class GetCountersController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('filter');
}
