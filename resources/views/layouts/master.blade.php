<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- meta --}}
        @include('layouts.partials.meta')

        {{-- styles --}}
        @include('layouts.partials.styles')

        @stack('styles')
    </head>
    <body id="page-top position-relative">

        {{-- navbar --}}
        @include('layouts.partials.navbar')

        {{-- main content --}}

        @yield('content')

        {{-- end main content --}}

        {{-- footer --}}
        @include('layouts.partials.footer')


        {{-- suggestion box --}}
        @include('layouts.partials.suggestion_box')

        {{-- scripts --}}
        @include('layouts.partials.scripts')
        @stack('scripts')


    </body>
</html>
