<?php

namespace Helldar\Vk\Facade;

class Apps extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'apps';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = array('deleteAppRequests', 'get', 'getCatalog', 'getFriendsList', 'getLeaderboard', 'getScore', 'sendRequest');
}
