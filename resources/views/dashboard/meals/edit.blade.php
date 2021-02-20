@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Meals')
@section('description' , 'Update Meal')
@section('Custom-parent' , 'Meals')
@section('href-parent') href="{{route('admin.meals.index')}}" @endsection
@section('Custom-child' , 'Update '.$meal->meal_en->title)
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{$meal->updateMeal()}}"  method="post"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">Meal Title</label>
                    <input type="text" id="fname" name="title_en" class="form-control" value="{{ $meal->meal_en->title  }}">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="price">Meal Price</label>
                    <input type="number" step=".01" id="price" name="price" class="form-control" value="{{$meal->price}}">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="fname">Meal Slug</label>
                    <input type="text" id="fname" name="slug" class="form-control" value="{{ $meal->slug }}">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="fname">Meal Description</label>
                    <textarea name="description_en" id="description_en" cols="30" rows="10">{{$meal->meal_en->description}}</textarea>
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>


                <div class="from-group mb-4">
                    <label for="image">Upload Meal Thumbnail</label>
                    <input class="form-control" type="file" name="image">
                </div>

                <div class="form-group mt-4 mr-4" style="display: inline-block">
                    <label for="image" class="mb-3">Meal Thumbnail Preview </label>
                    <img class="form-group" src="{{asset($meal->image())}}" style="width: 50%; display: block; border-radius: 2%;" alt="no image">
                </div>

                <div class="form-group mt-5" >
                    <button type="submit" class="btn btn-warning" >Update Meal</button>
                </div>

            </div>
        </div>
        <!-- end English section -->

        <!-- Arabic section -->
        <div class="col-md-6" style="float: right; text-align: right;">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">عنوان الوجبة</label>
                    <input type="text" id="fname" name="title_ar" class="form-control" dir="rtl" value="{{$meal->meal_ar->title}}">
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">وصف الوجبة</label>
                    <textarea name="description_ar" id="description_ar" cols="30" rows="10">{{$meal->meal_ar->description}}</textarea>
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
