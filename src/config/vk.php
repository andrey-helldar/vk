<?php

return [
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
    'scope' => ['offline', 'friends', 'groups', 'email'],

    /*
     * Redirect to this URL when authorization with errors.
     */
    'redirect_error' => '/',

    /*
     * Redirect to this URL when authorization without errors.
     */
    'redirect_success' => '/',

    /*
     * Maximum permissible number of errors in accessing the VK API.
     */
    'max_errors' => 10,
];
