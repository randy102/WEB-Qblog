<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Blog;
use App\Category;
use App\Comment;
use App\Other;
use App\User;
use App\Report;
use App\Author;
use App\Faq;

use Illuminate\Support\Facades\Auth;

class Pages extends Controller
{
	public function __construct(){
        //--Menu--//
		$categories = Category::all();

        //--Info--//
		$phone = Other::find(2);
		$email = Other::find(3);

        //--Highlight--//
        $highlights = Blog::where('highlight',1)->orderBy('created_at','DESC')->skip(3)->take(7)->get();
        //--Highlight--//

        //--Popular--//
        $pops = Blog::orderBy('views','DESC')->take(8)->get();
        //--Popular--//

        //--New Comment--//
        $new_comms = Comment::orderBy('id','DESC')->take(5)->get();
        //New Comment--//

        //--Tags--//
        $blogs= Blog::all(); //Get data from blog

        $tag_string = ''; //Create null string

        foreach($blogs as $blog){
            $tag_string .= $blog->keywords.'|'; //Combine all keyword
        }

        $tag_array = explode('|',$tag_string); //Convert to array

        array_pop($tag_array); //Deletete null element

        $check_coind = array_count_values($tag_array); //Check coincident

        $tags = ''; //Creater null string

        foreach($check_coind as $key => $value){
            $tags .= "<a href='search?search=".$key."' class='tags'>".$key."</a>"; //Create tags html
        } 
        //--Tags--//

		View::share([
			'categories'=>$categories,
            'new_comms' =>$new_comms,
			'phone'		=>$phone,
			'email'		=>$email,
            'pops'      =>$pops,
            'tags'      =>$tags,
            'highlights'=>$highlights
		]);
	}

    public function homeLoad(){
    	//--Slider--//
    	$slides = Blog::where('highlight',1)->orderBy('created_at','DESC')->skip(0)->take(3)->get();
    	//--Slider--//

        //--New--//
        $newests = Blog::orderBy('created_at','DESC')->take(10)->get();
        //--New--//

        //--Des--//
        $des = Other::find(1);
        //--Des--//

        $limit = Blog::all()->count();

    	return view('pages.home',[
    			'slides'	=>$slides,
                'newests'   =>$newests,
                'des'       =>$des,
                'limit'     =>$limit
    		]);
    }

    public function reportPost($report){
        $table = new Report;
        $table->report = $report;
        $table->save();

        return "<div class='report-thank'>Cảm ơn bạn đã góp ý!</div>";
    }

    public function categoryLoad($name,$id){
        $blogs = Blog::where('id_category',$id)->orderBy('created_at','DESC')->paginate(10);

        $category = Category::find($id);

        return view('pages.category',['blogs'=>$blogs, 'category'=>$category]);
    }

    public function blogLoad($category,$title,$id){
        $blog = Blog::find($id);
        $blog->increment('views');

        $rec_blogs = Blog::where('id_category',$blog->id_category)->inRandomOrder()->skip(0)->take(5)->get();


        return view('pages.blog',['blog'=>$blog,'rec_blogs'=>$rec_blogs]);
    }

    public function commentLoad($id){
        $comments = Comment::where('id_blog',$id)->orderBy('created_at','DESC')->get();

        return view('pages.comment',['comments'=>$comments]);
    }

    public function commentPost($content,$id){
        $comment = new Comment;

        $comment->content = $content;
        $comment->id_user = Auth::user()->id;
        $comment->id_blog = $id;

        $comment->save();

        return $this->commentLoad($id);

    }

    public function introductionLoad(){
        $page_intro = Other::find(1);
        $authors = Author::all();
        return view('pages.intro',[
                'intro' => $page_intro,
                'authors' =>$authors
            ]);
    }

    public function faqLoad(){
        $faqs = Faq::all();

        return view('pages.faq',['faqs'=>$faqs]);
    }

    public function quickSearch($search){
        $items = Blog::where('title','like',"%$search%")->orWhere('short','like',"%$search%")->orWhere('keywords','like',"%$search%")->skip(0)->take(6)->get();
        return view('pages.quick-search',['items'=>$items]);
    }

    public function searchLoad(Request $request){
        $search = $request->search;
        $blogs = Blog::where('title','like',"%$search%")->orWhere('short','like',"%$search%")->orWhere('keywords','like',"%$search%")->orderBy('created_at','DESC')->paginate(10);
        return view('pages.search',['blogs'=>$blogs,'keyword'=>$search]);
    }

    public function changeInfo(){
        $user = User::find(Auth::user()->id);
        return view('pages.change-info',['user'=>$user]);
    }

    public function signupLoad(){
        return view('pages.signup');
    }

    public function loadmore($skip){
        $blogs = Blog::orderBy('created_at','DESC')->skip($skip)->take(10)->get();
        return view('pages.loadmore',['blogs'=>$blogs]);
    }
}
