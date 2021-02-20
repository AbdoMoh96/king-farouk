@extends('website.layouts.main')

{{--values for website map--}}
@section('page-name' , 'معرض الصور')
@section('page-route') href="{{route('meals')}}" @endsection
{{--values for website map--}}

{{--values for page background--}}
@section('background-page-name' , 'معرض الصور')
{{--values for page background--}}



@section('header-background')
    @include('website.chunks.background')
@endsection



@section('content')
    @include('website.chunks.siteMap')

    <!-- BEGIN GALLERY  -->
    <section class="gallery-content">
        <div class="container">
            <h2 class="section-title-border edit-padding0">الصور</h2>
            <div id="gallery-box" class="row edit-paddingTop40">

                @foreach($album->images as $image)
                <div class="col-md-4 col-sm-6">
                    <div class="xp-grid-thumb">
                        <img class="gallery-slide-image" src="{{ asset($image->path) }}" data-src="{{ asset($image->path) }}" title="King Farouk" alt="King Farouk" />
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- END GALLERY  -->

@endsection

@section('Custom-scripts')
    <script type="text/javascript">
        jQuery(document).ready(
            function() {
                var slider = new XPRO.Controls.Slider();
                slider.createSliderStruct({
                    elements: jQuery('#gallery-box .gallery-slide-image').toArray(),
                    sliderOptions: {
                        "mode"              : "slide",
                        "iniWidth"          : 1000,
                        "iniHeight"         : 500,
                        "autoHeightMode"    : "maintainratio",
                        "thumbnails"        : null,
                        "floating"          : true,
                        "autoRun"           : true,
                        "interval"          : 6000,
                        "stopOnHover"       : false,
                        "showProgress"      : true,
                        "infoPanel"         : {panelId: "infopanel"},
                        "onSlide"           : function(cnt) {
                            //select thumbnail
                            jQuery("#gallery-box").find(".xp-grid-thumb").removeClass("xp-grid-thumb-sel");
                            var thm = cnt.elm.getAttribute("data-thumb-idx");
                            jQuery("#gallery-box").find("[data-thumb-idx='"+thm+"']").parent(".xp-grid-thumb").addClass("xp-grid-thumb-sel");
                        }
                    },
                    itemHTML: function(html, idx, elm) {

                        elm.setAttribute("data-thumb-idx", idx);
                        jQuery(elm).on("click", function() {
                            slider.showSlider();
                            slider.slideTo(idx);
                        });
                        html  = "<div class='xpro-slider-item' data-thumb-idx='"+idx+"'><div class='xpro-image-placeholder' data-src='" + elm.getAttribute("data-src") +"' data-class='xpro-kenburns-dir-random' ></div>";
                        html += "<div class='xpro-item-layer p-item-layer' data-effect=\"animate({zoom:'in', delay:'0.8s'})\" >"+elm.getAttribute('alt')+"</div>";
                        html += "<div class='xpro-slider-info'>"+elm.getAttribute('title')+"</div>";
                        html += "</div>";
                        return html;
                    },
                    beforeHTML: function() {return ""; /*not needed just show it as example*/ },
                    afterHTML: function() {return "<div id='infopanel' ></div>"}

                });

            }

        );

    </script>
@endsection
