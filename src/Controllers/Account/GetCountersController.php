<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns non-null values of user counters.
 *
 * @see     https://vk.com/dev/account.getCounters
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class GetCountersController extends Controller
{
    /**
     * Counters to be returned (friends, friends_suggestions, messages, photos, videos, notes, gifts, events, groups, sdk).
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param $filter
     *
     * @return $this
     */
    public function filter($filter)
    {
        $this->setParameter('filter', $filter);

        return $this;
    }
}
