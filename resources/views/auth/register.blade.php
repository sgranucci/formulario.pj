@extends('layouts.lay_topmenu.toplogin')

@section('content')
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <form method="POST" class="login-form wmin-sm-400" action="{{ route('register') }}">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{asset('images/logo_color.png')}}">
                            <span class="d-block text-muted">Creá tu usuario y contraseña para abrir tu cuenta de inversión. Podrás dejarlo en estado borrador e ingresar las veces que necesites para terminar el proceso.</span>
                        </div>  
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" placeholder="Nombre completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                            <input type="password" placeholder="Generar Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }} <i class="icon-circle-right2 ml-2"></i></button>
                        </div>
                        <div class="content d-flex justify-content-center align-items-center">
                            <a href="{{route('login')}}" >¿Ya sos usuario? Iniciá sesión aquí</a>
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
