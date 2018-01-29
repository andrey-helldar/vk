<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits the title of a topic on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.editTopic
 */
class EditTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['group_id', 'topic_id', 'title'];
}
