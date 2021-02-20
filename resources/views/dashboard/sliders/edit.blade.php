@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Sliders')
@section('description' , 'Update Slider')
@section('Custom-parent' , 'Sliders')
@section('href-parent') href="{{route('admin.sliders.index')}}" @endsection
@section('Custom-child' , 'Update Slider')
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{$slider->updateSlider()}}"  method="post"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="title_en">Slider Title</label>
                    <input type="text" id="title_en" name="title_en" class="form-control" value="{{$slider->slider_en->title}}">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="title_en">Slider SubTitle</label>--}}
{{--                    <input type="text" id="title_en" name="subtitle_en" class="form-control" value="{{$slider->slider_en->sub_title}}">--}}
{{--                    <p class="text-warning mt-2">Enter Required Data</p>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="btn">button Title</label>
                    <input type="text" id="btn" name="btn_en" class="form-control" value="{{$slider->slider_en->btn}}">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="url">Slider Url</label>
                    <input type="text" id="url" name="url" class="form-control" value="{{$slider->url}}">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="description_en">Slider Description</label>
                    <textarea name="description_en" id="description_en" cols="30" rows="10">{{$slider->slider_en->description}}</textarea>
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>


                <div class="from-group mb-4">
                    <label for="image">Upload Slider Image</label>
                    <input class="form-control" type="file" name="image">
                </div>

                <div class="form-group mt-4 mr-4" style="display: inline-block">
                    <label for="image" class="mb-3">Slider Image Preview </label>
                    <img class="form-group" src="{{asset($slider->image())}}" style="width: 30%; display: block; border-radius: 2%;" alt="no image">
                </div>

                <div class="form-group mt-5" >
                    <button type="submit" class="btn btn-warning" >Update Slider</button>
                </div>

            </div>
        </div>
        <!-- end English section -->

        <!-- Arabic section -->
        <div class="col-md-6" style="float: right; text-align: right;">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">عنوان الصورة</label>
                    <input type="text" id="fname" name="title_ar" class="form-control" dir="rtl" value="{{$slider->slider_ar->title}}">
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">عنوان الزر</label>
                    <input type="text" id="fname" name="btn_ar" class="form-control" dir="rtl" value="{{$slider->slider_ar->btn}}">
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">وصف الصورة</label>
                    <textarea name="description_ar" id="description_ar" cols="30" rows="10">{{$slider->slider_ar->description}}</textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

            </div>
        </div>
        <!-- end Arabic section -->
    </form>
@endsection


@section('Custom-ckeditor')
    <script>
        CKEDITOR.replace('description_en' , { language: 'en' });
        CKEDITOR.replace('description_ar' , { language: 'ar' });
    </script>
@endsection
