<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Allows to search the VK users using phone numbers, e-mail addresses and user IDs on other services.
 * You may get these users by firends.getSuggestions method as well.
 *
 * @see     https://vk.com/dev/account.lookupContacts
 * @see     https://vk.com/dev/friends.getSuggestions
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class LookupContactsController extends Controller
{
    /**
     * List of contacts separated with commas.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $contacts
     *
     * @return $this
     */
    public function contacts($contacts = null)
    {
        $this->setParameter('contacts', $contacts);

        return $this;
    }

    /**
     * String identifier of a service which contacts are used for searching. Possible values:
     *   email
     *   phone
     *   twitter
     *   facebook
     *   odnoklassniki
     *   instagram
     *   google
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $service
     *
     * @return $this
     */
    public function service($service = null)
    {
        $this->setParameter('service', $service);

        return $this;
    }

    /**
     * Contact of a current user on a specified service.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $mycontact
     *
     * @return $this
     */
    public function mycontact($mycontact = null)
    {
        $this->setParameter('mycontact', $mycontact);

        return $this;
    }

    /**
     * 1 – also return contacts found using this service before,
     * 0 – return only contacts found using contacts field.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $return_all
     *
     * @return $this
     */
    public function returnAll($return_all = null)
    {
        $this->setParameter('return_all', $return_all);

        return $this;
    }

    /**
     * Profile fields to return. Possible values: nickname, domain, sex, bdate, city, country, timezone, photo_50, photo_100,
     * photo_200_orig, has_mobile, contacts, education, online, relation, last_seen, status, can_write_private_message, can_see_all_posts,
     * can_post, universities.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null $fields
     *
     * @return $this
     */
    public function fields($fields = null)
    {
        $this->setParameter('fields', $fields);

        return $this;
    }
}
