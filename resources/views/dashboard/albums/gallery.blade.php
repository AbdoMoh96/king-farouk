@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Gallery')
@section('description' ) {{$album->album_en->title.' gallery'}}  @endsection
@section('Custom-parent' , 'Albums')
@section('href-parent') href="{{ route('admin.albums.index') }}" @endsection
@section('Custom-child') {{$album->album_en->title.' gallery'}} @endsection
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')



    <section class="content container-fluid">
        <div class="images-wrapper">
            <ul>
                @if($album->images)
                    @foreach($album->images as $image)
                        <li>
                            <div class="remove-btn modal-btn" data-toggle="modal" data-target="#delete{{$image->id}}">
                                <i class="ion-ios-close-empty"></i>
                            </div>
                            <img src="{{asset($image->path)}}" alt="{{$image->alt}}">
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>

        @if($album->images)
            @foreach($album->images as $image)
                <div class="modal modal-danger fade" id="delete{{$image->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Delete Image</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are You Sure You Want To Delete Image</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{$image->deleteImage()}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal" style="margin-right: 5px">
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
        @endif
    </section>

@endsection
