@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Branches')
@section('description' , 'All Branches')
@section('Custom-parent' , 'Branches')
{{--@section('href-parent') href="{{route(' admin.meals.index')}}" @endsection--}}
{{--@section('Custom-child' , '')--}}
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')


    <div class="col-md-12">
        <div class="box box-warning" style="padding: 15px">
            <div class="box-header with-border">
                <h3 class="box-title">All Meals</h3>
                <a href="{{route('admin.branches.create')}}" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Add New branch </a>
            </div>
            <table class="table table-bordered show-edit-category-table table-hover table-striped" id="allbranches">
                <thead>
                <tr>
                    <th>id</th>
                    <th>first image</th>
                    <th>second image</th>
                    <th>title</th>
                    <th>phone</th>
                    <th>created</th>
                    <th>updated</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>first image</th>
                    <th>second image</th>
                    <th>title</th>
                    <th>phone</th>
                    <th>created</th>
                    <th>updated</th>
                    <th>actions</th>
                </tr>
                </tfoot>

                <tbody>
                @foreach($branches as $branch)
                    <tr>
                        <td>{{$branch->id}}</td>
                        <td><img src="{{ asset($branch->firstImage()) }}" alt="no image" width="50px"></td>
                        <td><img src="{{ asset($branch->secondImage()) }}" alt="no image" width="50px"></td>
                        <td>{{$branch->branch_ar->title}}</td>
                        <td>{{$branch->phone}}</td>
                        <td>{{$branch->created_at->format('d M Y')}}</td>
                        <td>{{$branch->branch_en->updated_at->format('d M Y')}}</td>
                        <td>
                            <a href="{{$branch->editBranch()}}" ><i class="fa fa-pencil fa-2x text-warning"></i></a>
                            <a href="#" class="" data-toggle="modal" data-target="#{{$branch->id}}">
                                <i class="fa fa-trash-o fa-2x text-warning"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



    @foreach($branches as $branch)
        <div class="modal modal-danger fade" id="{{$branch->id}}" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Branch</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are You Sure You Want To Delete {{$branch->branch_ar->title}}</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{$branch->deleteBranch()}}" method="post">
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
        $('#allbranches').DataTable({
            "ordering": false
        });
    </script>
@endsection
