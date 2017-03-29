<?php

Route::get('vk/authorize', 'Helldar\Vk\Controllers\MainController@authRequest')->name('vk::auth')->middleware(array('web', 'auth'));
