<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Meal;
use App\Models\Messages;
use App\Models\Resources\Image;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $meals = count(Meal::all());
        $messages = count(Messages::all());
        $branches = count(Branch::all());
        $images = count(Image::all());
        $sliders = count(Slider::all()) - 1;
        return view('dashboard.dashboard' , compact('meals' , 'messages' , 'branches' , 'images' , 'sliders'));
    }
}
