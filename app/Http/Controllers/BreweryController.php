<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Storage;
use App\Http\Requests\BreweryRequest;

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
        $breweries = DB::table ('breweries')->get();
        //dd ($breweries);
        foreach ($breweries as $brewery) {
            if ($brewery->img == "") {
                $brewery->img = asset ('/img/logo.png');
            }
        }
        return view('breweries', ['breweries' => $breweries]);
    }


    public function show ($id) {


        $brewery = DB::table('breweries')->find($id);
        //dd ($brewery);
        if ($brewery->img == "") {
            $brewery->img = asset ('/img/logo.png');
        }
        return view ('brewery', ['brewery' => $brewery ]);
    }

    public function create () {
        
        return view('newbrewery');
    }

    public function store (BreweryRequest $request) {
        
       
        $path = $request->file ('img')->store('public/multimedia');
        $urlweb = Storage::url ($path);

        DB::table('breweries')->insert([
            'name' => $request->title,
            'description' => $request->cuerpo,
            'place' => $request->place,
            'img' => $urlweb
        ]);


        return redirect()->route('breweries')->with ('success', 'Se ha guardado la cervecería') ;
    }

    public function edit ($id) {
        $brewery = DB::table('breweries')->find($id);
      
        return view ('editbrewery', ['brewery' => $brewery ]);
    }

    public function update (BreweryRequest $request) {
        
        $urlweb ="";

        if ($request->hasFile('img')) {
            $path = $request->file ('img')->store('public/multimedia');
            $urlweb = Storage::url ($path);

            
        }
 
       

        DB::table('breweries')->where('id', '=', $request->id)
                            ->update ([
                                'name' => $request->title,
                                'description' => $request->cuerpo,
                                'place' => $request->place,
                                'img' => $urlweb
                            ]);

  
        return redirect()->route('breweries')->with ('success', 'Se ha actualizado la cervecería') ;
    }
    public function delete (Request $request) {
     //   
        DB::table('breweries')->delete($request->id);
        return redirect()->route('breweries')->with ('success', 'Se ha eliminado la cervecería') ;
   
    }
}
