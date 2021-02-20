@extends('dashboard.layouts.main')

{{--        breadcrumbs --}}
@section('header' , 'Meals')
@section('description' , 'All Meals')
@section('Custom-parent' , 'Meals')
{{--        @section('href-parent') href="#" @endsection--}}
{{--@section('Custom-child' , 'update meal')--}}
{{--        breadcrumbs --}}

@section('content')


        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-warning" style="padding: 15px">
                <div class="box-header with-border">
                    <h3 class="box-title">All Meals</h3>
                    <a href="" class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Add New Meal </a>
                </div>
                <table class="table table-bordered table-hover table-striped" id="example1">
                    <thead>
                    <th>name</th>
                    <th>phone</th>
                    <th>address</th>
                    </thead>

                    <tfoot>
                    <th>name</th>
                    <th>phone</th>
                    <th>address</th>
                    </tfoot>

                    <tbody>
                    <tr>
                        <td>Ahmed</td>
                        <td>01154995586</td>
                        <td>cairo</td>
                    </tr>

                    <tr>
                        <td>john</td>
                        <td>+500 1129 1444</td>
                        <td>New York</td>
                    </tr>
                    </tbody>

                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>



    <!-- English section -->
        <div class="col-md-6" style="float: left">
            <div class="box box-warning" style="padding: 15px">

               <div class="form-group">
                   <label for="fname">Title</label>
                   <input type="text" id="fname" class="form-control">
                   <p class="text-warning mt-2">helper block</p>
               </div>

                <div class="form-group">
                    <label for="fname">Description</label>
                    <textarea name="" id="textEN" cols="30" rows="10"></textarea>
                    <p class="text-warning mt-2">helper block</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-warning" >create</button>
                </div>

            </div>
        </div>
    <!-- end English section -->

     <!-- Arabic section -->
        <div class="col-md-6" style="float: right; text-align: right;">
            <div class="box box-warning" style="padding: 15px">

                <div class="form-group">
                    <label for="fname">Description ar</label>
                    <textarea name="" id="textAR" cols="30" rows="10"></textarea>
                    <p class="text-warning mt-2">helper block ar</p>
                </div>

            </div>
        </div>
    <!-- end Arabic section -->

@endsection

@section('Custom-ckeditor')
    <script>
        CKEDITOR.replace('textEN' , { language: 'en' });
        CKEDITOR.replace('textAR' , { language: 'ar' });
    </script>
@endsection

@section('data-tables')
    <script>
        $('#example1').DataTable();
    </script>
@endsection
