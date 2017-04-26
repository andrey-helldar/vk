<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Sends a request to another user in an app that uses VK authorization.
 *
 * @see    https://vk.com/dev/apps.sendRequest
 */
class SendRequestController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('user_id', 'text', 'type', 'name', 'key', 'separate');
}
