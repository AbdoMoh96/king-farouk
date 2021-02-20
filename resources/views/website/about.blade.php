@extends('website.layouts.main')

{{--values for website map--}}
@section('page-name' , 'عن المطعم')
@section('page-route') href="{{route('about')}}" @endsection
{{--values for website map--}}

{{--values for page background--}}
@section('background-page-name' , 'عن المطعم')
{{--values for page background--}}

@section('header-background')
   @include('website.chunks.background')
@endsection


@section('content')

    @include('website.chunks.siteMap')

    <!-- BEGIN THE HISTORY  -->
    <section class="about-history">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title-border">مطعم الملك فاروق</h2>

                    <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                        <div class="frame-image" data-image-src="{{ asset($about->descriptionImage()) }}">
                            <div class="top-mask"></div>
                            <div class="bottom-mask"></div>
                            <div class="width-box">
                                <!-- <div class="left-mask"></div> -->
                                <div class="content">
                                    <h3 class="title manuscript">من نحن</h3>
                                    {!! $about->{'about_'.currentLang()}->description_text !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                        <div class="frame-image" data-image-src="{{ asset($about->historyImage()) }}">
                            <div class="top-mask"></div>
                            <div class="bottom-mask"></div>
                            <div class="width-box">
                                <!-- <div class="left-mask"></div> -->
                                <div class="content">
                                    <h3 class="title manuscript">تاريخنا</h3>
                                    {!! $about->{'about_'.currentLang()}->history_text !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                        <div class="frame-image" data-image-src="{{ asset($about->visionImage()) }}">
                            <div class="top-mask"></div>
                            <div class="bottom-mask"></div>
                            <div class="width-box">
                                <!-- <div class="left-mask"></div> -->
                                <div class="content">
                                    <h3 class="title manuscript">رؤيتنا </h3>
                                    {!! $about->{'about_'.currentLang()}->vision_text !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                        <div class="frame-image" data-image-src="{{ asset($about->missionImage()) }}">
                            <div class="top-mask"></div>
                            <div class="bottom-mask"></div>
                            <div class="width-box">
                                <!-- <div class="left-mask"></div> -->
                                <div class="content">
                                    <h3 class="title manuscript">مهمتنا</h3>
                                    {!! $about->{'about_'.currentLang()}->mission_text !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                        <div class="frame-image" data-image-src="{{ asset($about->planImage()) }}">
                            <div class="top-mask"></div>
                            <div class="bottom-mask"></div>
                            <div class="width-box">
                                <!-- <div class="left-mask"></div> -->
                                <div class="content">
                                    <h3 class="title manuscript">خطتنا </h3>
                                    {!! $about->{'about_'.currentLang()}->plan_text !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-about-box col-sm-12"> <!-- content-about-box item -->
                        <div class="frame-image" data-image-src="{{ asset($about->valuesImage()) }}">
                            <div class="top-mask"></div>
                            <div class="bottom-mask"></div>
                            <div class="width-box">
                                <!-- <div class="left-mask"></div> -->
                                <div class="content">
                                    <h3 class="title manuscript">قيمنا</h3>
                                    {!! $about->{'about_'.currentLang()}->values_text !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

@endsection

