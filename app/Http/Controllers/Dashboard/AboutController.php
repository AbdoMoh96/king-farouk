<?php

namespace App\Http\Controllers\Dashboard;

use App\Custom\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    use ImageTrait;

    public function edit(About $about){
        $about->load('about_en' ,'about_ar');
        return view('dashboard.about.edit' , compact('about'));
    }

    public function update(Request $request , About $about){
        try {
            DB::beginTransaction();

            if ($request->hasFile('description_img')) {
                array_push($this->oldImageDirArr , $about->description_img_path);
                $about->description_img_path = $this->uploadImage($request->file('description_img'));
            }

            if ($request->hasFile('history_img')) {
                array_push($this->oldImageDirArr , $about->history_img_path);
                $about->history_img_path = $this->uploadImage($request->file('history_img'));
            }

            if ($request->hasFile('vision_img')) {
                array_push($this->oldImageDirArr , $about->vision_img_path);
                $about->vision_img_path	 = $this->uploadImage($request->file('vision_img'));
            }

            if ($request->hasFile('mission_img')) {
                array_push($this->oldImageDirArr , $about->mission_img_path);
                $about->mission_img_path = $this->uploadImage($request->file('mission_img'));
            }

            if ($request->hasFile('plan_img')) {
                array_push($this->oldImageDirArr , $about->plan_img_path);
                $about->plan_img_path = $this->uploadImage($request->file('plan_img'));
            }

            if ($request->hasFile('values_img')) {
                array_push($this->oldImageDirArr , $about->values_img_path);
                $about->values_img_path	= $this->uploadImage($request->file('values_img'));
            }


            $about->video_url = $request['video_url'];


            DB::transaction(function () use ($about) {
                $about->update();
            });

            /*lang update*/
            $aboutEN = $about->about_en;
            $aboutEN->description_text = $request['description_en'];
            $aboutEN->history_text = $request['history_en'];
            $aboutEN->vision_text = $request['vision_en'];
            $aboutEN->mission_text = $request['mission_en'];
            $aboutEN->plan_text = $request['plan_en'];
            $aboutEN->values_text = $request['values_en'];

            $aboutAR = $about->about_ar;
            $aboutAR->description_text = $request['description_ar'];
            $aboutAR->history_text = $request['history_ar'];
            $aboutAR->vision_text = $request['vision_ar'];
            $aboutAR->mission_text = $request['mission_ar'];
            $aboutAR->plan_text = $request['plan_ar'];
            $aboutAR->values_text = $request['values_ar'];

            DB::transaction(function () use ($aboutEN, $aboutAR) {
                $aboutEN->update();
                $aboutAR->update();
            });

            File::delete($this->oldImageDirArr);
            DB::commit();
            return redirect()->back()->with('success', 'Website About Updated Successfully!!');
        } catch (\Throwable $e) {
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->back()->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }
}
