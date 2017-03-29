<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a user's blacklist.
 *
 * @see     https://vk.com/dev/account.getBanned
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class GetBannedController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['offset', 'count'];
}
