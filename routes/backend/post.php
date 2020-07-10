<?php

Route::group(['namespace' => 'Post'], function () {

    /*
     * User CRUD
     */
    Route::resource('post', 'PostController');
	Route::post('post/upload', 'PostController@upload');
	
    /*
     * Specific User
     */
    Route::group(['prefix' => 'post/{post}'], function () {
       
    });
});