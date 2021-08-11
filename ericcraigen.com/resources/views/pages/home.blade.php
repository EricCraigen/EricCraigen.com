@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="home-section container-fluid">
        <h1 class="hero">
            Full Stack Software Developer
        </h1>

        <div class="home-body">
            <div class="home-gifs-container">
                <div class="mac-overlay-container">
                    <img class="mac-overlay-gif" src="/img/project-gifs/RT-admin-repairs.gif"
                        alt="RecycleTechs Gif #1" />
                    <img class="mac-overlay-overlay" src="img/overlay/mac-overlay.png" alt="Mac Overlay" />
                    <div class="mac-overlay-shadows"></div>
                </div>
                <div class="tablet-overlay-container">
                    <img class="tablet-overlay-gif" src="/img/project-gifs/tablet-home.gif"
                        alt="RecycleTechs Tablet Gif #1" />
                    <img class="tablet-overlay-overlay" src="img/overlay/tablet-overlay.png" alt="Tablet Overlay" />
                    <div class="tablet-overlay-shadows"></div>
                </div>
                <div class="phone-overlay-container">
                    <img class="phone-overlay-gif" src="/img/project-gifs/phone-home.gif"
                        alt="RecycleTechs Phone Gif #1" />
                    <img class="phone-overlay-overlay" src="img/overlay/android-phone-overlay.png"
                        alt="Phone Overlay" />
                    <div class="phone-overlay-shadows"></div>

                </div>

            </div>
            <div class="home-featured-projects d-flex w-100 justify-content-center">
                <div class="box-container">

                    @foreach ($projects as $project)

                        <x-home-featured-projects cardIndex="{{ $project['cardIndex'] }}"
                            featuredProject="{{ $project['featuredProject'] }}"
                            featuredProjectFrontDescriptionString="{{ $project['featuredProjectFrontDescriptionString'] }}"
                            featuredProjectBackDescriptionString="{{ $project['featuredProjectBackDescriptionString'] }}"
                            projectName="{{ $project['projectName'] }}" projectURL="{{ $project['projectURL'] }}"
                            minifiedBackgroundImage="{{ $project['minifiedBackgroundImage'] }}"
                            gitHubRepoURL="{{ $project['gitHubRepoURL'] }}"
                            toolTipString="{{ $project['toolTipString'] }}"
                            toolTipIconClassNameString="{{ $project['toolTipIconClassNameString'] }}"
                            projectOverlay="{{ $project['projectOverlay'] }}"
                            projectGIF="{{ $project['projectGIF'] }}"
                            contributorsNameString="{{ $project['contributorsNameString'] }}"
                            subProjectsNameString1="{{ $project['subProjectsNameString1'] }}"
                            subProjectsNameString2="{{ $project['subProjectsNameString2'] }}"
                            gitHubRepoURLString="{{ $project['gitHubRepoURLString'] }}"
                            contributionsString="{{ $project['contributionsString'] }}"
                            projectDescriptionString="{{ $project['projectDescriptionString'] }}"
                            projectOverlayAlt="{{ $project['projectOverlayAlt'] }}"
                            projectGIFAlt="{{ $project['projectGIFAlt'] }}" />

                    @endforeach

                </div>
            </div>

        </div>

    </div>

</x-app-layout>

<script type="text/javascript">
    $(function() {

        let scrollPos = $(window).scrollTop();
        console.log(scrollPos);

        if (scrollPos > 300) {
            $('.box-item').addClass('bounce-in-right');
            window.setTimeout(function() {
                $('.box-item').css('opacity', 1);
            }, 1500);
        }

        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                $('.box-item').addClass('bounce-in-right');
                window.setTimeout(function() {
                    $('.box-item').css('opacity', 1);
                }, 1500);
            }
        });


        $('.card-flip-icon').on('click', function() {
            let index = $(this).data('index');
            let flipper = '#box-item' + index;
            let cardFlipFront = '#flip-box-front' + index;
            let cardFlipBack = '#flip-box-back' + index;
            $(flipper).data('flipped', true);
            $(cardFlipFront).addClass('flip-front-card-onClick');
            $(cardFlipBack).addClass('flip-back-card-onClick');
            $(cardFlipFront).css('transition-delay', '0.3s');
            $(cardFlipBack).css('transition-delay', '0.3s');
        });

        $('.box-item').on('mouseleave', function() {
            let index = $(this).data('index');
            let flipper = '#box-item' + index;
            let cardFlipFront = '#flip-box-front' + index;
            let cardFlipBack = '#flip-box-back' + index;
            $(cardFlipFront).removeClass('flip-front-card-onClick');
            $(cardFlipFront).css('transition-delay', '2s');
            $(cardFlipBack).removeClass('flip-back-card-onClick');
            $(cardFlipBack).css('transition-delay', '2s');
            window.setTimeout(function() {
                $(flipper).data('flipped', false);
            }, 1000);
        });

        $('.box-item').on('mouseover', function() {
            let index = $(this).data('index');
            let flipped = $(this).data('flipped');
            let cardFlipFront = '#flip-box-front' + index;
            let cardFlipBack = '#flip-box-back' + index;
            if (flipped == true) {
                $(cardFlipFront).addClass('flip-front-card-onClick');
                $(cardFlipBack).addClass('flip-back-card-onClick');
            }

        });

    });

</script>
