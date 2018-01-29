<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Closes a topic on a community's discussion board so that comments cannot be posted.
 *
 * @see    https://vk.com/dev/board.closeTopic
 */
class CloseTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['group_id', 'topic_id'];
}
