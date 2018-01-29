<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Adds a comment on a topic on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.createComment
 */
class CreateCommentController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['group_id', 'topic_id', 'message', 'attachments', 'from_group', 'sticker_id', 'guid'];
}
