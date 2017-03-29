<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Edits current profile info.
 *
 * @see     https://vk.com/dev/account.saveProfileInfo
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class SaveProfileInfoController extends Controller
{
    /**
     * User first name.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $first_name
     *
     * @return $this
     */
    public function firstName($first_name = null)
    {
        $this->setParameter('first_name', $first_name);

        return $this;
    }

    /**
     * User last name.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $last_name
     *
     * @return $this
     */
    public function lastName($last_name = null)
    {
        $this->setParameter('last_name', $last_name);

        return $this;
    }

    /**
     * User maiden name (female only).
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $maiden_name
     *
     * @return $this
     */
    public function maidenName($maiden_name = null)
    {
        $this->setParameter('maiden_name', $maiden_name);

        return $this;
    }

    /**
     * User screen name.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $screen_name
     *
     * @return $this
     */
    public function screenName($screen_name = null)
    {
        $this->setParameter('screen_name', $screen_name);

        return $this;
    }

    /**
     * ID of the name change request to be canceled. If this paremeter is sent, all the others are ignored.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $cancel_request_id
     *
     * @return $this
     */
    public function cancelRequestId($cancel_request_id = null)
    {
        $this->setParameter('cancel_request_id', $cancel_request_id);

        return $this;
    }

    /**
     * User sex. Possible values:
     *   1 – female;
     *   2 – male.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $sex
     *
     * @return $this
     */
    public function sex($sex = null)
    {
        $this->setParameter('sex', $sex);

        return $this;
    }

    /**
     * User relationship status. Possible values:
     *   1 – single;
     *   2 – in a relationship;
     *   3 – engaged;
     *   4 – married;
     *   5 – it's complicated;
     *   6 – actively searching;
     *   7 – in love;
     *   8 — in a civil union;
     *   0 – not specified.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $relation
     *
     * @return $this
     */
    public function relation($relation = null)
    {
        $this->setParameter('relation', $relation);

        return $this;
    }

    /**
     * ID of the relationship partner.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $relation_partner_id
     *
     * @return $this
     */
    public function relationPartnerId($relation_partner_id = null)
    {
        $this->setParameter('relation_partner_id', $relation_partner_id);

        return $this;
    }

    /**
     * User birth date, format: DD.MM.YYYY.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $bdate
     *
     * @return $this
     */
    public function bdate($bdate = null)
    {
        $this->setParameter('bdate', $bdate);

        return $this;
    }

    /**
     * Birth date visibility. Returned values:
     *   1 – show birth date;
     *   2 – show only month and date;
     *   0 – hide birth date.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $bdate_visibility
     *
     * @return $this
     */
    public function bdateVisibility($bdate_visibility = null)
    {
        $this->setParameter('bdate_visibility', $bdate_visibility);

        return $this;
    }

    /**
     * User home town.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $home_town
     *
     * @return $this
     */
    public function homeTown($home_town = null)
    {
        $this->setParameter('home_town', $home_town);

        return $this;
    }

    /**
     * User country.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $country_id
     *
     * @return $this
     */
    public function countryId($country_id = null)
    {
        $this->setParameter('country_id', $country_id);

        return $this;
    }

    /**
     * User city.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|int $city_id
     *
     * @return $this
     */
    public function cityId($city_id = null)
    {
        $this->setParameter('city_id', $city_id);

        return $this;
    }

    /**
     * Status text.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param null|string $status
     *
     * @return $this
     */
    public function status($status = null)
    {
        $this->setParameter('status', $status);

        return $this;
    }
}
