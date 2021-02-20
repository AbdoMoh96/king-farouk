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
          Message From: {{$message->name}}

            <h4>Message subject : {{$message->subject}} </h4>
            <h4>Sender Email : {{$message->email}} </h4>
            <h4>Sender Phone : {{$message->phone}} </h4>
        </div>

    </div>

    <div class="col-md-12">
        <div class="box box-warning" style="padding: 15px">
            <h3>Message</h3>
            <p> {{$message->message}} </p>
        </div>
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#{{$message->id}}">
           Delete Message
        </a>
    </div>



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



@endsection
