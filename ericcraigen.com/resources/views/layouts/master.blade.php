<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }}
        @endisset
    </title>

    <link rel="icon" href="/img/ericcraigen-com-favico.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- CSS imports -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/layout/global.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/layout/header.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/layout/footer.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/components/contactMeForm.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/login-registerForm.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/verify-email-form.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/forgot-password-form.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/reset-password-form.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/errorToolTip.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/home-featured-projects.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/adminDashboard.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/pages/home.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/pages/about.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/pages/contact.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/pages/projects/landingPad.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/pages/projects/web-dev/landingPad.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/pages/projects/mob-dev/landingPad.css') }}" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="container-fluid" id="bodyScroll">
    @include('layout.header')

    <div class="main-scroll-up d-none" id="mainScrollUpIndicator1" data-index="1">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="main-scroll-down d-none" id="mainScrollDownIndicator1"
        data-current-route="{{ Route::currentRouteName() }}">
        <span></span>
        <span></span>
        <span></span>
    </div>

    {{-- {{ Session::getId() }} --}}

    <main id="mainContainer">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/66a795f106.js" crossorigin="anonymous"></script>

    <!-- JavaScript imports -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    </script>

    <script type="text/javascript" src="/js/validation/validationStyling.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif

    </script>
    <script type="text/javascript">
        let currentBodyScrollPos = 0;
        let currentDocHeight = 0;
        let currentWindowHeight = 0;
        let currentRouteName = $('#mainScrollDownIndicator1').data('current-route');

        let mainContainerHeight = $('#mainContainer').innerHeight();
        let viewportHeight = document.documentElement.clientHeight;
        let windowScrollPos = $(document).scrollTop();
        let mainContainerScrolPos = $('#mainContainer').scrollTop();
        let scrollDownIndicatorLocationOnLoad = mainContainerHeight - viewportHeight + windowScrollPos;
        let docLoaded = $('.navbar').data('doc-loaded');

        $('#mainScrollDownIndicator1').css('bottom', mainContainerHeight);

        $(function() {


            $(window).on('scroll', function() {
                let bodyScrollPos = $(document).scrollTop();
                let docHeight = $(document).height();
                let windowHeight = $(window).height();
                let scrollToBottom = docHeight - (bodyScrollPos + windowHeight);
                let mainScrollUpIndicatorLocation = 140 + bodyScrollPos;
                let mainScrollDownIndicatorLocation = 40 + scrollToBottom;
                currentBodyScrollPos = bodyScrollPos;
                console.log(bodyScrollPos + ", " + scrollToBottom);

                $('#mainScrollUpIndicator1').css('top', mainScrollUpIndicatorLocation);
                if (scrollToBottom >= 179) {
                    $('#mainScrollDownIndicator1').css('bottom', mainScrollDownIndicatorLocation);
                } else {
                    $('#mainScrollDownIndicator1').css('bottom', 225);
                }


                if (bodyScrollPos <= 0) {
                    $('#mainScrollUpIndicator1').addClass('d-none');
                } else {
                    $('#mainScrollUpIndicator1').removeClass('d-none');
                }

                if (scrollToBottom == 0) {
                    $('#mainScrollDownIndicator1').addClass('d-none');
                } else {
                    $('#mainScrollDownIndicator1').removeClass('d-none');
                }

            });



        });

        $(function() {

            $('.main-scroll-up').on('click', function() {
                $('body, html').scrollTop(0);
            });

            $('.main-scroll-down').on('click', function() {
                let bodyHeight = $('body').outerHeight();
                $('body, html').scrollTop(bodyHeight);
            });

        });


        $(function() {

            $('.navbar-brand').on('mouseover', function() {

            });

        });

    </script>
</body>

</html>
