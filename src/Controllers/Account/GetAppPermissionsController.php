<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Gets settings of the user in this application.
 *
 * @see     https://vk.com/dev/account.getAppPermissions
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class GetAppPermissionsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id');
}
