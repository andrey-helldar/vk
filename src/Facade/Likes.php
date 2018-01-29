<?php

namespace Helldar\Vk\Facade;

class Likes extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'likes';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = [
        'add',
        'delete',
        'getList',
        'isLiked',
    ];
}
