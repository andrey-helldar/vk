<?php

namespace Helldar\Vk\Controllers\Execute;

use Helldar\Vk\Controllers\Controller;

/**
 * A universal method for calling a sequence of other methods while saving and filtering interim results.
 *
 * @see    https://vk.com/dev/execute
 */
class ExecuteController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('code');
}
