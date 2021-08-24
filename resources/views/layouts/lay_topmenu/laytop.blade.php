<!DOCTYPE html>
<html lang="es">
	<head>
        @include('layouts.lay_topmenu.head')
        {{--@livewireStyles--}}
    </head>
    <body>
        @include('layouts.lay_topmenu.mainnavbar')
        @include('layouts.lay_topmenu.secondarynavbar')
        {{-- @include('layouts.lay_topmenu.pageHeader') --}}
        
        <div class="page-content pt-0">
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.lay_topmenu.footer')
        @stack('scripts')
       {{--@livewireScripts--}}
    </body>
</html>