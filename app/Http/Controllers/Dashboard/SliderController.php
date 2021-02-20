<?php

namespace App\Http\Controllers\Dashboard;

use App\Custom\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use App\Models\languages\Slider_lang;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    use ImageTrait;

    public function index(){
        $mainSlider = Slider::where('slug' , 'main-slider')->with('slider_en')->first();
        return view('dashboard.sliders.index' , compact('mainSlider'));
    }

    public function showSliders(Slider $parent){
       return view('dashboard.sliders.show' , compact('parent'));
    }

    public function create($id){
      return view('dashboard.sliders.create' , compact('id'));
    }

    public function store(Request $request){
        if ($request['id'] == null){
            return redirect()->route('admin.sliders.index' , $request['id'])->with('danger', 'parent slider not found!!');
        }

        try {
            DB::beginTransaction();

            $slider = new Slider();

              if ($request->hasFile('image')){
                    $slider->image_path = $this->uploadImage($request->file('image'));
              }

            $slider->parent_id = $request['id'];

            $slider->url = $request['url'];

            DB::transaction(function () use ($slider){
                $slider->save();
            });

            /*slider lang*/

            $sliderEN = new Slider_lang();
            $sliderEN->slider_id = $slider->id;
            $sliderEN->lang = 'en';
            $sliderEN->title = $request['title_en'] ;
            $sliderEN->sub_title = $request['subtitle_en'] ;
            $sliderEN->description = $request['description_en'] ;
            $sliderEN->btn = $request['btn_en'] ;

            $sliderAR = new Slider_lang();
            $sliderAR->slider_id = $slider->id;
            $sliderAR->lang = 'ar';
            $sliderAR->title = $request['title_ar'] ;
            $sliderAR->sub_title = $request['subtitle_ar'] ;
            $sliderAR->description = $request['description_ar'] ;
            $sliderAR->btn = $request['btn_ar'];

            DB::transaction(function () use ($sliderEN , $sliderAR){
               $sliderEN->save();
               $sliderAR->save();
            });

           DB::commit();
            return redirect()->route('admin.sliders.show.sliders' , $request['id'])->with('success' , 'Slider created Successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->route('admin.sliders.show.sliders' , $request['id'])->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }

    public function edit(Slider $slider){
        $slider->load('slider_en' , 'slider_ar');
        return view('dashboard.sliders.edit' , compact('slider'));
    }

    public function update(Request $request , Slider $slider){
        try {
            DB::beginTransaction();

            if ($request->hasFile('image')){
                array_push($this->oldImageDirArr , $slider->image_path);
                $slider->image_path = $this->uploadImage($request->file('image'));
            }

            $slider->url = $request['url'];

            DB::transaction(function () use ($slider){
                $slider->update();
            });

            /*slider lang*/

            $sliderEN = $slider->slider_en ;
            //$sliderEN->slider_id = $slider->id;
            //$sliderEN->lang = 'en';
            $sliderEN->title = $request['title_en'] ;
            $sliderEN->sub_title = $request['subtitle_en'] ;
            $sliderEN->description = $request['description_en'] ;
            $sliderEN->btn = $request['btn_en'] ;

            $sliderAR = $slider->slider_ar ;
            //$sliderAR->slider_id = $slider->id;
            //$sliderAR->lang = 'ar';
            $sliderAR->title = $request['title_ar'] ;
            $sliderAR->sub_title = $request['subtitle_ar'] ;
            $sliderAR->description = $request['description_ar'] ;
            $sliderAR->btn = $request['btn_ar'];

            DB::transaction(function () use ($sliderEN , $sliderAR){
                $sliderEN->update();
                $sliderAR->update();
            });

            File::delete($this->oldImageDirArr);
            DB::commit();
            return redirect()->route('admin.sliders.show.sliders' , $slider->parent_id)->with('success' , 'Slider updated Successfully!!');
        }catch (\Exception $e){
            File::delete($this->imageDirArr);
            DB::rollBack();
            return redirect()->route('admin.sliders.show.sliders' , $slider->parent_id)->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }

    public function destroy(Slider $slider){

        if ($slider->slug == 'main-slider'){
            return redirect()->route('admin.sliders.index' , $slider->parent_id)->with('danger', 'parent cant be deleted!!');
        }

        try {
            DB::beginTransaction();

            DB::transaction(function () use ($slider){
                $slider->slider_en->delete();
                $slider->slider_ar->delete();
                $slider->delete();
            });

            File::delete($slider->image_path);
            DB::commit();
            return redirect()->route('admin.sliders.show.sliders' , $slider->parent_id)->with('success' , 'Slider deleted Successfully!!');

        }catch (\Exception $e){
            return redirect()->route('admin.sliders.show.sliders' , $slider->parent_id)->with('danger', 'DataBase Error please contact Be.Solutions!!');
        }
    }
}
