@extends('website.layouts.main')


@section('content')

    <!-- BEGIN HOME SLIDER -->
    <div class="xpro-slider-container">
        <div id="scroller" class="xpro-slider">
            <div class="xpro-slider-content">

                @foreach($mainSlider->childSliders as $slider)
                <!--ON Slider Item -->
                <div class="xpro-slider-item" style="background-image:url({{ asset($slider->image()) }});background-position:right center">
                    <div class="xpro-item-layer p-slide-overlay" data-effect="animate({'delay':'0.5s', 'duration':'1s'})"></div>
                    <div class="xpro-item-layer p-text-box" data-effect="animate({'Y':'20px', zoom:'in', 'delay':'1.6s', 'duration':'600ms'})">
                        <h1 class="xpro-item-layer-responsive xp-headtext"> {{ $slider->{'slider_'.currentLang()}->title }} </h1>
                        <div class="xpro-item-layer-responsive xp-headsubtext">
                            {!! $slider->{'slider_'.currentLang()}->description !!}
                        </div>
                    </div>
                </div> <!--OFF Slider Item -->
                    @endforeach
            </div>
        </div>
    </div>
    <!-- END HOME SLIDER -->

    <!-- BEGIN ABOUT US  -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="section-title">عن مطعم الملك فاروق</h2>

                    <div class="col-sm-6 pad100">
                        <div class="content">
                                  {!! $setting->{'setting_'.currentLang()}->website_h_description !!}
                        </div>

                    </div>
                    <div class="col-sm-6 pad100">
                        <div class="content">
                            <iframe width="100%" height="315" src="{{$about->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	 </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- BEGIN SPECIAL MENU  -->
    <!--Dishes Section Start-->
    <section class="cat_dishes_wrapper" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cat_section_headings wow zoom">
                        <h2 class="section-title">وجبات مطعم الملك فاروق</h2>

                        <div class="cat_border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cat_dish_img_wrapper">

                        @foreach($meals as $key => $meal)
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

                            @if($key == 6) @break @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- RESERVATION CALL  -->
    <section class="call-reservation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="call-box">
                        <h3 class="title">للطلبات والدليفري من خلال الفروع اتصل على </h3>
                        <span class="phone">{{$contact->phone}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END RESERVATION CALL -->

    <!-- CHEF TEAM  -->
    <section class="chef-team-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">صور المطعم</h2>
                    <div class="section-subtitle">قم بزيارتنا في اقرب فرع!</div>
                    <div class="owl-carousel owl-chef-team-slider"> <!-- On team slide  -->
                        @foreach($album->images as $image)
                        <div class="item-frame-box"><!-- On item  -->
                            <div class="item-bg-box">
                                <div class="image"><a href="#"><img src="{{ asset($image->path) }}" alt=""></a></div>
                            </div>
                        </div><!-- OFF item  -->
                        @endforeach

                    </div><!-- OFF team slide  -->
                </div>
            </div>
        </div>
    </section>

    <div class="map">
     @include('website.layouts.map')
    </div>
@endsection

@section('Custom-scripts')
    <script type="text/javascript">
        // Hero Slide// --------------------------
        jQuery(document).ready(
            function() {
                var slider = new XPRO.Controls.Slider(null);
                slider.initSlider("scroller", {
                    "mode"              : "fade",
                    "dir"               : "left",
                    "iniWidth"          : 1200,
                    "iniHeight"         : 600,
                    "autoRun"           : true,
                    "interval"          : 6000,
                    "autoHeightMode"    : "maintainratio",
                    "thumbnails"        : null,
                    "stopOnHover"       : false,
                    "imageVAlign"       : "bottom",
                    "showProgress"      : false,
                    "enableNavigation"  : true,
                    "onAdjustHeight"    : function(theslider) {
                        //get available height
                        var aH = jQuery(window).innerHeight();
                        var top = jQuery(theslider.rt["scroller"]).position()["top"];
                        return aH-top;
                    }
                });

                jQuery(".xp-Custom-navigation").on("click", function() {
                    slider.forward();
                    return false;
                });
            }
        );
    </script>
@endsection
