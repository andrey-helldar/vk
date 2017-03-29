<?php

namespace Helldar\Vk\Facade;

use BadMethodCallException;

class BaseFacade
{
    /**
     * Handle calls to missing methods on the controller.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param $method
     * @param $parameters
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic($method, $parameters)
    {
        throw new BadMethodCallException("Method [{$method}] does not exist.");
    }
}
