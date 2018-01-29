<?php

namespace Helldar\Vk\Facade;

class Messages extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'messages';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = ['send'];
}
