<!DOCTYPE html>
<html lang="en-us">

@include('website.layouts.head')

<body class="home-page">

@include('website.layouts.loader')

<!--  WRAPPER -->
<div id="wrapper">
    <!-- Mobile menu overlay background -->
    <div class="overlay" data-image-src="images/content/mob-menu-background.jpg"></div>

    @include('website.layouts.header')

    @yield('content')

    @include('website.layouts.footer')


</div>
<!-- END WRAPPER -->
@include('website.layouts.socials')

@include('website.layouts.scripts')
</body>
</html>
