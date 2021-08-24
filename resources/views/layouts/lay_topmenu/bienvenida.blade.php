<!DOCTYPE html>
<html lang="es">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/components.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/colors.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
        <style>
            body {
              /* background-image: url('{{asset('images/Sailing-Faro.jpg')}}'); */
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