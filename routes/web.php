<?php

use Illuminate\Support\Facades\Route;


function getBreweries () {
   /* $breweries = [
                    [
                        ['Zalwa', 3],
                        ['Adrián', 5],
                        ['Helena', 7],
                        ['Nacho', 10]
                    ],
                ];
                //$breweries[0][2][1];
                foreach ($breweries as $primeraDimension) {
                    echo "<h1>Primera</h1>";
                    foreach ($primeraDimension as $segundaDimension) {
                        echo "<h2>Segunda</h2>";
                        foreach ($segundaDimension as $terceradimension) {
                            echo "<p>" . $terceradimension . '</p>';
                        }
                    }
                } */
    $breweries = [
        [32391, 'Cervecería 1', 'Este sería el contenido de artículo 1 que no es muy largo'],
        [23232, 'Cervecería 2', 'Este sería el contenido de artículo 2 que es el siguiente'],
        [54543, 'Cervecería 3', 'Este sería el contenido de artículo 3 que es la suma de los dos anteriores'],
        [21215, 'Cervecería 5', 'Este sería el contenido de artículo 5 que sigue la numeración de Fibonacci'],
        [33228, 'Cervecería 8', 'Este sería el contenido de artículo 8 que ya es el último']
        ];
        $breweries[0][2];
        return $breweries;    
}


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
});

Route::get('/index', function () {
    return view('home');
})->name('inicio');

Route::get('/breweries', function () {
    
    $breweries = getBreweries ();

    return view('breweries', ['breweries' => $breweries]);
})->name ('breweries');

// Detalle de la cervecería
Route::get ('/brewery/{id}', function ($id) {
    $breweries = getBreweries ();

    $fila = -1;
    for ($i = 0; $i < sizeof ($breweries); $i++) {
        if ($id == $breweries[$i][0]) {
            $fila = $i;
        }
    }

    return view ('brewery', ['brewery' => $breweries[$fila]]);
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('aboutus');
})->name ('main');



Route::get('/landing', function () {
    return redirect()->route('inicio');
});
