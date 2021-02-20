<?php

namespace App\Models;

use App\Models\languages\Meal_lang;
use App\Models\Resources\Image;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $table = 'meal';
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function meal_en(){
        return $this->hasOne(Meal_lang::class , 'meal_id' , 'id')->where('lang' , 'en');
    }

    public function meal_ar(){
        return $this->hasOne(Meal_lang::class , 'meal_id' , 'id')->where('lang' , 'ar');
    }

    public function image(){
        return $this->meal_img_path ;
    }

    public function images(){
        return $this->hasMany(Image::class , 'meal_id' , 'id');
    }


    public function mealGallery(){
        return route('admin.meal.gallery' , $this->slug);
    }

    public function uploadView(){
        return route('admin.meal.upload.view' , $this->slug);
    }

    public function upload(){
        return route('admin.meal.upload' , $this->slug);
    }

    public function editMeal(){
        return route('admin.meals.edit' , $this->slug);
    }

    public function updateMeal(){
        return route('admin.meals.update' , $this->slug);
    }

    public function deleteMeal(){
        return route('admin.meals.destroy' , $this->slug);
    }

    public function webMealShow(){
        return route('meals.show' , $this->slug);
    }

}
