@extends('website.layouts.main')

{{--values for website map--}}
@section('page-name' , 'وجبات المطعم')
@section('page-route') href="{{route('meals')}}" @endsection
{{--values for website map--}}

{{--values for page background--}}
@section('background-page-name' , 'الوجبات')
{{--values for page background--}}



@section('header-background')
    @include('website.chunks.background')
@endsection


@section('content')

    @include('website.chunks.siteMap')


    <!--Dishes Section Start-->
    <section class="cat_dishes_wrapper" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cat_section_headings wow zoom">
                        <span class="cat_subheading">Goodess & Taste</span>
                        <h4>وجبات مطعم الملك فاروق</h4>
                        <div class="cat_border"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="cat_dish_img_wrapper">

{{--                       start loop here--}}
                        @foreach($meals as $meal)
                            <div class="col-lg-3 col-md-3 col-sm-6 padding-left padding-right">
                                <div class="cat_dish_img slideleft wow">
                                    <img src="{{ asset($meal->image()) }}" alt="" class="img-responsive" />
                                    <div class="cat_dish_img_caption"></div>
                                    <div class="cat_dish_name">
                                        <p class="cat_dish_title"><a href="{{$meal->webMealShow()}}">{{$meal->{'meal_'.currentLang()}->title }}</a>
                                        </p>
                                        {{--                                    <div class="cat_dish_category">--}}
                                        {{--                                        <ul>--}}
                                        {{--                                            <li><a href="#">mushroom</a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                            <li><a href="#">garlic</a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                            <li><a href="#">veggies</a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                        </ul>--}}
                                        {{--                                    </div>--}}
                                        <span class="dish_price">{{'EGP/'.$meal->price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
{{--                        end loop here--}}


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
