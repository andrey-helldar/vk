<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Adds managers and/or supervisors to advertising account.
 *
 * @see     https://vk.com/dev/ads.addOfficeUsers
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class AddOfficeUsersController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'data');
}