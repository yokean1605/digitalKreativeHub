<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('preview/{slug}/', 'PreviewController@index')->name('preview.index');
