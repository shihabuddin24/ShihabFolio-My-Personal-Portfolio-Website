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

Route::get('/contact', function () {
    return view('web.contact.index');
});

Route::get('/terms', function () {
    return view('web.terms.index');
});

Route::get('/privacy', function () {
    return view('web.privacy.index');
});

Route::get('/about', function () {
    return view('web.about.index');
});

Route::get('/blogs', function () {
    return view('web.blogs.index');
});

Route::get('/blog-details', function () {
    return view('web.blogs.view');
});

Route::get('/login', function () {
    return view('web.components.login');
});
