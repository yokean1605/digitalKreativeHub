<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('news/{slug}/', 'NewsController@index')->name('news.index');
