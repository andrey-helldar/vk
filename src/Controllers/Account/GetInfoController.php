<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

class GetInfoController extends Controller
{
    /**
     * Fields to return. Possible values:
     *   country — user country;
     *   https_required — is "HTTPS only" option enabled;
     *   own_posts_default — is "Show my posts only" option is enabled;
     *   no_wall_replies — are wall replies disabled or not;
     *   intro — is intro passed by user or not;
     *   lang — user language.
     *
     * @see    https://vk.com/dev/account.getInfo
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-29
     *
     * @param string $fields
     *
     * @return $this
     */
    public function fields($fields)
    {
        if (gettype($fields) == 'array' || gettype($fields) == 'object') {
            $fields = implode(',', $fields);
        }

        $this->params['fields'] = $fields;

        return $this;
    }
}
