<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Creates a new topic on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.addTopic
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class AddTopicController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'title', 'text', 'from_group', 'attachments');
}