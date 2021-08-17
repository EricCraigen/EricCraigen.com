@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="projects-landing-section ">

        <div class="accordion-wrapper">

            <section class="projects-accordion">

                @foreach ($projects as $project)
                    <x-projectCard cardIndex="{{ $project['cardIndex'] }}"
                        projectName="{{ $project['projectName'] }}" projectURL="{{ $project['projectURL'] }}"
                        minifiedBackgroundImage="{{ $project['minifiedBackgroundImage'] }}"
                        gitHubRepoURL="{{ $project['gitHubRepoURL'] }}"
                        toolTipString="{{ $project['toolTipString'] }}"
                        toolTipIconClassNameString="{{ $project['toolTipIconClassNameString'] }}"
                        projectOverlay="{{ $project['projectOverlay'] }}" projectGIF="{{ $project['projectGIF'] }}"
                        contributorsNameString="{{ $project['contributorsNameString'] }}"
                        contributorsLinkString="{{ $project['contributorsLinkString'] }}"
                        subProjectsNameString1="{{ $project['subProjectsNameString1'] }}"
                        subProjectsNameString2="{{ $project['subProjectsNameString2'] }}"
                        gitHubRepoURLString="{{ $project['gitHubRepoURLString'] }}"
                        contributionsString="{{ $project['contributionsString'] }}"
                        projectDescriptionString="{{ $project['projectDescriptionString'] }}"
                        projectOverlayAlt="{{ $project['projectOverlayAlt'] }}"
                        projectGIFAlt="{{ $project['projectGIFAlt'] }}" />
                @endforeach

            </section>

            {{-- {{ $projects->links() }} --}}

        </div>

    </div>

</x-app-layout>

<script type="text/javascript">
    let prevIndex = 1;
    let currentCardScrollHeight = 0;

    $(function() {

        $('#project-head-minified-wrapper1').css('background-image', 'url(' + $(
            '#project-head-minified-wrapper1').data('background-url') + ')');
        $('#project-head-minified-wrapper2').css('background-image', 'url(' + $(
            '#project-head-minified-wrapper2').data('background-url') + ')');
        $('#project-head-minified-wrapper3').css('background-image', 'url(' + $(
            '#project-head-minified-wrapper3').data('background-url') + ')');
        $('#project-head-minified-wrapper4').css('background-image', 'url(' + $(
            '#project-head-minified-wrapper4').data('background-url') + ')');
        $('#project-head-minified-wrapper5').css('background-image', 'url(' + $(
            '#project-head-minified-wrapper5').data('background-url') + ')');

        window.setTimeout(function() {
            $('.projects-section').css('opacity', '1');
        }, 2000);

        $('.projects-div').addClass('default');
        $('.projects-div').addClass('cursor-pointer');
        $('.project-expand-wrapper').addClass('d-none');
        $('#project1').removeClass('cursor-pointer');
        $('#project-head-minified1').addClass('d-none');
        $('#project-head-minified-wrapper1').addClass('d-none');
        $('#project-expand-wrapper1').removeClass('d-none');

        $('.projects-div').on('click', function() {

            if ($(this).data('index') == prevIndex) {
                return;
            }
            let currentIndex = $(this).data('index');
            let addCursor = '#project' + prevIndex;
            let delayedRemoveExpandProject = '#project' + currentIndex;
            let addMinifiedHeadWrapper = '#project-head-minified-wrapper' + prevIndex;
            let addMinifiedHead = '#project-head-minified' + prevIndex;
            let removeMinifiedHeadWrapper = '#project-head-minified-wrapper' + currentIndex;
            let removeMinifiedHead = '#project-head-minified' + currentIndex;
            let removeExpand = '#project-expand-wrapper' + prevIndex;
            let addExpand = '#project-expand-wrapper' + currentIndex;



            $(this).removeClass('cursor-pointer');
            $(addCursor).addClass('project-wrapper-transition-width');
            $(addCursor).addClass('project-wrapper-transition-height');
            $(removeMinifiedHead).addClass('rotate-minified-project-head-onclick');
            $(removeExpand).addClass('d-none');
            $(addMinifiedHeadWrapper).removeClass('d-none');
            $(addMinifiedHead).removeClass('rotate-minified-project-head-onclick');
            $(addMinifiedHead).removeClass('d-none');

            window.setTimeout(function() {
                $(addCursor).addClass('cursor-pointer');
                $(this).removeClass('cursor-pointer');
                $(addExpand).removeClass('d-none');
                $(removeMinifiedHeadWrapper).addClass('d-none');
                $(removeMinifiedHead).addClass('d-none');
                $(addCursor).removeClass('expand');
                $(addCursor).removeClass('project-wrapper-transition-width');
                $(addCursor).removeClass('project-wrapper-transition-height');
                $("html, body").animate({
                    scrollTop: $(delayedRemoveExpandProject).position().top - 115
                }, 50);
            }, 1000);
            $(this).addClass('expand')
            prevIndex = currentIndex;
        });

        $(document).ready(function() {
            let prevWindowWidth = $(window).width();

            window.onresize = function(event) {
                let onResizeWindowWidth = $(window).width();
                let scrollToProject = $('.projects-div.expand').data('index');
                if ($(window).width() > 1100) {
                    $("html, body").animate({
                        scrollTop: top
                    }, 60);
                }
                if ($(window).width() < 1100) {
                    $("html, body").animate({
                        scrollTop: $('#project' + scrollToProject).position().top - 300
                    }, 100);
                }
            }
        });

    });

    $(function() {

        $('.project-expand-wrapper').on('scroll', function() {
            let scrollPos = this.scrollTop;
            let scrollIndicator = '#scrollIndicator' + $(this).data('index');
            let scrollUpIndicator = '#scrollUpIndicator' + $(this).data('index');
            let scrollUpIndicatorLocation = 70 + scrollPos;
            let scrollDownIndicator = '#scrollDownIndicator' + $(this).data('index');
            let scrollDownIndicatorLocation = 45 - scrollPos;
            let containerScrollHeight = $(this)[0].scrollHeight;
            let containerHeightOuter = $(this).outerHeight();
            let removeWrapperPadding = '#project-technologies-wrapper' + $(this).data(
                'index');
            currentCardScrollHeight = containerScrollHeight - containerHeightOuter;

            switch (true) {
                case (scrollPos == 0):
                    $(removeWrapperPadding).css('margin-top', '6rem');
                    $(removeWrapperPadding).removeClass('removeMarginOnScroll');
                    $(scrollIndicator).css('opacity', 1);
                    break;
                case (scrollPos <= 10):
                    $(scrollIndicator).css('opacity', 0.8);
                    break;
                case (scrollPos <= 20):
                    $(scrollIndicator).css('opacity', 0.6);
                    break;
                case (scrollPos <= 30):
                    $(scrollIndicator).css('opacity', 0.4);
                    break;
                case (scrollPos <= 40):
                    $(scrollIndicator).css('opacity', 0.2);
                    break;
                case (scrollPos <= 49):
                    $(removeWrapperPadding).css('margin-top', '6rem');
                    $(removeWrapperPadding).removeClass('removeMarginOnScroll');
                    $(scrollDownIndicator).addClass('d-none');
                    break;
                case (scrollPos >= 50):
                    $(removeWrapperPadding).css('margin-top', '1rem');
                    $(removeWrapperPadding).addClass('removeMarginOnScroll');
                    $(scrollIndicator).css('opacity', 0);
                    break;
                default:

            }

            if (scrollPos > 0) {
                $(scrollUpIndicator).css('top', scrollUpIndicatorLocation);
                $(scrollDownIndicator).css('bottom', scrollDownIndicatorLocation);
            }

            if (scrollPos == (containerScrollHeight - containerHeightOuter) && scrollPos >=
                50) {
                $(scrollDownIndicator).addClass('d-none');
            } else if (scrollPos <= 49) {
                $(scrollUpIndicator).addClass('d-none');
                $(scrollDownIndicator).addClass('d-none');
            } else {
                $(scrollUpIndicator).removeClass('d-none');
                $(scrollDownIndicator).removeClass('d-none');
            }

        });

    });


    window.setTimeout(function() {
        $('.bounce-in-top').css('opacity', 1);
    }, 2500);

    window.setTimeout(function() {
        $('.projects-div').removeClass('bounce-in-top');
    }, 6000);

    $(function() {

        $('.mouse-icon').on('click', function() {
            let currentContainerScrollPos = '#project-expand-wrapper' + $(this).data(
                'index');
            let scrollPos = $(currentContainerScrollPos).scrollTop(400);
        });

    });

    $(function() {

        $('.scroll-up').on('click', function() {
            let currentContainerScrollToBottom = '#project-expand-wrapper' + $(this).data(
                'index');
            let scrollBottom = $(currentContainerScrollToBottom).scrollTop(0);
        });

    });

    $(function() {

        $('.scroll-down').on('click', function() {
            let currentContainerScrollToBottom = '#project-expand-wrapper' + $(this).data(
                'index');
            let scrollBottom = $(currentContainerScrollToBottom).scrollTop(
                currentCardScrollHeight);
        });

    });

</script>
