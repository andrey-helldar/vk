<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns applications data.
 *
 * @see    https://vk.com/dev/apps.get
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('app_id', 'app_ids', 'platform', 'extended', 'return_friends', 'fields', 'name_case');
}