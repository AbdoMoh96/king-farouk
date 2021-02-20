<!-- BEGIN HEADER -->
<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul id="top-info">
                        <li>Phone: {{$contact->phone}}</li>
                        <li>Email: <a href="{{'mailto:'.$contact->email}}">{{$contact->email}}</a></li>
{{--                        <li><a href="#" style="color:#5ca65b;"><i class="fa  fa-clock-o"></i> 08:30 am - 10:30 pm</a></li>--}}
                    </ul>

                    <ul class="socials-box pull-right">
                        @include('website.chunks.socials')
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div id="nav-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- From Mobile Logo.png -->
                    <a href="index.html" class="nav-logo"><img src="#" alt=""></a>

                    <button class="nav-mobile-btn is-closed animated fadeInLeft" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>


                    <nav id="nav-mobile" class="navbar">
                        <ul class="nav navbar-nav">
                            <li><a @if(request()->url() === route('home')) class="active" @endif href="{{route('home')}}">الرئيسية</a></li>

                            <li><a @if(request()->url() === route('about')) class="active" @endif  href="{{route('about')}}">عن المطعم</a></li>
                            <li><a @if(request()->url() === route('meals')) class="active" @endif  href="{{route('meals')}}">الوجبات</a></li>

                            <!-- From Nav Logo.png -->
                            <li class="border-none"><a href="{{route('home')}}" class="nav-logo"><img src="{{  asset($setting->headerLogo()) }}" alt=""></a></li>
                            <li><a @if(request()->url() === route('gallery')) class="active" @endif href="{{route('gallery')}}">الصور</a></li>

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" data-hover="dropdown">الفروع<b class="caret"></b></a>
                                <ul class="dropdown-menu">

{{--                                    <li><a href="maps.html">فرع الدقي</a></li>--}}
{{--                                    <li><a href="maps.html">فرع بنها</a></li>--}}
{{--                                    <li><a href="maps.html">فرع شبين</a></li>--}}
{{--                                    <li><a href="maps.html">فرع بورتو السخن</a></li>--}}
{{--                                    <li><a href="maps.html">فرع الساحل</a></li>--}}
                                    @foreach($branches as $branch)
                                        <li><a href="{{$branch->webShowBranch()}}">{{$branch->branch_ar->title}}</a></li>
                                    @endforeach

                                </ul>
                            </li>

                            <li><a @if(request()->url() === route('contact')) class="active" @endif href="{{route('contact')}}">اتصل بنا</a></li>
                        </ul>

                    </nav>
                    <!-- END MAIN MENU -->

                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->
@yield('header-background')
