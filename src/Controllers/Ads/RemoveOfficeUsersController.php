<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Removes managers and/or supervisors from advertising account.
 *
 * @see    https://vk.com/dev/ads.removeOfficeUsers
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
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