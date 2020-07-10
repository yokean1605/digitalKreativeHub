<?php

/**
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {

    /*
    * These routes require the user to be logged in
    */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'LoginController@logout')->name('logout');

        //For when admin is logged in as user from backend
        Route::get('logout-as', 'LoginController@logoutAs')->name('logout-as');

        // These routes can not be hit if the password is expired
        Route::group(['middleware' => 'password_expires'], function () {
            // Change Password Routes
            Route::patch('password/update', 'UpdatePasswordController@update')->name('password.update');
        });

        // Password expired routes
        if (is_numeric(config('access.users.password_expires_days'))) {
            Route::get('password/expired', 'PasswordExpiredController@expired')->name('password.expired');
            Route::patch('password/expired', 'PasswordExpiredController@update')->name('password.expired.update');
        }
    });

    /*
     * These routes require no user to be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
        Route::get('admin-login', 'LoginController@showLoginForm')->name('login');
        Route::post('admin-login', 'LoginController@login')->name('login.post');

        // Confirm Account Routes
        Route::get('account/confirm/{token}', 'ConfirmAccountController@confirm')->name('account.confirm');
        Route::get('account/confirm/resend/{uuid}', 'ConfirmAccountController@sendConfirmationEmail')->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email.post');

        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');
    });
});
