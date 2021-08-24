@extends('layouts.lay_topmenu.toplogin')

@section('content')
<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <!-- Login card -->
            <form method="POST" class="login-form wmin-sm-400" action="{{ route('login') }}">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{asset('images/logo_color.png')}}">
                            
                            <span class="d-block text-muted">Sus credenciales</span>
						</div>
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-envelop text-muted"></i>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group d-flex align-items-center">

                            @if (Route::has('password.request'))
                                    <a class="ml-auto" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Continuar con el registro') }} <i class="icon-circle-right2 ml-2"></i></button>
                        </div>
                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Si aún no se registró</span>
                        </div>
                        <div class="form-group">
                            <a href="{{route('register')}}" type="button" class="btn btn-warning btn-block">{{ __('Abrir Cuenta') }} <i class="icon-circle-right2 ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login card -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

@endsection
