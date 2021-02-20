@if($contact->facebook)
<li><a href="{{$contact->facebook}}"><div class="social-circle-border"><i class="fa fa-facebook"></i></div></a></li>
@endif

@if($contact->twitter)
<li><a href="{{$contact->twitter}}"><div class="social-circle-border"><i class="fa fa-twitter"></i></div></a></li>
@endif

@if($contact->google_plus)
<li><a href="{{$contact->google_plus}}"><div class="social-circle-border"><i class="fa fa-google-plus"></i></div></a></li>
@endif

@if($contact->pintrest)
<li><a href="{{$contact->pintrest}}"><div class="social-circle-border"><i class="fa fa-pinterest"></i></div></a></li>
@endif

@if($contact->behance)
<li><a href="{{$contact->behance}}"><div class="social-circle-border"><i class="fa fa-linkedin"></i></div></a></li>
@endif
