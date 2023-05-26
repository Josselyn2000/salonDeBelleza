<?php

namespace App\Http\Controllers;

use App\Models\FormContact;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function indexM(){
        $mensajes = FormContact::all();
        return view('mensajes.indexM')->with('mensajes',$mensajes);

    }
}
