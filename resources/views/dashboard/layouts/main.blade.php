<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        @include('dashboard.layouts.logo')
        @include('dashboard.layouts.top-nav')
    </header>
        @include('dashboard.layouts.side-nav')
    <div class="content-wrapper">
        @include('dashboard.layouts.chunks.breadcrumbs')
        <section class="content container-fluid">
            @yield('content')
        </section>
    </div>
   @include('dashboard.layouts.footer')
</div>
@include('dashboard.layouts.scripts')
</body>
</html>
