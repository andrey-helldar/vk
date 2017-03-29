<?php

namespace Helldar\Vk\Facade;

use Helldar\Vk\Controllers\Account\BanUserController;
use Helldar\Vk\Controllers\Account\ChangePasswordController;
use Helldar\Vk\Controllers\Account\GetActiveOffersController;
use Helldar\Vk\Controllers\Account\GetAppPermissionsController;
use Helldar\Vk\Controllers\Account\GetBannedController;
use Helldar\Vk\Controllers\Account\GetCountersController;
use Helldar\Vk\Controllers\Account\GetInfoController;
use Helldar\Vk\Controllers\Account\GetProfileInfoController;

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

    public static function getActiveOffers($method = null)
    {
        return (new GetActiveOffersController())->start(self::METHOD.$method);
    }

    public static function getAppPermissions($method = null)
    {
        return (new GetAppPermissionsController())->start(self::METHOD.$method);
    }

    public static function getBanned($method = null)
    {
        return (new GetBannedController())->start(self::METHOD.$method);
    }

    public static function getCounters($method = null)
    {
        return (new GetCountersController())->start(self::METHOD.$method);
    }

    public static function getInfo($method = null)
    {
        return (new GetInfoController())->start(self::METHOD.$method);
    }

    public static function getProfileInfo($method = null)
    {
        return (new GetProfileInfoController())->start(self::METHOD.$method);
    }
}
