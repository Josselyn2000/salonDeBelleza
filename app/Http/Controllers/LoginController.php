<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function show(){
        if(Auth::check()){
            return redirect('/home.index');
        }
        return view('/usuario');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/usuario')->withErrors('Datos incorrectos');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        if(auth()->user()->role == 'admin'){
            return redirect('/admin');
        }else{
            return redirect('/home');
        }
        
    }
}
