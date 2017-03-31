<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
 * When executed successfully this method returns user accounting code on advertiser's site. You shall add this code to the site page, so
 * users registered in VK will be added to the created target group after they visit this page.
 *
 * Use ads.importTargetContacts method to import existing user contacts to the group.
 *
 * Please note! Maximum allowed number of groups for one advertising account is 10.
 *
 * @see    https://vk.com/dev/ads.createTargetGroup
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class CreateTargetGroupController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('account_id', 'client_id', 'name', 'lifetime');
}