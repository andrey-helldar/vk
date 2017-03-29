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
use Helldar\Vk\Controllers\Account\GetPushSettingsController;
use Helldar\Vk\Controllers\Account\LookupContactsController;
use Helldar\Vk\Controllers\Account\RegisterDeviceController;
use Helldar\Vk\Controllers\Account\SaveProfileInfoController;
use Helldar\Vk\Controllers\Account\SetInfoController;
use Helldar\Vk\Controllers\Account\SetNameInMenuController;
use Helldar\Vk\Controllers\Account\SetOfflineController;
use Helldar\Vk\Controllers\Account\SetOnlineController;
use Helldar\Vk\Controllers\Account\SetPushSettingsController;
use Helldar\Vk\Controllers\Account\SetSilenceModeController;
use Helldar\Vk\Controllers\Account\UnbanUserController;
use Helldar\Vk\Controllers\Account\UnregisterDeviceController;

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

    public static function getPushSettings($method = null)
    {
        return (new GetPushSettingsController())->start(self::METHOD.$method);
    }

    public static function lookupContacts($method = null)
    {
        return (new LookupContactsController())->start(self::METHOD.$method);
    }

    public static function registerDevice($method = null)
    {
        return (new RegisterDeviceController())->start(self::METHOD.$method);
    }

    public static function saveProfileInfo($method = null)
    {
        return (new SaveProfileInfoController())->start(self::METHOD.$method);
    }

    public static function setInfo($method = null)
    {
        return (new SetInfoController())->start(self::METHOD.$method);
    }

    public static function setNameInMenu($method = null)
    {
        return (new SetNameInMenuController())->start(self::METHOD.$method);
    }

    public static function setOffline($method = null)
    {
        return (new SetOfflineController())->start(self::METHOD.$method);
    }

    public static function setOnline($method = null)
    {
        return (new SetOnlineController())->start(self::METHOD.$method);
    }

    public static function setPushSettings($method = null)
    {
        return (new SetPushSettingsController())->start(self::METHOD.$method);
    }

    public static function setSilenceMode($method = null)
    {
        return (new SetSilenceModeController())->start(self::METHOD.$method);
    }

    public static function unbanUser($method = null)
    {
        return (new UnbanUserController())->start(self::METHOD.$method);
    }

    public static function unregisterDevice($method = null)
    {
        return (new UnregisterDeviceController())->start(self::METHOD.$method);
    }
}
