<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Admin

Route::get('/','PostsController@index');

Route::get('/auth',function(){



    if(Auth::attempt(['email'=>'grodrigues.simeao@gmail.com','password'=>123456])){
        return "ola";

    }else{
        return "falou";
    }





});
Route::get('/auth/logout',function(){


    \Illuminate\Support\Facades\Auth::logout();




});

Route::group(['prefix'=> 'admin'],function(){


    Route::group(['prefix'=>'posts'],function(){


        Route::get('',['as'=>'admin.posts.index','uses'=>'PostsAdminController@index']);

        Route::get('create',['as'=>'admin.posts.create','uses'=>'PostsAdminController@create']);

        Route::post('store',['as'=>'admin.posts.store','uses'=>'PostsAdminController@store']);

        Route::get('edit/{id}',['as'=>'admin.posts.edit','uses'=>'PostsAdminController@edit']);

        Route::put('update/{id}',['as'=>'admin.posts.update','uses'=>'PostsAdminController@update']);


        Route::get('destroy/{id}',['as'=>'admin.posts.destroy','uses'=>'PostsAdminController@destroy']);

    });
});



//
#Route::get('blog','PostsController@index');





//Route::get('ola/{nome}','TesteController@index');
//Route::get('notas','TesteController@notas');
#Route::get('posts','TesteController@posts');

#Route::get('posts','BlogController@posts');
