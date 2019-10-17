<?php

Route::group(['middleware'=>'web'], function() {

	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);

	Route::auth();
});

Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {

	//admin
	Route::get('/', function() {

	});

     //admin/pages
	Route::group(['prefix'=>'pages'], function() {
		//admin/pages
		Route::get('',['uses'=>'PagesController@execute','as'=>'pages']);

        //admin/pages/add
		Route::match(['get','post'], '/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
         //admin/edit/2 
		Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PageEditController@execute','as'=>'pagesEdit']);
	});

	   
	Route::group(['prefix'=>'works '], function() {
		
		Route::get('',['uses'=>'WorkController@execute','as'=>'works']);

        
		Route::match(['get','post'], '/add',['uses'=>'WorkAddController@execute','as'=>'workAdd']);
        
		Route::match(['get','post','delete'],'edit/{work}',['uses'=>'WorkEditController@execute','as'=>'/workEdit']);
	});

Route::group(['prefix'=>'cervices '], function() {
		
		Route::get('',['uses'=>'CerviceController@execute','as'=>'services']);

        
		Route::match(['get','post'], '/add',['uses'=>'CerviceAddController@execute','as'=>'cerviceAdd']);
        
		Route::match(['get','post','delete'],'edit/{cervice}',['uses'=>'CerviceEditController@execute','as'=>'/cerviceEdit']);
	});

	Route::post('/contact', 'ContactController@newMessage');
});