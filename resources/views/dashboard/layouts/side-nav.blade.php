<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header" style="color: whitesmoke;">King Farook Admin Panel</li>
            <!-- Optionally, you can add icons to the links -->
            <li @if(request()->url() == route('admin.dashboard.index')) class="active" @endif>
                <a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>


            <li class="treeview">
                <a href="#"><i class="ion-android-restaurant"></i> <span>Meals</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.meals.index')}}"><i class="fa fa-eye"></i>View All Meals</a></li>
                    <li><a href="{{route('admin.meals.create')}}"><i class="fa fa-plus-square"></i>Create New Meal</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="ion-images "></i> <span>Sliders</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.sliders.index')}}"><i class="fa fa-eye"></i>View All Main Sliders</a></li>
                    <li><a href="{{$mainSlider->createChild()}}"><i class="fa fa-plus-square"></i>Create New Main Slider</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-book "></i> <span>Albums</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.albums.index')}}"><i class="fa fa-eye"></i>View All albums</a></li>
{{--                    <li><a href="{{route('admin.albums.create')}}"><i class="fa fa-plus-square"></i>Create New Album</a></li>--}}
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-building "></i> <span>Branches</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.branches.index')}}"><i class="fa fa-eye"></i>View All Branches</a></li>
                    <li><a href="{{route('admin.branches.create')}}"><i class="fa fa-plus-square"></i>Create New Branch</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="ion-email "></i> <span>Messages</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.messages.index')}}"><i class="fa fa-eye"></i>View All Messages</a></li>
                </ul>
            </li>



            <li @if(request()->url() == $contact->editContact() ) class="active" @endif>
                <a href="{{$contact->editContact()}}"><i class="fa fa-phone-square"></i> <span>Website Contact</span></a>
            </li>

            <li @if(request()->url() == $about->editAbout() ) class="active" @endif>
                <a href="{{$about->editAbout()}}"><i class="fa fa-info-circle"></i> <span>About Website</span></a>
            </li>

            <li @if(request()->url() == $setting->editSettings() ) class="active" @endif>
                <a href="{{ $setting->editSettings() }}"><i class="fa fa-gears"></i> <span>Website Settings</span></a>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
