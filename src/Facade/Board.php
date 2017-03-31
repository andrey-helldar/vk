<?php

namespace Helldar\Vk\Facade;

class Board extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'board';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = array(
        'addTopic',
        'closeTopic',
        'createComment',
        'deleteComment',
        'deleteTopic',
        'editComment',
        'editTopic',
        'fixTopic',
        'getComments',
        'getTopics',
        'openTopic',
        'restoreComment',
        'unfixTopic',
    );
}
