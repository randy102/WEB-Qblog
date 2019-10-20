<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class Admin_Faq_CL extends Controller
{
    public function faqList(){
    	$faqs = Faq::all();
    	return view('admin.other.ad-faq',['faqs'=>$faqs]);
    }

    public function faqDoAdd(Request $request){
    	Faq::create($request->all());
    	return redirect()->route('master',['page'=>'faq']);
    }

    public function faqDoEdit(Request $request,$id){
    	$faq = Faq::find($id);
    	$faq->quest = $request->quest;
    	$faq->ans = $request->ans;
    	$faq->save();

    	return redirect()->route('master',['page'=>'faq']);
    }

    public function faqEdit($id){
    	$faq = Faq::find($id);
    	return view('admin.other.ad-faq-edit',['faq'=>$faq]);
    }

    public function faqDelete($id){
        $faq = Faq::find($id);
        $faq->delete();
        return $this->faqList();
    }
}
