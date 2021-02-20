<?php

namespace App\Http\Controllers\Dashboard;

use App\Custom\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    use ImageTrait;

    public function edit(Setting $setting)
    {
        $setting->load('setting_en', 'setting_ar');
        return view('dashboard.settings.edit' , compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        try {
            DB::beginTransaction();

            if ($request->hasFile('h_logo')) {
                array_push($this->oldImageDirArr , $setting->headerLogo());
                $setting->h_logo_path = $this->uploadImage($request->file('h_logo'));
            }

            if ($request->hasFile('f_logo')) {
                array_push($this->oldImageDirArr , $setting->footerLogo());
                $setting->f_logo_path = $this->uploadImage($request->file('f_logo'));
            }

            if ($request->hasFile('main_menu')){
                array_push($this->oldImageDirArr , $setting->mainMenu());
                $setting->main_menu = $this->uploadImage($request->file('main_menu'));
            }

            $setting->lang = $request['lang'];
            $setting->state = $request['state'];

            DB::transaction(function () use ($setting) {
                $setting->update();
            });

            /*lang update*/
            $settingEN = $setting->setting_en;
            $settingEN->lang = 'en';
            $settingEN->website_title = $request['title_en'];
            $settingEN->website_h_description = $request['description_h_en'];
            $settingEN->website_f_description = $request['description_f_en'];

            $settingAR = $setting->setting_ar;
            $settingAR->lang = 'ar';
            $settingAR->website_title = $request['title_ar'];
            $settingAR->website_h_description = $request['description_h_ar'];
            $settingAR->website_f_description = $request['description_f_ar'];

            DB::transaction(function () use ($setting, $settingEN, $settingAR) {
                $settingEN->update();
                $settingAR->update();
            });

            File::delete($this->oldImageDirArr);
            DB::commit();
            return redirect()->back()->with('success', 'Website Settings Updated Successfully!!');
        } catch (\Throwable $e) {
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->back()->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }

    }
}
