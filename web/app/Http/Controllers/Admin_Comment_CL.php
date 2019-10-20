<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class Admin_Comment_CL extends Controller
{
    public function commentList(){
    	$comments = Comment::orderBy('created_at','DESC')->get();
    	return view('admin.comment.ad-comment-list',['comments'=>$comments]);
    }

    public function commentDelete($id){
    	$comment = Comment::find($id);

    	$comment->delete();

    	return $this->commentList();
    }
}
