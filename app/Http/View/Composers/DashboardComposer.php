<?php


namespace App\Http\View\Composers;


use App\Models\About;
use App\Models\Contact;
use App\Models\Settings\Setting;
use App\Models\Slider;
use Illuminate\View\View;

class DashboardComposer
{
  public function compose(View $view){
      $setting = Setting::first();
      $mainSlider = Slider::where('slug' , 'main-slider')->with('slider_en')->first();
      $contact = Contact::first();
      $about = About::first();

      $view->with('setting' , $setting);
      $view->with('mainSlider' , $mainSlider);
      $view->with('contact' , $contact);
      $view->with('about' , $about);
  }
}
