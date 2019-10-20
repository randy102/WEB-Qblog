<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    public function loginCheck(Request $request){
    	if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){

    		$request->session()->put('login','success');


            if(Auth::user()->level == 1)
                $request->session()->put('isAdmin','1');
    		return redirect()->back();
    	}
    	else{
    		$request->session()->put('login','fail');
    		return redirect()->back();
    	}
    }

    public function logout(Request $request){
    	Auth::logout();
    	$request->session()->forget('login');
    	return redirect('/');
    }
}
