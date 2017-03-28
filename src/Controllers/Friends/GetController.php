<?php

namespace Helldar\Vk\Controllers\Friends;

use Helldar\Vk\Controllers\Controller;

class GetController extends Controller
{
    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @return $this
     */
    public function start()
    {
        return $this;
    }

    /**
     * User ID. By default, the current user ID.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $user_id
     *
     * @return $this
     */
    public function userId($user_id = null)
    {
        $this->params['user_id'] = (int)$user_id;

        return $this;
    }

    /**
     * Number of friends to return.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param int $count
     *
     * @return $this
     */
    public function count($count = 100)
    {
        $this->params['count'] = (int)$count;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of friends.
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
        $this->params['offset'] = (int)$offset;

        return $this;
    }

    /**
     * Profile fields to return. Sample values: uid, first_name, last_name, nickname, sex, bdate (birthdate), city, country, timezone, photo, photo_medium, photo_big,
     * domain, has_mobile, rate, contacts, education.
     *
     * @see    https://vk.com/dev/fields
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string|array $fields
     *
     * @return $this
     */
    public function fields($fields)
    {
        if (gettype($fields) == 'array' || gettype($fields) == 'object') {
            $this->params['fields'] = implode(',', $fields);
        } else {
            $this->params['fields'] = trim($fields);
        }

        return $this;
    }

    /**
     * Case for declension of user name and surname:
     *   nom — nominative (default)
     *   gen — genitive
     *   dat — dative
     *   acc — accusative
     *   ins — instrumental
     *   abl — prepositional
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $name_case
     *
     * @return $this
     */
    public function nameCase($name_case = 'nom')
    {
        $this->params['name_case'] = $name_case;

        return $this;
    }
}