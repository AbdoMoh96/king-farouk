@extends('website.layouts.main')

{{--values for website map--}}
@section('page-name' ) {{$meal->{'meal_'.currentLang()}->title}} @endsection
@section('page-route') href="{{route('meals')}}" @endsection
{{--values for website map--}}

{{--values for page background--}}
@section('background-page-name' , 'تفاصيل الوجبة')
{{--values for page background--}}



@section('header-background')
    @include('website.chunks.background')
@endsection


@section('content')

    @include('website.chunks.siteMap')

    <!-- BEGIN BLOG PAGE  -->
    <section class="recipe-content-sigle">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="pasta-item-slide">

                        <div id="item-images" class="owl-carousel">
                            <div class="item">
                                <img src="{{ asset($meal->image()) }}" style="height: 450px" alt="">
                            </div>

                            @foreach($meal->images as $image)
                            <div class="item">
                                <img src="{{ asset($image->path) }}" style="height: 450px" alt="">
                            </div>
                            @endforeach
                        </div>



                        <div id="item-thumbs" class="owl-carousel">

                            <div class="item">
                                <img src="{{ asset($meal->image()) }}" alt="">
                            </div>

                            @foreach($meal->images as $image)
                            <div class="item">
                                <img src="{{ asset($image->path) }}" alt="">
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="price-content edit-marginTop20">
                        <h3 class="price-title">{{$meal->{'meal_'.currentLang()}->title}}</h3>
                        {!! $meal->{'meal_'.currentLang()}->description !!}

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-right">
                        <div class="chefInfo-box">
                            <div class="image-box"><img src="{{ asset($setting->mainMenu()) }}" alt=""></div>
                            <div class="chef-info">
                                <h3>تواصل معنا</h3>
                                <p>الملك فاروق مكان يتمتع بطابع خاص لمحبي أكل المشويات ويقدم أسلوب جديد للطعام الكلاسيكي والحديث .</p>
                                <ul class="socials-box chef-socials">
                                   @include('website.chunks.socials')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- END col  -->
            </div> <!-- END row  -->
        </div> <!-- END container  -->
    </section>
    <!-- END BLOG PAGE -->



@endsection
