<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Gets settings of the user in this application.
 *
 * @see     https://vk.com/dev/account.getAppPermissions
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class GetAppPermissionsController extends Controller
{
    /**
     * User ID whose settings information shall be got.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $user_id
     *
     * @return $this
     */
    public function userId($user_id = null)
    {
        $this->setParameter('user_id', abs((int) $user_id));

        return $this;
    }
}