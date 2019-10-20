<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Category;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class Admin_Blog_CL extends Controller
{
    public function blogAdd(){
    	$categories = Category::all();
    	return view('admin.blog.ad-blog-add',['categories'=>$categories]);
    }

    public function blogDoAdd(Request $request){
    	$blog = new Blog;

    	if($request->hasFile('img')){
    		$img_name = $request->img->getClientOriginalName();

    		$img_name_hashed = str_random(12).'_'.$img_name;

    		$request->img->move('img',$img_name_hashed);

    		$blog->img = $img_name_hashed;
    	}


    	$blog->title = $request->title;
        $blog->link_name = changeTitle($request->title);
    	$blog->short = $request->short;
    	$blog->content = $request->content;
    	$blog->highlight = $request->highlight;
    	$blog->id_category = $request->id_category;
    	$blog->id_author = Auth::user()->id;
    	$blog->keywords = $request->keywords;

    	$blog->save();

    	return redirect()->route('master',['page'=>'blogList']);
    		
    }

    public function blogList(){
    	$blogs = Blog::orderBy('created_at','DESC')->get();
    	return view('admin.blog.ad-blog-list',['blogs'=>$blogs]);
    }

    public function blogDelete($id){
    	$blog = Blog::find($id);

    	if(file_exists("img/".$blog->img)){
    		unlink("img/".$blog->img);
    	}

        $comments = Comment::where('id_blog',$id);

        $comments->delete();

    	$blog->delete();


    	return $this->blogList();
    	
    }

    public function blogEdit($id){
    	$blog = Blog::find($id);
    	$categories = Category::all();
    	return view('admin.blog.ad-blog-edit',['blog'=>$blog, 'categories'=>$categories]);
    }

    public function blogDoEdit(Request $request,$id){
    	$blog = Blog::find($id);

    	if($request->hasFile('img')){

    		unlink("img/".$blog->img);

    		$img_name = $request->img->getClientOriginalName();

    		$img_name_hashed = str_random(12).'_'.$img_name;

    		$request->img->move('img',$img_name_hashed);

    		$blog->img = $img_name_hashed;
    	}

    	$blog->title = $request->title;
        $blog->link_name = changeTitle($request->title);
    	$blog->short = $request->short;
    	$blog->content = $request->content;
    	$blog->highlight = $request->highlight;
    	$blog->id_category = $request->id_category;
    	$blog->id_author = Auth::user()->id;
    	$blog->keywords = $request->keywords;

    	$blog->save();	

    	return view('admin.ad-master',['page'=>'blogEdit/'.$id]);
    }
}
