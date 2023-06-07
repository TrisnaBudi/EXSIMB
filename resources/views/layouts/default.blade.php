<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.link')
    </head>
    @include('includes.header')
    <body>

        @yield('content')

        @include('includes.footer')
        @yield('scripts')
    </body>
</html>
