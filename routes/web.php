<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contacts/create');
});

Route::resource('contacts', 'ContactController');