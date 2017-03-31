<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a list of topics on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.getTopics
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 */
class GetTopicsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'topic_ids', 'order', 'offset', 'count', 'extended', 'preview', 'preview_length');
}