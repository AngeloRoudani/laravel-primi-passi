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

    return view('home', $data);
});
