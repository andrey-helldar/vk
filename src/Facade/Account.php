<?php

namespace Helldar\Vk\Facade;

use Helldar\Vk\Controllers\Account\BanUserController;
use Helldar\Vk\Controllers\Account\ChangePasswordController;
use Helldar\Vk\Controllers\Account\GetInfoController;

class Account extends BaseFacade
{
    const METHOD = 'account.';

    public static function banUser($method = null)
    {
        return (new BanUserController())->start(self::METHOD.$method);
    }

    public static function changePassword($method = null)
    {
        return (new ChangePasswordController())->start(self::METHOD.$method);
    }

    public static function getInfo($method = null)
    {
        return (new GetInfoController())->start(self::METHOD.$method);
    }
}
