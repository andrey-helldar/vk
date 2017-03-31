<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of advertising accounts.
 *
 * @see    https://vk.com/dev/ads.getAccounts
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetAccountsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'account_type', 'account_status', 'access_role');
}