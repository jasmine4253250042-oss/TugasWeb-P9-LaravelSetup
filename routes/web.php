<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'nama' => 'Jasmine Azzahra Alamsyah',
        'jurusan' => 'Ilmu Komputer',
        'semester' => 3
    ];

    return view('home', compact('data'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});