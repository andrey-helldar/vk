<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of profiles of users whom the current user may know.
 * For the method to return enough suggestions, method account.importContacts will be called first.
 *
 * @see     https://vk.com/dev/friends.getSuggestions
 * @see     https://vk.com/dev/account.importContacts
 */
class GetSuggestionsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['filter', 'count', 'offset', 'fields', 'name_case'];
}
