<?php

namespace Helldar\Vk\Controllers\Board;

use Helldar\Vk\Controllers\Controller;

/**
 * Deletes a comment on a topic on a community's discussion board.
 *
 * @see    https://vk.com/dev/board.deleteComment
 */
class DeleteCommentController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('group_id', 'topic_id', 'comment_id');
}
