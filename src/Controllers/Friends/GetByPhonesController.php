<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
 * This method can be used only if the current user's mobile phone number is validated. To check the validation, use the users.get method
 * with user_ids=API_USER and fields=has_mobile parameters where API_USER is equal to the current user ID.
 *
 * @see     https://vk.com/dev/friends.getByPhones
 */
class GetByPhonesController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['phones', 'fields'];
}
