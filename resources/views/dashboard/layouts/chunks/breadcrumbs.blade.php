<section class="content-header">
    <h1>
        @yield('header')
        <small>@yield('description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a @yield('href-parent')> @yield('Custom-parent')</a></li>
        <li class="active"><a @yield('href-child')> @yield('Custom-child')</a></li>
    </ol>
</section>
