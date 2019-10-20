<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Other;

class Admin_Other_CL extends Controller
{
    public function intro(){
    	$intro = Other::find(1);
    	return view('admin.other.ad-intro',['intro'=>$intro]);
    }

    public function introDoEdit(Request $request,$id){
    	$intro = Other::find($id);
    	$intro->content = $request->content;
    	$intro->save();
    	return redirect()->route('master',['page'=>'intro']);
    }

    public function info(){
    	$phone = Other::find(2);
    	$email = Other::find(3);
    	return view('admin.other.ad-info',['phone'=>$phone, 'email'=>$email]);
    }

    public function infoDoEdit(Request $request){
    	$phone = Other::find(2);
    	$phone->content = $request->phone;
    	$phone->save();

    	$email = Other::find(3);
    	$email->content = $request->email;
    	$email->save();

    	return redirect()->route('master',['page'=>'info']);
    }
}
