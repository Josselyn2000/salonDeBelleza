<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormContact;

class ContactController extends Controller
{
    public function indexContact(){
        return view('contact');
    }
    public function store(Request $request){
        $formContact = new FormContact;
        $formContact->nameContact = $request->nameContact;
        $formContact->emailContact = $request->emailContact;
        $formContact->subject = $request->subject;
        $formContact->message = $request->message;
        $formContact->save();
        return redirect('contact')->with('status','Mensaje enviado');

    }
}
