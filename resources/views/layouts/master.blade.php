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


        <script>
            $('.top_apps').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
                ]
            });
            $('.top_members').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
                ]
            });
        </script>
    </body>
</html>
