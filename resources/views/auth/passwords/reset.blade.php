@extends('layouts.lay_topmenu.toplogin')

@section('content')
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <form method="POST" class="login-form wmin-sm-400" action="{{ route('password.update') }}">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{asset('images/logo_color.png')}}">
                            
                            <span class="d-block text-muted">{{ __('Reset Password') }}</span>
                        </div>
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <input type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="password-confirm" placeholder="Repita la contraseña por favor" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Reset Password') }} 
                                <i class="icon-circle-right2 ml-2"></i>
                            </button>
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


@endsection
