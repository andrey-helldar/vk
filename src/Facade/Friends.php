<?php

namespace Helldar\Vk\Facade;

class Friends extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'friends';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = [
        'add',
        'addList',
        'areFriends',
        'delete',
        'deleteAllRequests',
        'deleteList',
        'edit',
        'editList',
        'get',
        'getAppUsers',
        'getByPhones',
        'getLists',
        'getMutual',
        'getOnline',
        'getRecent',
        'getRequests',
        'getSuggestions',
        'search',
    ];
}
