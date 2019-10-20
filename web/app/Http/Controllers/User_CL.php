<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;


class User_CL extends Controller
{
    public function loginCheck(Request $request){
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

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

    public function nameCoincident($name=null){

        if(User::where('name',$name)->exists())
            return "<div class='text-danger'>Tên này đã tồn tại</div>";
        
        else
            return "<div class='text-success'>Có thể sử dụng!</div>";
    }

    public function passwordCoincident($password=null){
        if(Hash::check($password,Auth::user()->password))
            return "true";
        
        else
            return "false";
    }

    public function doChangeInfo(Request $request){
        $name = $request->name;
        $changed_password = $request->changed_password;

        $user = User::find(Auth::user()->id);
        $user->name = $name;

        if($changed_password != null){
            $user->password = Hash::make($changed_password);
        }

        $user->save();

        return redirect('change_user_info')->with("message","<div class='alert alert-success'>Cập nhật thành công</div>");
    }

    public function signupCheck(Request $request){
        $this->validate($request,[

                'name'          => 'required|max:30|unique:users',
                'email'         => 'required|email|unique:users',
                'password'      => 'required|min:6',
                're_password'   => 'required|min:6|same:password'

            ],
            [
                'required' => 'Không được để trống ô nào!',
                'min'      => 'Mật khẩu phải nhiều hơn 6 ký tự1',
                'same'     => 'Mật khẩu nhập lại không đúng!',
                'name.unique' => 'Tên hiển thị đã tồn tại!',
                'email.email' => 'Email không hợp lệ!',
                'email.unique'=> 'Email đã tồn tại!'


            ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 0;

        $user->save();

        return redirect()->back()->with('signup','success');
    }

}
