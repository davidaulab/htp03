<?php

use App\Http\Controllers\BreweryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
function getBreweries () {
   
    $breweries = [
        [1, 'Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
        [2, 'El Yunque', 'Fábrica de cerveza con cervecería todo en uno. Puedes tomarte una cerveza mientras ves cómo la fabrican'],
        [3, 'La Txapela', 'Pinchos con el sabor del barrio viejo de Bilbao, acompañados de una amplia carta de cervezas'],
        [5, 'Los Amigos', 'Una cervecería de las de toda la vida, con la más pura tradición de las tabernas madrileñas'],
        [8, 'Petite Bretagne', 'Amplia carta de cervezas y crepes dulces y salados']
        ];
        return $breweries;    
}
*/


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


Route::get('/breweries', [BreweryController::class, 'index'])->name ('breweries');

// Deprecated -> Route::get('/breweries', 'BreweryController@index')->name ('breweries');

// Detalle de la cervecería

Route::get ('/brewery/{id}', [BreweryController::class, 'show']);
 


Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/about', function () {
    return view('aboutus');
})->name ('main');



Route::get('/landing', function () {
    return redirect()->route('inicio');
});
