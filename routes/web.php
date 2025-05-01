<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('l5-swagger.default.api');
});
