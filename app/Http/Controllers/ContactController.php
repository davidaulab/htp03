<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;


class ContactController extends Controller
{

    public function show () {
        return view ('contact');
    }
    public function store (Request $request) {

        if ( Mail::to('david.martinez@aulab.es')->send(new ContactNotification(
            $request->name, 
            $request->email,
            $request->subject,
            $request->cuerpo
        ))) {
            return back()->with ('success', 'Hemos recibido correctamente tu sugerencia. En breve nos pondremos en contacto');
        }
        else {
            return back()->with ('error', 'Ha ocurrido un error, prueba más tarde');
        }
    }
}
