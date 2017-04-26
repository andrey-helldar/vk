<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Removes managers and/or supervisors from advertising account.
 *
 * @see    https://vk.com/dev/ads.removeOfficeUsers
 */
class RemoveOfficeUsersController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'ids');
}
