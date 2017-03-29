<?php

namespace Helldar\Vk\Facade;

use Helldar\Vk\Controllers\Account\BanUserController;
use Helldar\Vk\Controllers\Account\GetInfoController;

class Account extends BaseFacade
{
    const METHOD = 'account.';

    public static function banUser($method = null)
    {
        return (new BanUserController())->start(Account::METHOD.$method);
    }

    public static function getInfo($method = null)
    {
        return (new GetInfoController())->start(Account::METHOD.$method);
    }
}
