<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function indexAdmin(){
        $users = User::all();
        return view('admin.indexAdmin')->with('admin',$users);
    }
}
