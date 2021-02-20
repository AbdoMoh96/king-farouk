@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Sliders')
@section('description' , 'Main Slider sliders')
@section('Custom-parent' , 'Sliders')
@section('href-parent') href="{{route('admin.sliders.index')}}" @endsection
@section('Custom-child' , 'Main Sliders')
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')


    <div class="col-md-12">
        <div class="box box-warning" style="padding: 15px">
            <div class="box-header with-border">
                <h3 class="box-title">All Main Sliders</h3>
                <a href="{{$parent->createChild()}}" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Add
                    New Main Slider </a>
            </div>
            <table class="table table-bordered show-edit-category-table table-hover table-striped" id="sliders">
                <thead>
                <tr>
                    <th>id</th>
                    <th>image</th>
                    <th>title</th>
                    <th>created</th>
                    <th>updated</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>image</th>
                    <th>title</th>
                    <th>created</th>
                    <th>updated</th>
                    <th>actions</th>
                </tr>
                </tfoot>

                <tbody>
                @foreach($parent->childSliders as $slider)
                    <tr>
                        <td>{{$slider->id}}</td>
                        <td><img src="{{ asset($slider->image()) }}" alt="no image" width="50px"></td>
                        <td>{{$slider->slider_ar->title}}</td>
                        <td>{{$slider->created_at->format('d M Y')}}</td>
                        <td>{{$slider->updated_at->format('d M Y')}}</td>
                        <td>
                            <a href="{{$slider->editSlider()}}"><i class="fa fa-pencil fa-2x text-warning"></i></a>
                            <a href="#" class="" data-toggle="modal" data-target="#{{$slider->id}}">
                                <i class="fa fa-trash-o fa-2x text-warning"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



    @foreach($parent->childSliders as $slider)
            <div class="modal modal-danger fade" id="{{$slider->id}}" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Delete Meal</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are You Sure You Want To Delete {{$slider->slider_ar->title}}</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{$slider->deleteSlider()}}" method="post">
                                @method('delete')
                                @csrf
                                <div class="d-flex flex-row">
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal"
                                            style="margin-right: 5px">
                                        cancel
                                    </button>
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        @endforeach
@endsection

@section('data-tables')
    <script>
        $('#sliders').DataTable();
    </script>
@endsection
