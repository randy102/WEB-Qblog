<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

use App\Author;
use App\User;

class Admin_User_CL extends Controller
{
    //Users

    public function memberDoAdd(Request $request){
    	$user = new User;

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->level = $request->level;

    	$user->save();

    	$last_id = $user->id;

    	if($request->level == 1){
    		$author = new Author;
    		$author->id_user = $last_id;
    		$author->save();
    	}

    	return view('admin.ad-master',['page' => 'memberList']);
    }

    public function memberList(){
    	$users = User::all();
    	return view('admin.member.ad-member-list',['users'=>$users]);
    }

    public function memberEdit($id){
    	$data = User::find($id);
    	return view('admin.member.ad-member-edit',['data'=>$data]);
    }

    public function memberDoEdit(Request $request,$id){
    	$user = User::find($id);

    	//If change Level
    	if($request->level == 0 && $user->level == 1){
    		$author = Author::where('id_user',$id);
    		$author->delete();
    	}
    	else if($request->level == 1 && $user->level == 0){
    		$author = new Author;
    		$author->id_user = $id;
    		$author->save();
    	}

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->level = $request->level;
        
        if($request->password != "")
    	   $user->password = Hash::make($request->password);

    	$user->save();

    	return view('admin.ad-master',['page'=>'memberEdit/'.$id]);
    }


    public function memberDelete($id){
    	$user = User::find($id);

    	$level = $user->level;

    	//If is Author
    	if($level == 1){

    		$author = Author::where('id_user',$id);
    		$author->delete();

    	}

    	$user->delete();

    	return $this->memberList();
    	
    }

    //End Users
}
