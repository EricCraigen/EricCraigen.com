@props(['cardIndex', 'featuredProject', 'featuredProjectFrontDescriptionString', 'featuredProjectBackDescriptionString', 'projectName', 'projectURL', 'minifiedBackgroundImage', 'gitHubRepoURL', 'toolTipString', 'toolTipIconClassNameString', 'projectOverlay', 'projectGIF', 'contributorsNameString', 'subProjectsNameString1', 'subProjectsNameString2', 'gitHubRepoURLString', 'contributionsString', 'projectDescriptionString', 'projectOverlayAlt', 'projectGIFAlt'])

@php
$toolTipTitles = explode(',', $toolTipString);
$toolTipClassNames = explode(',', $toolTipIconClassNameString);
$descriptions = explode('*', $projectDescriptionString);
unset($toolTipTitles[0]);
if ($cardIndex == 3) {
    unset($toolTipTitles[1]);
}
$toolTipCounter = 0;
$addAnimationDelay = $cardIndex / 2;
@endphp

<div class="box-item"
    style="animation-delay: {{ $addAnimationDelay }}s; -webkit-animation-delay: {{ $addAnimationDelay }}s; -moz-animation-delay: {{ $addAnimationDelay }}s; -o-animation-delay: {{ $addAnimationDelay }}s; opacity: 0;"
    id="box-item{{ $cardIndex }}" data-index="{{ $cardIndex }}" data-flipped="false">
    <div class="flip-box">
        <div class="flip-box-front" style="background-image: url('{{ $minifiedBackgroundImage }}');"
            id="flip-box-front{{ $cardIndex }}">
            <div class="inner front-border">
                <h3 class="flip-box-header front-card">{{ $projectName }}</h3>
                <p class="front-card font-1point15rem">{!! html_entity_decode($featuredProjectFrontDescriptionString) !!}</p>
                <div class="inner-icons-wrapper">
                    @foreach ($toolTipTitles as $toolTipTitle)
                        @php
                            if (!isset($toolTipClassNames[$toolTipCounter])) {
                                $toolTipClassNames[$toolTipCounter] = null;
                            }
                        @endphp
                        <div class="inner-icon">
                            <i class="{{ $toolTipClassNames[$toolTipCounter] }} front-card font-2point75rem gelatine"
                                data-bs-toggle="tooltip"
                                data-bs-placement="{{ $toolTipCounter < 4 ? 'top' : 'bottom' }}"
                                title="{{ $toolTipTitle }}"></i>
                        </div>
                        @php
                            $toolTipCounter++;
                        @endphp
                    @endforeach
                </div>

                <i class="fas fa-chevron-circle-left front-card font-3rem card-flip-icon gelatine"
                    data-index="{{ $cardIndex }}"><span></span></i>
            </div>
        </div>


        <div class="flip-box-back" style="background-image: url('{{ $minifiedBackgroundImage }}');"
            id="flip-box-back{{ $cardIndex }}">
            <div class="inner">
                <p class="back-card font-1point25rem">{!! html_entity_decode($featuredProjectBackDescriptionString) !!}</p>
                <a class="back-card flip-box-button btn btn-primary visit-project-button {{ $cardIndex == 1 || $cardIndex == 2 ? '' : 'd-none' }} gelatine"
                    href="{{ $projectURL }}">
                    {{ $projectName . '.EricCraigen.com' }}
                </a>

                <a class="back-card flip-box-button btn btn-primary visit-project-button {{ $cardIndex == 3 || $cardIndex == 4 ? '' : 'd-none' }} gelatine"
                    href="{{ $gitHubRepoURL }}">
                    GitHub Repository
                </a>
            </div>
        </div>
    </div>
</div>
