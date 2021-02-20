<?php

use Illuminate\Support\Facades\Route;


Route::get('/home' , 'WebSiteController@index')->name('home');

Route::get('/about' , 'WebSiteController@about')->name('about');

Route::get('/contact' , 'WebSiteController@contact')->name('contact');

Route::get('/meals' , 'WebSiteController@meals')->name('meals');
Route::get('/meals/{meal}' , 'WebSiteController@showMeal')->name('meals.show');

Route::get('/branches/{branch}' , 'WebSiteController@showBranch')->name('branch.show');

Route::get('/branches/download/{branch}' , 'WebSiteController@downloadBranch')->name('branch.download');

Route::get('/gallery' , 'WebSiteController@gallery')->name('gallery');

Route::get('/lang/{lang}' , 'WebSettingsController@setLang')->name('set-lang');

Route::post('/send/mail' , 'WebSiteController@contactMessage')->name('send.mail');


