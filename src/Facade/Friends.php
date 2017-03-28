<?php

namespace Helldar\Vk\Facade;

use Helldar\Vk\Controllers\Friends\GetController;

class Friends
{
    public static function get()
    {
        return (new GetController())->start();
    }
}