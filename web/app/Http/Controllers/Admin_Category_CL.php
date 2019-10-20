<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use View;

class Admin_Category_CL extends Controller
{
    public function categoryDoAdd(Request $request){
    	$category = new Category;
        $category->name = $request->name;
        $category->link_name = changeTitle($request->name);
        
        $category->save();

    	return redirect()->route('master',['page'=>'categoryList']);
    }

    public function categoryList(){
    	$datas = Category::orderBy('created_at','DESC')->get();
    	
    	return view('admin.category.ad-category-list',['datas'=>$datas]);
    }

    public function categoryDelete($id){
    	$category = Category::find($id);
    	$category->delete();
    	return $this->categoryList();
    }

    public function categoryEdit($id){
    	$data = Category::find($id);
    	return view('admin.category.ad-category-edit',['data'=>$data]);
    }

    public function categoryDoEdit(Request $request,$id){
    	$category = Category::find($id);
    	$category->name = $request->name;
        $category->link_name = changeTitle($request->name);
    	$category->save();

    	return view('admin.ad-master',['page'=>'categoryEdit/'.$id]);
    }
}
