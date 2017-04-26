<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Allows to search the VK users using phone numbers, e-mail addresses and user IDs on other services.
 * You may get these users by firends.getSuggestions method as well.
 *
 * @see     https://vk.com/dev/account.lookupContacts
 * @see     https://vk.com/dev/friends.getSuggestions
 */
class LookupContactsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('contacts', 'service', 'mycontact', 'return_all', 'fields');
}
