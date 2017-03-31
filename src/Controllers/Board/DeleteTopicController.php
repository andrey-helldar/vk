<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes a topic from a community's discussion board.
 *
 * @see    https://vk.com/dev/board.deleteTopic
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class DeleteTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'topic_id');
}