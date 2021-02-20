@extends('website.layouts.main')

{{--values for website map--}}
@section('page-name' , 'اتصل بنا')
@section('page-route') href="{{route('contact')}}" @endsection
{{--values for website map--}}

{{--values for page background--}}
@section('background-page-name' , 'اتصل بنا')
{{--values for page background--}}



@section('header-background')
    @include('website.chunks.background')
@endsection


@section('content')
    @include('website.chunks.siteMap')

    <!-- BEGIN CONTACT SECTION-->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">

                 @foreach($branches as $branch)
                    <div class="contact-loacation col-md-6">
                        <h3>{{$branch->{'branch_'.currentLang()}->title}}</h3>
                        <p><i class="fa fa-map-marker"></i> {{$branch->{'branch_'.currentLang()}->address}}</p>
                    </div>
                    <div class="contact-drect col-md-6">
                        <h3>ارقام الهاتف</h3>
                        <p><i class="fa fa-phone"></i> {{$branch->phone}} <br>{{$branch->alt_phone}}</p>
                        <p><i class="fa fa-fax"></i> {{$branch->landline}}</p>
                    </div>
                    @endforeach

                    <div class="contact-socials col-md-6 ">
                        <h3>روابط التواصل</h3>
                        <ul class="socials-box">
                            @include('website.chunks.socials')
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <form action="{{ route('send.mail')}} "  method="post">
                        @csrf
                        @method('POST')
                        <div class="col-md-12">
                            <div class="form-group"> <!-- Name field !-->
                                <input type="text"  name="name" class="form-control" placeholder="الاسم  *" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <!-- Email field !-->
                                <input type="email"  name="email" class="form-control" placeholder="البريد الاليكتروني *">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <!-- Phone field !-->
                                <input type="number" class="form-control"  name="phone" placeholder="رقم الهاتف">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <!-- Message field !-->
                                <textarea cols="6" rows="5" class="form-control"  name="message" placeholder="اترك رسالتك .."></textarea>
                            </div>
                        </div>

                        <div class="col-md-12" style="display: flex; justify-content: center;">
                                {!! NoCaptcha::display() !!}
                        </div>


                        <div class="col-md-12">
                            <!-- Submit button !-->
                            <div class="center-position">
                                <button type="submit" class="btn btn-primary btn-sm center-button edit-marginTop20">ارسل</button>
                            </div>
                        </div>

                    </form>
                    <div class="col-md-12">
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map">
        <div class="container">
            @include('website.layouts.map')
        </div>
    </div>


@endsection

@section('Custom-scripts')
    {!! NoCaptcha::renderJs() !!}
@endsection
