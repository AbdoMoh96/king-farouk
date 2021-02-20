@extends('dashboard.layouts.main')

@section('content')
    <div class="rgs-wrapper">
        <!-- start shortcuts section -->
        <div class="shortcuts-section">
            <div class="section-heading">
                <i class="ion-shuffle"></i>
                <p>
                    Shortcuts
                </p>
            </div>
            <div class="section-body">
                <ul>
                    <li>
                        <a href="{{route('admin.meals.create')}}">
                            <div class="li-img">
                                <img src="{{ asset('dashboard/img/shortcuts/add-service.png')}}" alt="img">
                            </div>
                            <div class="li-title">
                                <p>
                                    Crate Meal
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end shortcuts section -->


        <!-- start info section -->
        <div class="info-section">
            <div class="section-heading">
                <i class="ion-information-circled"></i>
                <p>
                    General Info
                </p>
            </div>
            <div class="section-body">
                <ul>
                    <li>
                        <a href="#">
                            <i class="ion-android-restaurant"></i>
                            <div class="title-counter">
                                <p>
                                    Meals
                                </p>
                                <span>
                        {{$meals}}
                      </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-email"></i>
                            <div class="title-counter">
                                <p>
                                    Messages
                                </p>
                                <span>
                        {{$messages}}
                      </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-building"></i>
                            <div class="title-counter">
                                <p>
                                    Branches
                                </p>
                                <span>
                        {{$branches}}
                      </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-image"></i>
                            <div class="title-counter">
                                <p>
                                    Images
                                </p>
                                <span>
                        {{$images}}
                      </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-images"></i>
                            <div class="title-counter">
                                <p>
                                    Sliders
                                </p>
                                <span>
                        {{$sliders}}
                      </span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
@endsection


