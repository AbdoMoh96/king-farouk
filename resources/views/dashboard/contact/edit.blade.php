@extends('dashboard.layouts.main')


{{--        breadcrumbs --}}
@section('header' , 'Contact')
@section('description' , 'WebSite Contact')
@section('Custom-parent' , 'Contact')
{{--     @section('href-parent') href="#" @endsection--}}
{{--@section('Custom-child' , 'update meal')--}}
{{--        breadcrumbs --}}


@section('content')
    @include('dashboard.layouts.chunks.status')
    @include('dashboard.layouts.chunks.errors')


        <form role="form" action="{{$contact->updateContact()}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- English Side -->
                <div class="col-md-6">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Contact Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Official Email" value="{{$contact->email}}">
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Phone Number" value="{{$contact->phone}}">
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">Another Phone</label>
                                    <input type="text" class="form-control" name="phone_alt" id="exampleInputEmail1" placeholder="Enter Another Phone Number" value="{{$contact->phone_alt}}">
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Address</label>
                                    <input type="text" class="form-control" name="address_en" id="exampleInputEmail1" placeholder="Enter Address" value="{{$contact->address_en}}">
                                    <p class="help-block"> Enter Address Of Company </p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Another Address</label>
                                    <input type="text" class="form-control" name="alt_address_en" id="exampleInputEmail1" placeholder="Enter Another Address" value="{{$contact->alt_address_en}}">
                                    <p class="help-block"> Enter Another Address Of Company </p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Location</label>
                                    <input type="url" class="form-control" name="location" id="exampleInputEmail1" placeholder="Location of Company" value="{{$contact->location}}">
                                    <p class="help-block"> Add Location Link of company from google maps </p>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">  &ggg; Update Social Media Links &GreaterGreater;&GreaterGreater; </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-facebook-square"></i> Facebook</span>
                                        <input type="url" class="form-control" placeholder="Facebook Page URL" name="facebook" value="{{$contact->facebook}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-twitter-square"></i>Twitter</span>
                                        <input type="url" class="form-control" placeholder="Twitter Page URL" name="twitter" value="{{$contact->twitter}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-instagram"></i> Instagram</span>
                                        <input type="url" class="form-control" placeholder="Instagram Page URL" name="instagram" value="{{$contact->instagram}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-youtube-play"></i> Youtube</span>
                                        <input type="url" class="form-control" placeholder="Youtube Page URL" name="youtube" value="{{$contact->youtube}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-linkedin-square"></i> Linkedin</span>
                                        <input type="url" class="form-control" placeholder="Linkedin Page URL" name="linkedin" value="{{$contact->linked_in}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-whatsapp"></i> Whatsapp</span>
                                        <input type="text" class="form-control" placeholder="Whatsapp Page URL" name="whatsapp" value="{{$contact->whatsapp}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-behance-square"></i> Behance</span>
                                        <input type="url" class="form-control" placeholder="Behance Page URL" name="behance" value="{{$contact->behance}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pinterest-square"></i> Pintrest</span>
                                        <input type="url" class="form-control" placeholder="Pintrest Page URL" name="pintrest" value="{{$contact->pintrest}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-google-plus"></i> Google Plus</span>
                                        <input type="url" class="form-control" placeholder="Google Plus Page URL" name="google_plus" value="{{$contact->google_plus}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-snapchat"></i> Snap Chat</span>
                                        <input type="url" class="form-control" placeholder="Snap Chat Channel URL" name="snapchat" value="{{$contact->snapchat}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-warning">Update Contact</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arabic Side -->
                <div class="col-md-6 " dir="rtl">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">قم بتعديل بيانات الإتصال</h3>
                        </div>
                        <!-- .box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">العنوان</label>
                                    <input type="text" class="form-control" name="address_ar" dir="rtl" id="exampleInputEmail1" placeholder="ادخل عنوان الشركة" value="{{$contact->address_ar}}">
                                    <p class="help-block">أدخل عنوان الشركة</p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">عنوان اخر</label>
                                    <input type="text" class="form-control" name="alt_address_ar" dir="rtl" id="exampleInputEmail1" placeholder="ادخل عنوان اخر الشركة" value="{{$contact->alt_address_ar}}">
                                    <p class="help-block">أدخل عنوان اخر الشركة</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>



@endsection
