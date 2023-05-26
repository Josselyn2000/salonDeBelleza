<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return view('/home');
        }
        return view('/register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/usuario')->with('success','Cuenta creada correctamente');
    }
    public function indexAdmin(){
        $users = User::all();
        return view('admin.indexAdmin')->with('admin',$users);
    }
    
}
