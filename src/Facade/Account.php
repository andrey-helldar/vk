<?php

namespace Helldar\Vk\Facade;

use Helldar\Vk\Controllers\Account\BanUserController;
use Helldar\Vk\Controllers\Account\GetInfoController;

class Account
{
    public static function banUser()
    {
        return (new BanUserController())->start();
    }

    public static function getInfo()
    {
        return (new GetInfoController())->start();
    }
}
