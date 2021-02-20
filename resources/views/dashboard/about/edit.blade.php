@extends('dashboard.layouts.main')

{{--        breadcrumbs --}}
@section('header' , 'About')
@section('description' , 'WebSite About')
@section('Custom-parent' , 'About')
{{--     @section('href-parent') href="#" @endsection--}}
{{--@section('Custom-child' , 'update meal')--}}
{{--        breadcrumbs --}}

@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{$about->updateAbout()}}"  method="post"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">


                <div class="form-group">
                    <label for="fname">Website Description</label>
                    <textarea name="description_en" id="description_en" cols="30" rows="10">{{$about->about_en->description_text}}</textarea>
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>

                <div class="form-group">
                    <label for="fname">Our History</label>
                    <textarea name="history_en" id="history_en" cols="30" rows="10">{{$about->about_en->history_text}}</textarea>
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>

                <div class="form-group">
                    <label for="fname">Our Vision</label>
                    <textarea name="vision_en" id="vision_en" cols="30" rows="10">{{$about->about_en->vision_text}}</textarea>
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>


                <div class="form-group">
                    <label for="fname">Our Mission</label>
                    <textarea name="mission_en" id="mission_en" cols="30" rows="10">{{$about->about_en->mission_text}}</textarea>
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>

                <div class="form-group">
                    <label for="fname">Our Plan</label>
                    <textarea name="plan_en" id="plan_en" cols="30" rows="10">{{$about->about_en->plan_text}}</textarea>
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>

                <div class="form-group">
                    <label for="fname">Our Values</label>
                    <textarea name="values_en" id="values_en" cols="30" rows="10">{{$about->about_en->values_text}}</textarea>
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>


                <div class="form-group">
                    <label for="fname">Video Url</label>
                    <input type="text" class="form-control" name="video_url" value="{{$about->video_url}}">
                    <p class="text-warning mt-2">Enter required Data</p>
                </div>


                <div class="from-group mb-4">
                    <label for="image">Upload Description image</label>
                    <input class="form-control" type="file" name="description_img">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload History image</label>
                    <input class="form-control" type="file" name="history_img">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload Vision image</label>
                    <input class="form-control" type="file" name="vision_img">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload Mission image</label>
                    <input class="form-control" type="file" name="mission_img">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload Plan image</label>
                    <input class="form-control" type="file" name="plan_img">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload Values image</label>
                    <input class="form-control" type="file" name="values_img">
                </div>

{{--                <div class="form-group mt-4 mr-4" style="display: inline-block">--}}
{{--                    <label for="image">preview header Logo</label>--}}
{{--                    <img class="form-group" src="" style="width: 100px; display: block; border-radius: 10%;" alt="no image">--}}
{{--                </div>--}}

{{--                <div class="form-group mt-4 mr-4" style="display: inline-block">--}}
{{--                    <label for="image">preview Footer Logo</label>--}}
{{--                    <img class="form-group" src="" style="width: 100px; display: block; border-radius: 10%;" alt="no image">--}}
{{--                </div>--}}

{{--                <div class="form-group mt-4 mr-4" style="display: inline-block">--}}
{{--                    <label for="image">preview main Menu</label>--}}
{{--                    <img class="form-group" src="" style="width: 100px; display: block; border-radius: 10%;" alt="no image">--}}
{{--                </div>--}}

                <div class="form-group mt-5" >
                    <button type="submit" class="btn btn-warning" >Update About</button>
                </div>

            </div>
        </div>
        <!-- end English section -->

        <!-- Arabic section -->
        <div class="col-md-6" style="float: right; text-align: right;">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">وصف الموقع</label>
                    <textarea name="description_ar" id="description_ar" cols="30" rows="10">{{$about->about_ar->description_text}}</textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">تاريخنا</label>
                    <textarea name="history_ar" class="" id="history_ar" cols="30" rows="10">{{$about->about_ar->history_text}}</textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">رؤيتنا</label>
                    <textarea name="vision_ar" id="vision_ar" cols="30" rows="10">{{$about->about_ar->vision_text}}</textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">مهمتنا</label>
                    <textarea name="mission_ar" id="mission_ar" cols="30" rows="10">{{$about->about_ar->mission_text}}</textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">خطتنا</label>
                    <textarea name="plan_ar" id="plan_ar" cols="30" rows="10">{{$about->about_ar->plan_text}}</textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">قيمنا</label>
                    <textarea name="values_ar" id="values_ar" cols="30" rows="10">{{$about->about_ar->values_text}}</textarea>
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
        CKEDITOR.replace('history_en' , { language: 'en' });
        CKEDITOR.replace('vision_en' , { language: 'en' });
        CKEDITOR.replace('mission_en' , { language: 'en' });
        CKEDITOR.replace('plan_en' , { language: 'en' });
        CKEDITOR.replace('values_en' , { language: 'en' });
        /*--------------------------------------------------------------------*/
        CKEDITOR.replace('description_ar' , { language: 'ar' });
        CKEDITOR.replace('history_ar' , { language: 'ar' });
        CKEDITOR.replace('vision_ar' , { language: 'ar' });
        CKEDITOR.replace('mission_ar' , { language: 'ar' });
        CKEDITOR.replace('plan_ar' , { language: 'ar' });
        CKEDITOR.replace('values_ar' , { language: 'ar' });
    </script>
@endsection
