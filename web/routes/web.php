<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','Pages@homeLoad')->name('home');

Route::get('category/{name}/{id}.html','Pages@categoryLoad');

Route::get('blog/{category}/{title}/{id}.html','Pages@blogLoad');

Route::get('introduction','Pages@introductionLoad');

Route::get('cau-hoi-thuong-gap','Pages@faqLoad');

Route::get('search','Pages@searchLoad');

Route::get('login',function(){
	return view('pages.login');
});

Route::get('signup','Pages@signupLoad');

Route::post('loginCheck','User_CL@loginCheck');

Route::get('logout','User_CL@logout');

Route::post('signupCheck','User_CL@signupCheck');

Route::get('error',function(){
	return view('error');
});

Route::get('change_user_info','Pages@changeInfo');

Route::post('doChangeInfo','User_CL@doChangeInfo');

Route::group(['prefix'=>'ajax'],function(){

	Route::get('signup',function(){
		return view('pages.signup');
	});

	Route::get('login',function(){
		return view('pages.login');
	});

	Route::get('report/{report}','Pages@reportPost');

	Route::get('comments/{id}','Pages@commentLoad');

	Route::get('commentPost/{content}/{id}','Pages@commentPost');

	Route::get('quickSearch/{search}','Pages@quickSearch');

	Route::get('nameCoincident/{name?}','User_CL@nameCoincident');
	Route::get('passwordCoincident/{password?}','User_CL@passwordCoincident');

	Route::group(['prefix'=>'admin'],function(){
		//DashBoard
		Route::get('dashboard','Admin_Dashboard_CL@dashboard');

		//Member
		Route::get('memberList','Admin_User_CL@memberList');
		
		Route::get('memberAdd',function(){
			return view('admin.member.ad-member-add');
		});
		Route::get('memberEdit/{id}','Admin_User_CL@memberEdit');
		
		Route::get('memberDelete/{id}','Admin_User_CL@memberDelete');

		
		//Category
		Route::get('categoryList','Admin_Category_CL@categoryList');
		Route::get('categoryAdd',function(){
			return view('admin.category.ad-category-add');
		});
		Route::get('categoryEdit/{id}','Admin_Category_CL@categoryEdit');
		Route::get('categoryDelete/{id}','Admin_Category_CL@categoryDelete');

		//Blog
		Route::get('blogList','Admin_Blog_CL@blogList');
		Route::get('blogAdd','Admin_Blog_CL@blogAdd');
		Route::get('blogEdit/{id}','Admin_Blog_CL@blogEdit');
		Route::get('blogDelete/{id}','Admin_Blog_CL@blogDelete');

		//Comment
		Route::get('commentList','Admin_Comment_CL@commentList');
		Route::get('commentDelete/{id}','Admin_Comment_CL@commentDelete');

		//Other
		Route::get('intro','Admin_Other_CL@intro');
		Route::get('info','Admin_Other_CL@info');

		//Author
		Route::get('author','Admin_Author_CL@authorList');
		Route::get('authorEdit/{id}','Admin_Author_CL@authorEdit');
		

		//FAQ
		Route::get('faq','Admin_Faq_CL@faqList');
		Route::get('faqEdit/{id}','Admin_Faq_CL@faqEdit');
		Route::get('faqDelete/{id}','Admin_Faq_CL@faqDelete');
		
		
	});
});

Route::group(['prefix'=>'admin', 'middleware'=>'adminCheck'],function(){

	Route::get('/{page?}',function($page=null){
		return view('admin.ad-master',['page'=>$page]);
	})->name('master');

	//--POSTs--//

	Route::post('memberDoAdd','Admin_User_CL@memberDoAdd');
	Route::post('memberDoEdit/{id}','Admin_User_CL@memberDoEdit');

	Route::post('categoryDoAdd','Admin_Category_CL@categoryDoAdd');
	Route::post('categoryDoEdit/{id}','Admin_Category_CL@categoryDoEdit');

	Route::post('blogDoAdd','Admin_Blog_CL@blogDoAdd');
	Route::post('blogDoEdit/{id}','Admin_Blog_CL@blogDoEdit');

	Route::post('faqDoAdd','Admin_Faq_CL@faqDoAdd');
	Route::post('faqDoEdit/{id}','Admin_Faq_CL@faqDoEdit');

	Route::post('authorDoEdit/{id}','Admin_Author_CL@authorDoEdit');

	Route::post('introDoEdit/{id}','Admin_Other_CL@introDoEdit');
	Route::post('infoDoEdit','Admin_Other_CL@infoDoEdit');
	//--End POSTs--//

});