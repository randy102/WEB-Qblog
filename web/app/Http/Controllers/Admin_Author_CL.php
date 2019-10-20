<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Author;


class Admin_Author_CL extends Controller
{
    public function authorList(){
    	$authors = Author::all();
    	return view('admin.other.ad-author',['authors'=>$authors]);
    }

    public function authorEdit($id){
    	$author = Author::find($id);
    	return view('admin.other.ad-author-edit',['author'=>$author]);
    }

    public function authorDoEdit(Request $request,$id){	
    	$author = Author::find($id);

    	if($request->hasFile('img')){
    		if($author->img != "user.png")
    			File::delete("img/".$author->img);

    		$img_name = $request->img->getClientOriginalName();

    		$img_name_hashed = str_random(12).'_'.$img_name;

    		$request->img->move('img',$img_name_hashed);

    		$author->img = $img_name_hashed;
    	}

    	$author->birth_date = $request->birth_date;
    	$author->place = $request->place;
    	$author->self_info = $request->self_info;

    	$author->save();

    	return redirect()->route('master',['page'=>'author']);
    }
}
