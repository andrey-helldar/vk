<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Changes a user password after access is successfully restored with the auth.restore method.
 *
 * @see     https://vk.com/dev/account.changePassword
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class ChangePasswordController extends Controller
{
    /**
     * Session id received after the auth.restore method is executed.
     * (If the password is changed right after the access was restored).
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $restore_sid
     *
     * @return $this
     */
    public function restoreSid($restore_sid)
    {
        $this->setParameter('restore_sid', $restore_sid);

        return $this;
    }

    /**
     * Hash received after a successful OAuth authorization with a code got by SMS.
     * (If the password is changed right after the access was restored).
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $change_password_hash
     *
     * @return $this
     */
    public function changePasswordHash($change_password_hash)
    {
        $this->setParameter('change_password_hash', $change_password_hash);

        return $this;
    }

    /**
     * Current user password.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $old_password
     *
     * @return $this
     */
    public function oldPassword($old_password)
    {
        $this->setParameter('old_password', $old_password);

        return $this;
    }

    /**
     * New password that will be set as a current.
     * (String, Minimale Länge 6, notwendiger Parameter)
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $new_password
     *
     * @return $this
     */
    public function newPassword($new_password)
    {
        $this->setParameter('new_password', $new_password);

        return $this;
    }
}