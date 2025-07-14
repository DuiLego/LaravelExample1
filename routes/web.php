<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/test', function () {
    return 'welcome';
}); */

Route::get('/test', function () {
    return view('test');
});

/* Route::get('/crud', function () {
    return view('crud/index');
}); */

Route::get('/juan', function () {
    $age = 30;
    $data = ['name' => 'Cesar', 'age' => $age];

    return view('crud/index', $data);
})->name('crud');

Route::get('/contact', function () {
    //return redirect()->route('contact2');
    /* return to_route('contact2'); */

    return view('contact', ['name' => 'Cesar']);
})->name('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');