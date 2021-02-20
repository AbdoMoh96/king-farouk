<?php

namespace App\Models;

use App\Models\languages\Slider_lang;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    protected $table = 'slider';


    public function image(){
        return $this->image_path;
    }

    public function slider_en(){
        return $this->hasOne(Slider_lang::class , 'slider_id' , 'id')->where('lang' , 'en');
    }


    public function slider_ar(){
        return $this->hasOne(Slider_lang::class , 'slider_id' , 'id')->where('lang' , 'ar');
    }

    public function childSliders(){
        return $this->hasMany(Slider::class , 'parent_id' , 'id');
    }


    public function createChild(){
        return route('admin.sliders.create' , $this->id);
    }

    public function showSliders(){
      return route('admin.sliders.show.sliders' , $this->id);
    }

    public function editSlider()
    {
        return route('admin.sliders.edit', $this->id);
    }

    public function updateSlider()
    {
        return route('admin.sliders.update', $this->id);
    }

    public function deleteSlider()
    {
        return route('admin.sliders.destroy', $this->id);
    }
}
