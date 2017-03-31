<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Imports a list of advertiser's contacts to count VK registered users against the target group.
 * Please note! Maximum allowed number of contacts imported in one request is 1000.
 *
 * @see    https://vk.com/dev/ads.importTargetContacts
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class ImportTargetContactsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'client_id', 'target_group_id', 'contacts');
}
