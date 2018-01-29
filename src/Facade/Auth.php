<?php

namespace Helldar\Vk\Facade;

class Auth extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'auth';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = [
        'checkPhone',
        'confirm',
        'restore',
        'signup',
    ];
}
