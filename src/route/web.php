<?php


Route::group(['namespace' => 'Admin\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@store')->name('contactSubmit');

});
