<?php
use Illuminate\Support\Facades\App;


function currentLang() {
     return App::getLocale();
 }
