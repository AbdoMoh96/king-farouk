<?php

namespace App\Http\Controllers\Dashboard;

use App\Custom\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\languages\Meal_lang;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class MealsController extends Controller
{
    use ImageTrait;

    public function index(){
        $meals = Meal::orderBy('meal.created_at' , 'desc')->with('meal_en' , 'meal_ar' )->get();
        return view('dashboard.meals.index' , compact('meals'));
    }

    public function gallery(Meal $meal){
        $meal->load('images');
        return view('dashboard.meals.gallery' , compact('meal'));
    }

    public function create(){
        return view('dashboard.meals.create');
    }

    public function store(Request $request){
        try {
            DB::beginTransaction();
            $meal = new Meal();

            if ($request->hasFile('image')) {
                $meal->meal_img_path = $this->uploadImage($request->file('image'));
            }

           $meal->price = $request['price'];
           $meal->slug = Str::slug($request['title_en'] , '-');

            DB::transaction(function () use ($meal){
                $meal->save();
            });

           $mealEN = new Meal_lang();
           $mealEN->meal_id = $meal->id;
           $mealEN->lang = 'en';
           $mealEN->title = $request['title_en'];
           $mealEN->description = $request['description_en'];

            $mealAR = new Meal_lang();
            $mealAR->meal_id = $meal->id;
            $mealAR->lang = 'ar';
            $mealAR->title = $request['title_ar'];
            $mealAR->description = $request['description_ar'];

            DB::transaction(function () use ($mealEN , $mealAR){
                $mealEN->save();
                $mealAR->save();
            });

            DB::commit();
            return redirect()->route('admin.meals.index')->with('success' , 'meal created successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->route('admin.meals.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }

    public function uploadView(Meal $meal){
        return view('dashboard.meals.upload' , compact('meal'));
    }

    public function upload( Request $request ,Meal $meal){

        try {
            DB::beginTransaction();
            if ($request->hasFile('images')) {
                $this->uploadImages($request->file('images'), $meal->id, 'meal');
            }else{
                return redirect()->back()->with('danger', 'please select files to upload!!');
            }
            DB::commit();
            return redirect()->route('admin.meals.index')->with('success' , 'Meal Images Uploaded Successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->route('admin.meals.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }

    public function edit(Meal $meal){
        $meal->load('meal_en' , 'meal_ar');
        return view('dashboard.meals.edit' , compact('meal'));
    }

    public function update(Request $request , Meal $meal){

        try {
            DB::beginTransaction();

            if ($request->hasFile('image')){
                array_push($this->oldImageDirArr , $meal->image());
                $meal->meal_img_path = $this->uploadImage($request->file('image'));
            }

            $meal->price = $request['price'];
            $meal->slug = Str::slug($request['slug'] , '-');

            DB::transaction(function () use ($meal){
                $meal->update();
            });

            $mealEN = $meal->meal_en;
            $mealEN->title = $request['title_en'];
            $mealEN->description = $request['description_en'];

            $mealAR = $meal->meal_ar;
            $mealAR->title = $request['title_ar'];
            $mealAR->description = $request['description_ar'];

            DB::transaction(function () use ($mealEN , $mealAR){
                $mealEN->update();
                $mealAR->update();
            });

            File::delete($this->oldImageDirArr);
            DB::commit();
            return redirect()->route('admin.meals.index')->with('success' , 'meal updated successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->route('admin.meals.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }

    }

    public function destroy(Meal $meal){
        try {
            DB::beginTransaction();

            foreach ($meal->images as $image){
                DB::transaction(function () use ($image){
                    $image->delete();
                });
                array_push($this->oldImageDirArr , $image->path);
            }

            DB::transaction(function () use ($meal){
                $meal->meal_en->delete();
                $meal->meal_ar->delete();
                $meal->delete();
            });

            File::delete($meal->meal_img_path);
            File::delete($this->oldImageDirArr);
            DB::commit();
            return redirect()->route('admin.meals.index')->with('success' , 'meal deleted successfully!!');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('admin.meals.index')->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }
}
