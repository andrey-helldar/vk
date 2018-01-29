<?php

namespace Helldar\Vk\Controllers\Apps;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns user score in app.
 *
 * @see    https://vk.com/dev/apps.getScore
 */
class GetScoreController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['user_id'];
}
