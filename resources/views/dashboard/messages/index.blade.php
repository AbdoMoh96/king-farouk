@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Messages')
@section('description' , 'All Messages')
@section('Custom-parent' , 'Messages')
{{--@section('href-parent') href="{{route(' admin.meals.index')}}" @endsection--}}
{{--@section('Custom-child' , '')--}}
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')


    <div class="col-md-12">
        <div class="box box-warning" style="padding: 15px">
            <div class="box-header with-border">
                <h3 class="box-title">All Messages</h3>
{{--                <a href="{{route('admin.meals.create')}}" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Add New Meal </a>--}}
            </div>
            <table class="table table-bordered show-edit-category-table table-hover table-striped" id="allmeals">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>Email</th>
                    <th>message</th>
                    <th>sent</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>Email</th>
                    <th>message</th>
                    <th>sent</th>
                    <th>actions</th>
                </tr>
                </tfoot>

                <tbody>
                @foreach($messages as $message)
                    <tr>
                       <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->phone}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->message}}</td>
                        <td>{{$message->created_at->format('d M Y')}}</td>
                        <td>
                            <a href="{{$message->showMessage()}}" ><i class="fa fa-eye fa-2x text-warning"></i></a>
                            <a href="#" class="" data-toggle="modal" data-target="#{{$message->id}}">
                                <i class="fa fa-trash-o fa-2x text-warning"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



    @foreach($messages as $message)
        <div class="modal modal-danger fade" id="{{$message->id}}" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Meal</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are You Sure You Want To Delete Message From {{$message->name}}</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{$message->deleteMessage()}}" method="post">
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
        $('#allmeals').DataTable();
    </script>
@endsection
