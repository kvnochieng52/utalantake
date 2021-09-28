<form method="POST" action="{{ route('login') }}">
    @csrf


    <div class="form-group">
        {{Form::label('email', 'Email Address',['class'=>'control-label'])}}
        {{Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Enter your Email', 'autofocus'=>'true'])}}
        @error('email')
        <span class="error_submission" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password',['class'=>'control-label'])}}
        {{Form::password('password',['class'=>'form-control', 'placeholder'=>'Enter your password', 'autofocus'=>'true'])}}
        @error('password')
        <span class="error_submission" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>



    {{-- <div class="form-group">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

    <label class="form-check-label" for="remember">
        {{ __('Remember Me') }}
    </label>
    </div>

    </div> --}}

    <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-warning btn-block">
                    <strong>LOGIN</strong>
                </button>
            </div>
            <div class="col-md-12">
                @if (Route::has('password.request'))

                <p> <span class="helper-text">Cant Remember Password? <a class="btn btn-link"
                            href="{{ route('password.request') }}">
                            <strong>Reset</strong>

                        </a>

                        @endif
            </div>

        </div>
    </div>
</form>