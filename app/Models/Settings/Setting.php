<?php

namespace App\Models\Settings;

use App\Models\languages\Setting_lang;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';



    public function setting_en(){
        return $this->hasOne(Setting_lang::class , 'setting_id' , 'id')->where('lang' , 'en');
    }

    public function setting_ar(){
        return $this->hasOne(Setting_lang::class , 'setting_id' , 'id')->where('lang' , 'ar');
    }

    public function headerLogo(){
        return $this->h_logo_path;
    }

    public function footerLogo(){
      return $this->f_logo_path;
    }

    public function mainMenu(){
        return $this->main_menu;
    }


    public function editSettings(){
        return route('admin.settings.edit' , $this->id);
    }

    public function updateSettings(){
        return route('admin.settings.update' , $this->id);
    }
}
