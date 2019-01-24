@extends('layouts.auth')

@section('content')
<div class="page-holder d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center py-5">
        <!-- <div class="col-5 col-lg-6 mx-auto mb-5 mb-lg-0">
            <div class="pr-lg-5"><img src="img/login.jpeg" alt="" class="img-fluid"></div>
          </div> -->
            <div class="col-lg-6 px-lg-2">
                <h1 class="text-base text-primary text-uppercase mb-4">Bubly Center</h1>
                <h2 class="mb-4">Welcome back!</h2>
                        <p class="text-muted">Use your account to login!</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row mb-4">
                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                <div class="col-md-10">
                                    <input id="email" type="email" placeholder="Email address" class="form-control border-0 shadow form-control-lg text-blue{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                <div class="col-md-10">
                                    <input id="password" type="password"  placeholder="Password"class="form-control border-0 shadow form-control-lg text-blue{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember" class="custom-control-label">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link btn-reset text-primary" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                </div>
        </div>
    </div>
</div>
@endsection
