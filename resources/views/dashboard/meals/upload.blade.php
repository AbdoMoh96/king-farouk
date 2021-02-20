@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Meals')
@section('description' , 'Upload')
@section('Custom-parent' , 'Meals')
@section('href-parent') href="{{route('admin.meals.index')}}" @endsection
@section('Custom-child' , 'Upload to gallery Meal')
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')

    <form action="{{$meal->upload()}}"  method="post"  enctype="multipart/form-data">
    @csrf
    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">

                <div class="from-group mb-4">
                    <label for="images">Upload To Meal Gallery</label>
                    <input class="form-control" type="file" name="images[]" multiple >
                </div>

                <div class="form-group mt-5" >
                    <button type="submit" class="btn btn-warning" >Upload Images</button>
                </div>

            </div>
        </div>
        <!-- end English section -->
    </form>
@endsection
