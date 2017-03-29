<?php

namespace Helldar\Vk\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends RoutingController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}