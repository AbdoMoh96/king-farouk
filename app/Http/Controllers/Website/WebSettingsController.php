<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebSettingsController extends Controller
{
    public function setLang($lang){
        Session::put('lang' , $lang);
        return redirect()->back();
    }

}
