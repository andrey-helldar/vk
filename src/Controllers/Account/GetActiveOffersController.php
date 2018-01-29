<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the
 * application. To show the user one or all ads you can use showLeadsPaymentBox JS API method. After the user completed one of the
 * campaigns offer to him/her, votes will be automatically entered to user's balance in the application. In this case, the application can
 * write off the required number of votes by converting them into the application's internal currency.
 *
 * @see     https://vk.com/dev/account.getActiveOffers
 */
class GetActiveOffersController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['offset', 'count'];
}
