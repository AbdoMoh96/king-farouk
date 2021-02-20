<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                {{--                            <img src="./img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">King Farook</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header" style="margin-top: 20px;">
                        <p>
                            King Farook Admin
                            <img src="{{ asset('dashboard/img/logo.png')}}" width="70px" style="display: block; margin: auto;" alt="logo">
                            <small>Member since Sep. 2020</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer" style="margin-top: 20px;" >
                        <div class="">
                            <a id="log-out" href="#" onclick="document.getElementById('logout').submit();" class="btn btn-default btn-flat rounded-pill">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<form action="{{route('logout')}}" id="logout" style="display: none;" method="post">
 @csrf
</form>
<!-- Left side column. contains the logo and sidebar -->
