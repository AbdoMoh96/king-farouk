<?php

namespace App\Http\Middleware;

use App\Models\Settings\Setting;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class WebsiteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $setting = Setting::first();

        if ($setting->state === 0){
            abort(503);
        }

        if (Session::has('lang')){
            App::setLocale(Session::get('lang'));
        }else{
            App::setLocale($setting->lang);
        }


        return $next($request);
    }
}
