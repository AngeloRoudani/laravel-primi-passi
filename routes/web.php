<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contatti', function () {

    $phone = '012 3456789';
    $mail = 'tony@stark.magari';
    $address = 'Avenger Avenue, Polo Sud';

    $data = [
        'contacts' => [
            $phone,
            $mail,
            $address
        ]

    ];

    return view('about', $data);
})->name('about');

Route::get('immagini', function () {

    $data = [
        'linksImage' => [
            "https://images.unsplash.com/photo-1683441704106-d07fc8611ce7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80",
            "https://images.unsplash.com/photo-1682687982204-f1a77dcc3067?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
            "https://plus.unsplash.com/premium_photo-1665777024691-ad0a65345ee5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1375&q=80"

        ]

    ];

    return view('myImage', $data);
})->name('myImage');


