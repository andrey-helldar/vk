<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of applications (apps) available to users in the App Catalog.
 * You may call this method no more that 60 times in one minute from the same IP address or ID.
 *
 * @see    https://vk.com/dev/apps.getCatalog
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetCatalogController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array(
        'sort',
        'offset',
        'count',
        'platform',
        'extended',
        'return_friends',
        'fields',
        'name_case',
        'q',
        'genre_id',
        'filter',
    );
}
