@extends('layouts.app')
@extends('layouts.navbar')
@section('content')

<section class='form2-signin'>
    <div class='img-box'>
                    <img src="assets/img/formphoto.png" />
                </div>
                <div class='content-box'>
                    <div class='form-box-sigin'>
                        <h2>Sign in</h2>
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class='form-group'>
                                <label>{{ __('Email Address') }}:</label>
                                <input type='email' placeholder='Email*' class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class='form-group'>
                                <label>{{ __('Password') }}:</label>
                                <input type='password' placeholder='Password*' class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                                 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                         
                            <div class='form-group'>
                                <input type='submit' value="{{ __('Login') }}" />
                            </div>
                            <div class='form-footer'><p>Not a member?<a href='/register'>Sign Up</a></p>
                            @if (Route::has('password.request'))
                            <a class="form-forget-pass" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        </form>
                    </div>
                </div>
            </section>
            @endsection       
</body>
</html>