<?php

namespace Helldar\Vk\Facade;

use Helldar\Vk\Controllers\Friends\GetController;

class Friends extends BaseFacade
{
    const METHOD = 'friends.';

    public static function get($method = null)
    {
        return (new GetController())->start(Friends::METHOD.$method);
    }
}
