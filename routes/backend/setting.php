<?php

Route::group(['namespace' => 'Setting'], function () {

    /*
     * User CRUD
     */
    
    Route::resource('setting', 'SettingController');
	Route::post('setting/upload', 'SettingController@upload');
	
    Route::group(['prefix' => 'setting/{setting}'], function () {
       
    });
});