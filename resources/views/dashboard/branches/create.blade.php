@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Branches')
@section('description' , 'All Branches')
@section('Custom-parent' , 'Branches')
@section('href-parent') href="{{route('admin.branches.index')}}" @endsection
@section('Custom-child' , 'create Branch')
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{route('admin.branches.store')}}"  method="post"  enctype="multipart/form-data">
    @csrf
    @method('POST')
    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="title_en">Branch Title</label>
                    <input type="text" id="title_en" name="title_en" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="description_en">Branch Description</label>
                    <textarea name="description_en" id="description_en" cols="30" rows="10"></textarea>
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="title_en">Branch Address</label>
                    <input type="text" id="title_en" name="address_en" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="title_en">Branch Location</label>
                    <input type="text" id="title_en" name="map" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="title_en">Branch phone number</label>
                    <input type="text" id="title_en" name="phone" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="title_en">other Branch phone number</label>
                    <input type="text" id="title_en" name="alt_phone" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>

                <div class="form-group">
                    <label for="title_en">Branch LandLine number</label>
                    <input type="text" id="title_en" name="landline" class="form-control" value="">
                    <p class="text-warning mt-2">Enter Required Data</p>
                </div>


                <div class="from-group mb-4">
                    <label for="image">Upload Branch menu First Image</label>
                    <input class="form-control" type="file" name="first_image">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload Branch menu Second Image</label>
                    <input class="form-control" type="file" name="second_image">
                </div>

                <div class="from-group mb-4">
                    <label for="image">Upload Branch menu PDF File</label>
                    <input class="form-control" type="file" name="pdf">
                </div>



                <div class="form-group mt-5" >
                    <button type="submit" class="btn btn-warning" >Create Branch</button>
                </div>

            </div>
        </div>
        <!-- end English section -->

        <!-- Arabic section -->
        <div class="col-md-6" style="float: right; text-align: right;">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">عنوان الفرع</label>
                    <input type="text" id="fname" name="title_ar" class="form-control" dir="rtl" value="">
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">وصف الفرع</label>
                    <textarea name="description_ar" id="description_ar" cols="30" rows="10"></textarea>
                    <p class="text-warning mt-2">ادخل البيانات الازمة</p>
                </div>

                <div class="form-group">
                    <label for="fname">موقع الفرع </label>
                    <input type="text" id="fname" name="address_ar" class="form-control" dir="rtl" value="">
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
