<?php

namespace App\Models;

use App\Models\languages\About_lang;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';


    public function about_en(){
      return $this->hasOne(About_lang::class , 'about_id' , 'id')->where('lang' , 'en');
    }

    public function about_ar(){
        return $this->hasOne(About_lang::class , 'about_id' , 'id')->where('lang' , 'ar');
    }


    public function descriptionImage(){
      return $this->description_img_path;
    }

    public function historyImage(){
        return $this->history_img_path;
    }

    public function visionImage(){
        return $this->vision_img_path;
    }

    public function missionImage(){
        return $this->mission_img_path;
    }

    public function planImage(){
        return $this->plan_img_path;
    }

    public function valuesImage(){
        return $this->values_img_path;
    }






    public function editAbout(){
        return route('admin.about.edit' , $this->id);
    }

    public function updateAbout(){
        return route('admin.about.update' , $this->id);
    }
}
