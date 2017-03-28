<?php

return array(
    /*
     * API version to use.
     *
     * @see https://vk.com/dev/versions
     */
    'version' => 5.63,

    /*
     * Sets authorization page appearance. The supported values are:
     *
     *   page   — authorization form in a separate window;
     *   popup  — a pop-up window;
     *   mobile — authorization for mobile devices (uses no Javascript).
     */
    'display' => 'page',

    /*
     * Permissions bit mask, to check on authorization and request if necessary.
     *
     * @see https://vk.com/dev/permissions
     */
    'scope' => array('offline', 'friends', 'groups', 'email'),

    'redirect_error' => '/',
    'redirect_success' => '/',
);
