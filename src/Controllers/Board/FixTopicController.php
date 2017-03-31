<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Pins a topic (fixes its place) to the top of a community's discussion board.
 *
 * @see    https://vk.com/dev/board.fixTopic
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class FixTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'topic_id');
}