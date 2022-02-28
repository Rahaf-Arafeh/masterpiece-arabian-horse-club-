@extends('layouts.app')
@section('content')

             <section class='form2-signin'>
                    <div class='img-box'>
                        <img src="assets/img/formphoto.png" />
                    </div>
                 <div class='content-box'>
                        <div class='form-box-sigin'>
                            <h2>Sign Up</h2>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                           
                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                         
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="  {{ __('Register') }}" class="btn btn-primary"/>
                                  
                            </div>
                            <div class='form-footer'><p>Already have account?<a href='/login'>Login</a></p></div>
                        </div>
                    </form>
                </div>
            </div>
       </section>
   
@endsection
</body>
</html>
