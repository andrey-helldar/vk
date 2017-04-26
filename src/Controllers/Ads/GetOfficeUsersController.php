<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of managers and supervisors of advertising account.
 *
 * @see    https://vk.com/dev/ads.getOfficeUsers
 */
class GetOfficeUsersController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id');
}
