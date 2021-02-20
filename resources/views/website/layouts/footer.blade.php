<!--BEGIN FOOTER -->
<footer id="footer" class="footer-background">
    <div id="footer-top" class="container">
        <div class="row">
            <div class="block col-sm-3">
                <div class="img-box">
                    <img src="{{ asset($setting->footerLogo()) }}" alt="">
                </div>
            </div>
            <div class="block col-sm-3">
                <h3 class="footer-title text-uppercase">عن المطعم</h3>
                <div id="footer-about">
                    {!! $setting->{'setting_'.currentLang()}->website_f_description !!}

                </div>
            </div>
            <div class="block col-sm-3">
                <h3 class="footer-title text-uppercase">روابط سريعة</h3>
                <ul id="footer-recent-post">
                    <li>
                        <a href="{{route('home')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">
                            عن المطعم
                        </a>
                    </li>
                    <li>
                        <a href="{{route('meals')}}">
                            الوجبات
                        </a>
                    </li>
                    <li>
                        <a href="{{route('gallery')}}">
                            الصور
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">
                            اتصل بنا
                        </a>
                    </li>
                </ul>
                <ul class="socials-box footer-socials pull-left">
                    @include('website.chunks.socials')
                </ul>
            </div>


            <div class="block col-sm-3">
                <h3 class="footer-title text-uppercase">تواصل معنا</h3>
                <ul id="footer-contacts">
                    @foreach($branches as $branch)
                        <li><i class="fa fa-map-marker"></i>{{$branch->{'branch_'.currentLang()}->address}}</li><br>
                        <li><i class="fa fa-phone"></i>{{$branch->phone}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!--BEGIN COPYRIGHT -->
    <div id="copyright">
        <a href="#" class="scrollTopButton">
           <span class="button-square">
               <i class="fa fa-angle-double-up"></i>
           </span>
        </a>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
							<span class="allright">2020 <strong class="t-color">Begroup </strong> 2020 © Copyright BeGroup All rights Reserved

 <strong class="t-color"> </strong></span>
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->
</footer>
<!-- END FOOTER -->
