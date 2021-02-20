<!-- BEGIN SITE MAP -->
<div class="site-map">
    <div class="container">
        <a href="{{route('home')}}">الرئيسية</a>
        <a @yield('page-route') >@yield('page-name')</a>
    </div>
</div>
<!-- END SITE MAP -->
