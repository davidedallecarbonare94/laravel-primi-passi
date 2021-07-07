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
    // Funzione con Compact
    /* $name = "Davide";
    return view('home', compact("name")); */

    // Funzione con data
    $data = [
        "name" => "Davide",
        "lastname" => "Dalle Carbonare",
        "age" => "27",
        "students" => [
            "Dea",
            "Mascotte",
            "Container",
            "Disagio",
            "Uomo delle Sagre",
            "Prof 2",
            "Moschettiere"
        ]
    ];

    return view('home', $data);
});


