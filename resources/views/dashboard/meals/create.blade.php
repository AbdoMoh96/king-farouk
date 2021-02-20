@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Meals')
@section('description' , 'Create Meal')
@section('Custom-parent' , 'Meals')
@section('href-parent') href="{{route('admin.meals.index')}}" @endsection
@section('Custom-child' , 'Create Meal')
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{route('admin.meals.store')}}"  method="post"  enctype="multipart/form-data">
    @csrf
    @method('POST')
    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="title_en">Meal Title</label>
                    <input type="text" id="title_en" name="title_en" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="price">Meal Price</label>
                    <input type="number" step=".01" id="price" name="price" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="description_en">Meal Description</label>
                    <textarea name="description_en" id="description_en" cols="30" rows="10"></textarea>
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>


                <div class="from-group mb-4">
                    <label for="image">Upload Meal Thumbnail</label>
                    <input class="form-control" type="file" name="image">
                </div>

                <div class="form-group mt-5" >
                    <button type="submit" class="btn btn-warning" >Create Meal</button>
                </div>

            </div>
        </div>
        <!-- end English section -->

        <!-- Arabic section -->
        <div class="col-md-6" style="float: right; text-align: right;">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">عنوان الوجبة</label>
                    <input type="text" id="fname" name="title_ar" class="form-control" dir="rtl" value="">
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">وصف الوجبة</label>
                    <textarea name="description_ar" id="description_ar" cols="30" rows="10"></textarea>
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
