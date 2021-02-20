<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/' , function (){
    return redirect()->route('home');
});

Route::get('/king-farook-admin' , function (){
    return redirect()->route('admin.dashboard.index');
});

Route::get('/test' , function (){
    return view('website.branches.show');
});



