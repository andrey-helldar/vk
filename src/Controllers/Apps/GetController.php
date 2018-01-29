<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns applications data.
 *
 * @see    https://vk.com/dev/apps.get
 */
class GetController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['app_id', 'app_ids', 'platform', 'extended', 'return_friends', 'fields', 'name_case'];
}
