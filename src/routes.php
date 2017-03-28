<?php

Route::get('vk/authorize', 'Helldar\Vk\Controllers\BaseController@auth')->name('vk::auth');