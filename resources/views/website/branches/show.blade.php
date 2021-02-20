@extends('website.layouts.main')

{{--values for website map--}}
@section('page-name' , 'عن الفرع')
@section('page-route') href="{{route('meals')}}" @endsection
{{--values for website map--}}

{{--values for page background--}}
@section('background-page-name' , 'عن الفرع')
{{--values for page background--}}



@section('header-background')
    @include('website.chunks.background')
@endsection



@section('content')
    @include('website.chunks.siteMap')

    <div class="branch">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h2 style="color: #5ca65b;">{{$branch->{'branch_'.currentLang()}->title}}</h2>
                        {!! $branch->{'branch_'.currentLang()}->description !!}

                        <a href="{{$branch->webDownloadBranch()}}" id="downloadLink" class="btn btn-outline-custom btn-rounded mt-4"> تحميل المنيو</a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-content">
                        <img src="{{ asset($branch->firstImage()) }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END SITE MAP -->

    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe src="{{$branch->map}}" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="img-content">
                        <img src="{{ asset($branch->secondImage()) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
