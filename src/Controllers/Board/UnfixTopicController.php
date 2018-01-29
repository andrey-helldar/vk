<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Unpins a pinned topic from the top of a community's discussion board.
 *
 * @see    https://vk.com/dev/board.unfixTopic
 */
class UnfixTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['group_id', 'topic_id'];
}
