<?php

namespace Helldar\Vk\Controllers\Messages;

/**
 * Sends a message.
 *
 * @see https://vk.com/dev/messages.send
 */
class SendController
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['user_id', 'random_id', 'peer_id', 'domain', 'chat_id', 'user_ids', 'message', 'lat', 'long', 'forward_messages', 'sticker_id'];
}
