<?php


namespace App\Http\View\Composers;


use App\Models\About;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Meal;
use App\Models\Settings\Setting;
use Illuminate\View\View;

class WebsiteComposer
{
    public function compose(View $view){
        $setting = Setting::first();
        $meals = Meal::orderBy('meal.created_at' , 'desc')->with('meal_en' , 'meal_ar' )->get();
        $contact = Contact::first();
        $branches = Branch::orderBy('branches.created_at' , 'desc')->with('branch_ar')->get();
        $about = About::first();

        $view->with('setting' , $setting);
        $view->with('meals' , $meals);
        $view->with('contact' , $contact);
        $view->with('branches' , $branches);
        $view->with('about' , $about);
    }
}
