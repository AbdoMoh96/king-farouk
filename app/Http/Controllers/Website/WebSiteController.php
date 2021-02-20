<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Album;
use App\Models\Branch;
use App\Models\Meal;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class WebSiteController extends Controller
{
    public function index(){
        $mainSlider = Slider::where('slug' , 'main-slider')->with('slider_ar')->first();
        $album  = Album::where('slug' , 'main-album')->first();
        return view('website.index' , compact('mainSlider' , 'album'));
    }

    public function about(){
        $about = About::first()->load('about_en' , 'about_ar');
        return view('website.about' , compact('about'));
    }

    public function contact(){
        return view('website.contact');
    }

    public function meals(){
        return view('website.meals.index');
    }

    public function showMeal(Meal $meal){
        $meal->load('meal_'.currentLang() , 'images' );
        return view('website.meals.show' , compact('meal'));
    }

    public function showBranch(Branch $branch){
        $branch->load('branch_ar' );
        return view('website.branches.show' , compact('branch'));
    }

    public function downloadBranch(Branch $branch){
        return response()->download($branch->menu , $branch->menu_name , ['Content-Type' => 'application/pdf']);
    }

    public function gallery(){
        $album  = Album::where('slug' , 'main-album')->first();
        return view('website.albums.show' , compact('album'));
    }


    public  function contactMessage(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $email = Contact::first();
        $data = [
            'name' => $request['name'],
            'email' => $request['email'] ,
            'phone' => $request['phone'] ,
            'subject' => $request['subject'],
            'message' => $request['message']
        ];
        Messages::create($data);
        Mail::to($email->email)->send(new ContactMail($data));
        return redirect()->back()->with('success' , 'thanks for contacting us!');
    }



//return response()->download('' , '' , ['Content-Type' => 'application/pdf']);
}
