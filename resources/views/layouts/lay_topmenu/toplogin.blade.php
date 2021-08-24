<!DOCTYPE html>
<html lang="es">
	<head>
		@include('layouts.lay_topmenu.head')
        <style>
            body {
              background-image: url('{{asset('images/Sailing-Faro.jpg')}}');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
            </style>
    </head>


    {{-- <body background="{{asset('images/Sailing-Faro.jpg')}}" background-repeat="no-repeat"> --}}
    <body>    
        
        <div class="page-content pt-0">
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        
    </body>
</html>