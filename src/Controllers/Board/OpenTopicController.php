<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Re-opens a previously closed topic on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.openTopic
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class OpenTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'topic_id');
}