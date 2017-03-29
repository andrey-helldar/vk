<?php

namespace Helldar\Vk\Facade;

class Account extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'account';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = array(
        'banUser',
        'changePassword',
        'getActiveOffers',
        'getAppPermissions',
        'getBanned',
        'getCounters',
        'getInfo',
        'getProfileInfo',
        'getPushSettings',
        'lookupContacts',
        'registerDevice',
        'saveProfileInfo',
        'setInfo',
        'setNameInMenu',
        'setOffline',
        'setOnline',
        'setPushSettings',
        'setSilenceMode',
        'unbanUser',
        'unregisterDevice',
    );
}
