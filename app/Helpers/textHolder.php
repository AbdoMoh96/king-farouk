add this code in request validation ->
'g-recaptcha-response' => 'required|captcha'


add this code in view -->
<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Captcha</label>
    <div class="col-md-6">
        {!! app('captcha')->display() !!}
        @if ($errors->has('g-recaptcha-response'))
        <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
        @endif
    </div>
</div>

