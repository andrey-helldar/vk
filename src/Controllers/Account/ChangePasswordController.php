<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Changes a user password after access is successfully restored with the auth.restore method.
 *
 * @see     https://vk.com/dev/account.changePassword
 */
class ChangePasswordController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('restore_sid', 'change_password_hash', 'old_password', 'new_password');
}
