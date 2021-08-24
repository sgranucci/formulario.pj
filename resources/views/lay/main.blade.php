<!DOCTYPE html>
<html lang="es">
    @include('lay.head')
    <body>
        @include('lay.header')
        @yield('content')
        @include('lay.scripts')
        {{-- @include('lay.footer') --}}
        @stack('scripts')
    </body>
</html>
        