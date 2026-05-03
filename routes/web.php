<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

Route::get('/projects', function () {
    return view('web.projects.index');
});

Route::get('/project-details', function () {
    return view('web.projects.view');
});
