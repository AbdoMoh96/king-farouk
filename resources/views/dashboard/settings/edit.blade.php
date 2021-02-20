@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Settings')
@section('description' , 'WebSite Settings')
@section('Custom-parent' , 'Settings')
{{--     @section('href-parent') href="#" @endsection--}}
{{--@section('Custom-child' , 'update meal')--}}
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{$setting->updateSettings()}}"  method="post"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <!-- English section -->
    <div class="col-md-6" style="float: left">
        <div class="box box-warning" style="padding: 15px">

            <div class="form-group">
                <label for="fname">Website Title</label>
                <input type="text" id="fname" name="title_en" class="form-control" value="{{$setting->setting_en->website_title}}">
                <p class="text-warning mt-2">helper block</p>
            </div>

            <div class="form-group">
                <label for="fname">Header Description</label>
                <textarea name="description_h_en" id="description_h_en" cols="30" rows="10">{{$setting->setting_en->website_h_description}}</textarea>
                <p class="text-warning mt-2">Enter required Data</p>
            </div>

            <div class="form-group">
                <label for="fname">Footer Description</label>
                <textarea name="description_f_en" id="description_f_en" cols="30" rows="10">{{$setting->setting_en->website_f_description}}</textarea>
                <p class="text-warning mt-2">Enter required Data</p>
            </div>

            <div class="form-group my-4">
                <label for="exampleFormControlSelect1">Website Default Lang</label>
                <select class="form-control" name="lang" id="exampleFormControlSelect1">
                    <option @if($setting->lang === 'en') selected @endif value="en">English</option>
                    <option @if($setting->lang === 'ar') selected @endif value="ar">Arabic</option>
                </select>
            </div>

            <div class="form-check form-check-inline my-4">
                <label class="form-check-label" for="inlineRadio1" style="display: block;">Website State : </label>
                <input class="form-check-input" @if($setting->state === 1) checked @endif type="radio" name="state" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">online</label>

                <input class="form-check-input" @if($setting->state === 0) checked @endif type="radio" name="state" id="inlineRadio2" value="0">
                <label class="form-check-label"  for="inlineRadio2">disabled</label>
            </div>



            <div class="from-group mb-4">
                <label for="image">Upload header Logo</label>
                <input class="form-control" type="file" name="h_logo">
            </div>

            <div class="from-group mb-4">
                <label for="image">Upload Footer Logo</label>
                <input class="form-control" type="file" name="f_logo">
            </div>

            <div class="from-group mb-4">
                <label for="image">Upload Main menu</label>
                <input class="form-control" type="file" name="main_menu">
            </div>

            <div class="form-group mt-4 mr-4" style="display: inline-block">
                <label for="image">preview header Logo</label>
                <img class="form-group" src="{{asset($setting->headerLogo())}}" style="width: 100px; display: block; border-radius: 10%;" alt="no image">
            </div>

            <div class="form-group mt-4 mr-4" style="display: inline-block">
                <label for="image">preview Footer Logo</label>
                <img class="form-group" src="{{asset($setting->footerLogo())}}" style="width: 100px; display: block; border-radius: 10%;" alt="no image">
            </div>

            <div class="form-group mt-4 mr-4" style="display: inline-block">
                <label for="image">preview main Menu</label>
                <img class="form-group" src="{{asset($setting->mainMenu())}}" style="width: 100px; display: block; border-radius: 10%;" alt="no image">
            </div>

            <div class="form-group mt-5" >
                <button type="submit" class="btn btn-warning" >Update Settings</button>
            </div>

        </div>
    </div>
    <!-- end English section -->

    <!-- Arabic section -->
    <div class="col-md-6" style="float: right; text-align: right;">
        <div class="box box-warning" style="padding: 15px">

            <div class="form-group">
                <label for="fname">عنوان الموقع</label>
                <input type="text" id="fname" name="title_ar" class="form-control" dir="rtl" value="{{$setting->setting_ar->website_title}}">
                <p class="text-warning mt-2">ادخل البيانات الازمة</p>
            </div>

            <div class="form-group">
                <label for="fname">وصف الموقع الاول</label>
                <textarea name="description_h_ar" id="description_h_ar" cols="30" rows="10">{{$setting->setting_ar->website_h_description}}</textarea>
                <p class="text-warning mt-2">ادخل البيانات الازمة</p>
            </div>

            <div class="form-group">
                <label for="fname">وصف الموقع الاخير</label>
                <textarea name="description_f_ar" id="description_f_ar" cols="30" rows="10">{{$setting->setting_ar->website_f_description}}</textarea>
                <p class="text-warning mt-2">ادخل البيانات الازمة</p>
            </div>

        </div>
    </div>
    <!-- end Arabic section -->
    </form>
@endsection


@section('Custom-ckeditor')
    <script>
        CKEDITOR.replace('description_h_en' , { language: 'en' });
        CKEDITOR.replace('description_f_en' , { language: 'en' });
        CKEDITOR.replace('description_h_ar' , { language: 'ar' });
        CKEDITOR.replace('description_f_ar' , { language: 'ar' });
    </script>
@endsection
