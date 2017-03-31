<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits the title of a topic on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.editTopic
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class EditTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'topic_id', 'title');
}
