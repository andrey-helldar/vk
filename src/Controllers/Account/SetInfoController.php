<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

class SetInfoController extends Controller
{
    /**
     * Setting name.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $name
     *
     * @return $this
     */
    public function name($name = null)
    {
        $this->setParameter('name', $name);

        return $this;
    }

    /**
     * Setting value.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $value
     *
     * @return $this
     */
    public function value($value = null)
    {
        $this->setParameter('value', $value);

        return $this;
    }

    /**
     * Bit mask responsible for passing the tutorial in mobile clients.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $intro
     *
     * @return $this
     */
    public function intro($intro = null)
    {
        $this->setParameter('intro', $intro);

        return $this;
    }

    /**
     * Posts on user wall. Possible values:
     *   1 — own posts only;
     *   0 — all posts.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $own_posts_default
     *
     * @return $this
     */
    public function ownPostsDefault($own_posts_default = null)
    {
        $this->setParameter('own_posts_default', $own_posts_default);

        return $this;
    }

    /**
     * Disable comments on the wall. Possible values:
     *   1 — disable comments;
     *   0 — enable comments.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $no_wall_replies
     *
     * @return $this
     */
    public function noWallReplies($no_wall_replies = null)
    {
        $this->setParameter('no_wall_replies', $no_wall_replies);

        return $this;
    }
}
