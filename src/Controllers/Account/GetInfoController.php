<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns current account info.
 *
 * @see     https://vk.com/dev/account.getInfo
 */
class GetInfoController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['fields'];
}
