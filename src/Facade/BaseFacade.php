<?php

namespace Helldar\Vk\Facade;

use BadMethodCallException;

class BaseFacade
{
    /**
     * @var null|string
     */
    protected $section = null;

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = [];

    /**
     * Template for callable class.
     *
     * @var string
     */
    protected $address = '\\Helldar\\Vk\\Controllers\\%s\\%sController';

    /**
     * Handle calls to missing methods on the controller.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (!in_array(camel_case($method), $this->methods)) {
            throw new BadMethodCallException("Method [{$method}] does not exist.");
        }

        $method = studly_case($method);
        $section = studly_case($this->section);
        $call = sprintf($this->address, $section, $method);

        return (new $call())->start(strtolower($section).'.'.camel_case($method));
    }
}
