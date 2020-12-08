<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorisationController extends Controller
{
    public function register(Request $request){
        return $request->all();
    }
}
