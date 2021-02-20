<?php

use Illuminate\Support\Facades\Route;

Route::resource('/dashboard' , 'DashboardController' , ['only' => ['index'] ]);

/*<===meal=routs=>*/
Route::resource('/meals' , 'MealsController' , ['except' => ['show'] ]);
Route::get('/meals/gallery/{meal}' , 'MealsController@gallery' )->name('meal.gallery');
Route::get('/meals/upload/{meal}' , 'MealsController@uploadView')->name('meal.upload.view');
Route::post('/meals/upload/{meal}' , 'MealsController@upload')->name('meal.upload');
/*<==end=meal=routs=>*/

/*<===slider=routs====>*/
Route::resource('/sliders' , 'SliderController' , ['except' => 'create']);
Route::get('sliders/create/{id}' , 'SliderController@create')->name('sliders.create');
Route::get('sliders/show/{parent}' , 'SliderController@showSliders')->name('sliders.show.sliders');
/*<==end=slider=routs=>*/

/*<===albums=routs====>*/
Route::resource('/albums' , 'AlbumController');
Route::get('/albums/gallery/{album}' , 'AlbumController@gallery' )->name('album.gallery');
Route::get('/albums/upload/{album}' , 'AlbumController@uploadView')->name('album.upload.view');
Route::post('/albums/upload/{album}' , 'AlbumController@upload')->name('album.upload');
/*<==end=albums=routs=>*/

/*<===branches=routs====>*/
Route::resource('/branches' , 'BranchController');
/*<==end=branches=routs=>*/

/*<===messages=routs====>*/
Route::resource('/messages' , 'MessageController' , ['only' => ['index' , 'show' , 'destroy'] ]);
/*<==end=messages=routs====>*/

Route::resource('/contact' , 'ContactController' , ['only' => ['edit' , 'update'] ]);
Route::resource('/about' , 'AboutController' , ['only' => ['edit' , 'update'] ]);
Route::resource('/settings' , 'SettingsController' , ['only' => ['edit' , 'update'] ]);
Route::resource('/image' , 'ImageController'  , ['only' => ['destroy'] ] );
