<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns a user's blacklist.
 *
 * @see     https://vk.com/dev/account.getBanned
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 * @package Helldar\Vk\Controllers\Account
 */
class GetBannedController extends Controller
{
    /**
     * Offset needed to return a specific subset of results.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param int $offset
     *
     * @return $this
     */
    public function offset($offset = 0)
    {
        $this->setParameter('offset', abs((int) $offset));

        return $this;
    }

    /**
     * Number of results to return.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param int $count
     *
     * @return $this
     */
    public function count($count = 20)
    {
        $this->setParameter('count', abs((int) $count));

        return $this;
    }
}