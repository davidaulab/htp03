<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{
    //
    private $breweries = [
            [1, '0- Bewikl', 'Es una cervecería con gran variedad y una terraza con vistas al Acueducto'],
            [2, 'El Yunque', 'Fábrica de cerveza con cervecería todo en uno. Puedes tomarte una cerveza mientras ves cómo la fabrican'],
            [3, '8-La Txapela', 'Pinchos con el sabor del barrio viejo de Bilbao, acompañados de una amplia carta de cervezas'],
            [5, 'Los Amigos', 'Una cervecería de las de toda la vida, con la más pura tradición de las tabernas madrileñas'],
            [8, 'Petite Bretagne', 'Amplia carta de cervezas y crepes dulces y salados']
            ];
    
    public function index () {


        return view('breweries', ['breweries' => $this->breweries]);
    }


    public function show ($id) {
    
        $fila = -1;
        for ($i = 0; $i < sizeof ($this->breweries); $i++) {
            if ($id == $this->breweries[$i][0]) {
                $fila = $i;
            }
        }

        return view ('brewery', ['brewery' => $this->breweries[$fila]]);
    }
}
