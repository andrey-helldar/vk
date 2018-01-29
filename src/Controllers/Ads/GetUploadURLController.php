<?php

namespace Helldar\Vk\Controllers\Ads;

use Helldar\Vk\Controllers\Controller;

/**
 * Returns URL to upload an ad photo to.
 * More about ad image uploading.
 *
 * @see    https://vk.com/dev/ads.getUploadURL
 * @see    https://vk.com/dev/upload_photo_ads
 */
class GetUploadURLController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = ['ad_format'];
}
