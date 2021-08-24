@extends('lay.main')
@section('content')
<section class="atc-mod2">
    <img src="https://www.sailinginversiones.com/images/bg1-mod6-home.png" alt="">
  
    <div class="container">    
  
        <div class="alert alert-warning alert-styled-left alert-dismissible">
            <span class="font-weight-semibold">Atención!</span> 
            @if (session('resent'))
            {{ __('A fresh verification link has been sent to your email address.') }}
            @endif
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>           
        </div>
    </div>
</div>
</section>
@endsection
