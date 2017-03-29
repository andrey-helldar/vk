<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits current profile info.
 *
 * @see     https://vk.com/dev/account.saveProfileInfo
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class SaveProfileInfoController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array(
        'first_name',
        'last_name',
        'maiden_name',
        'screen_name',
        'cancel_request_id',
        'sex',
        'relation',
        'relation_partner_id',
        'bdate',
        'bdate_visibility',
        'home_town',
        'country_id',
        'city_id',
        'status',
    );
}
