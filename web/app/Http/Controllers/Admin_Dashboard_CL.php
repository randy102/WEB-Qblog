<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Comment;
use App\Report;

class Admin_Dashboard_CL extends Controller
{
    public function dashboard(){
        //--Views--//
    	$blogs = Blog::all();
    	$views = 0;
    	foreach($blogs as $blog){
    		$views += $blog->views;
    	}
        //--Views--//

    	$num_blog = $blogs->count();

    	$num_user = User::all()->count();

    	$num_comment = Comment::all()->count();

    	$most_views = Blog::orderBy('views','DESC')->skip(0)->take(10)->get();

    	$newest_comment = Comment::orderBy('created_at','DESC')->skip(0)->take(10)->get();

        $num_good = Report::where('report',3)->count();
        $num_normal = Report::where('report',2)->count();
        $num_bad = Report::where('report',1)->count();

    	return view('admin.ad-dashboard',[
    			'views' => $views,
    			'num_blog' => $num_blog,
    			'num_user' => $num_user,
    			'num_comment' => $num_comment,
    			'most_views' => $most_views,
    			'newest_comment' => $newest_comment,
                'good' => $num_good,
                'normal'=> $num_normal,
                'bad' => $num_bad
    		]);
    }
}
