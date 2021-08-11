@props(['cardIndex', 'projectName', 'projectURL', 'minifiedBackgroundImage', 'gitHubRepoURL', 'toolTipString', 'toolTipIconClassNameString', 'projectOverlay', 'projectGIF', 'contributorsNameString', 'contributorsLinkString', 'subProjectsNameString1', 'subProjectsNameString2', 'gitHubRepoURLString', 'contributionsString', 'projectDescriptionString', 'projectOverlayAlt', 'projectGIFAlt'])

@php
$addAnimationDelay = $cardIndex / 2;
@endphp

<div class="projects-div {{ $cardIndex == 1 ? 'expand' : '' }} bounce-in-top" data-index="{{ $cardIndex }}"
    style="animation-delay: {{ $addAnimationDelay }}s; -webkit-animation-delay: {{ $addAnimationDelay }}s; -moz-animation-delay: {{ $addAnimationDelay }}s; -o-animation-delay: {{ $addAnimationDelay }}s; opacity: 0;"
    id="project{{ $cardIndex }}">

    <div class="project-minified-wrapper" id="project-head-minified-wrapper{{ $cardIndex }}"
        data-background-url="{{ $minifiedBackgroundImage }}">

        <h1 class="project-head-minified " id="project-head-minified{{ $cardIndex }}">
            {{ $projectName }}
        </h1>

    </div>

    <div class="project-expand-wrapper p-3" id="project-expand-wrapper{{ $cardIndex }}"
        data-index="{{ $cardIndex }}">

        <div class="mouse" id="scrollIndicator{{ $cardIndex }}">

            <div class="mouse-icon" data-index="{{ $cardIndex }}">
                <span class="mouse-wheel"></span>
            </div>

        </div>

        <div class="scroll-up d-none" id="scrollUpIndicator{{ $cardIndex }}" data-index="{{ $cardIndex }}">

            <span></span>
            <span></span>
            <span></span>

        </div>

        <div class="scroll-down d-none" id="scrollDownIndicator{{ $cardIndex }}" data-index="{{ $cardIndex }}">

            <span></span>
            <span></span>
            <span></span>

        </div>

        @php
            $toolTipTitles = explode(',', $toolTipString);
            $toolTipClassNames = explode(',', $toolTipIconClassNameString);
        @endphp

        <div class="project-head">

            <h1 class="m-0 p-0">
                {{ $projectName }}
            </h1>

        </div>
        @if ($projectOverlay == 'img/overlay/mac-overlay.png')

            <div class="project-mac-wrapper">

                <a href="{{ $projectURL }}">
                    <div class="mac-overlay-container-project" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="{{ $toolTipTitles[0] }}">

                        <img class="mac-overlay-gif-project" src="{{ $projectGIF }}" alt="{{ $projectGIFAlt }}" />
                        <img class="mac-overlay-overlay-project" src="{{ $projectOverlay }}"
                            alt="{{ $projectOverlayAlt }}" />
                        <div class="mac-overlay-shadows-project"></div>

                    </div>
                </a>

            </div>

            @php
                unset($toolTipTitles[0]);
            @endphp

        @endif

        @if ($projectOverlay == 'img/overlay/android-phone-overlay.png')

            @php
                $projectGIFs = explode('*', $projectGIF);
                $projectGIFAlts = explode('*', $projectGIFAlt);
            @endphp

            <div class="d-flex justify-content-around">

                <div class="project-phone-wrapper">
                    <div class="phone-overlay-container-project" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="{{ $toolTipTitles[0] }}">
                        <img class="phone-overlay-gif-project" src="{{ $projectGIFs[0] }}"
                            alt="{{ $projectGIFAlts[0] }}" />
                        <img class="phone-overlay-overlay-project" src="{{ $projectOverlay }}"
                            alt="{{ $projectOverlayAlt }}" />
                        <div class="phone-overlay-shadows-project"></div>
                    </div>
                </div>

                <div class="project-phone-wrapper">
                    <div class="phone-overlay-container-project" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="{{ $toolTipTitles[1] }}">
                        <img class="phone-overlay-gif-project" src="{{ $projectGIFs[1] }}"
                            alt="{{ $projectGIFAlts[1] }}" />
                        <img class="phone-overlay-overlay-project" src="{{ $projectOverlay }}"
                            alt="{{ $projectOverlayAlt }}" />
                        <div class="phone-overlay-shadows-project"></div>
                    </div>
                </div>

                @php
                    unset($toolTipTitles[0]);
                    unset($toolTipTitles[1]);
                @endphp

            </div>

        @endif



        <div class="project-technologies-wrapper" id="project-technologies-wrapper{{ $cardIndex }}">

            <h6 class="project-technologies-head">
                Developed with:
            </h6>

            <div
                class="project-tecnologies-icons-wrapper {{ $projectOverlay == 'img/overlay/android-phone-overlay.png' || $cardIndex == 4 ? 'justify-content-start' : 'justify-content-around' }}">

                @php
                    $toolTipCounter = 0;
                @endphp

                @foreach ($toolTipTitles as $toolTipTitle)

                    <i class="{{ $toolTipClassNames[$toolTipCounter] }} gelatine" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="{{ $toolTipTitle }}"></i>

                    @php
                        $toolTipCounter++;
                    @endphp

                @endforeach

            </div>

        </div>

        <div class="project-description">

            @php
                $descriptions = explode('*', $projectDescriptionString);
            @endphp

            @foreach ($descriptions as $description)

                <p>
                    {!! html_entity_decode($description) !!}
                </p>

            @endforeach

        </div>
        @if ($cardIndex == 1)

            <div class="project-footer-wrapper">

                <div class="project-contributors-list">

                    @php
                        $contributors = explode(',', $contributorsNameString);
                        $contributorsLinks = explode(',', $contributorsLinkString);
                        $contributions = explode('*', $contributionsString);
                        $myContributions = explode(',', $contributions[0]);
                        if (count($contributors) > 1) {
                            $mikesContributions = explode(',', $contributions[1]);
                            $lisasContributions = explode(',', $contributions[2]);
                        }
                    @endphp

                    <h3>
                        Project Contributions
                    </h3>

                    @foreach ($contributors as $contributor)

                        <div class="project-contributor">

                            <div class="project-contributor-left">

                                <h5 class="project-contributor-name">
                                    {{ $contributor }}
                                </h5>

                                <ul class="project-contributor-contributions">

                                    @if ($loop->index == 0)

                                        @foreach ($myContributions as $contribution)

                                            <li>{{ html_entity_decode($contribution) }}</li>

                                        @endforeach

                                </ul>

                            </div>

                            <div class="project-contributor-right">

                                <div class="project-button">

                                    <a class="btn btn-primary {{ $projectOverlay == 'img/overlay/android-phone-overlay.png' ? 'd-none' : '' }} gelatine"
                                        href="{{ $gitHubRepoURL }}">Github Repository</a>

                    @endif

                    @if ($loop->index == 1)

                        @foreach ($mikesContributions as $contribution)

                            <li>{!! html_entity_decode($contribution) !!}</li>

                        @endforeach

                        </ul>

                </div>

                <div class="project-contributor-right">

                    <div class="project-button">

                        <a class="btn btn-primary gelatine" href="{{ $contributorsLinks[0] }}">Mike's Portfolio</a>

        @endif

        @if ($loop->index == 2)

            @foreach ($lisasContributions as $contribution)

                <li>{!! html_entity_decode($contribution) !!}</li>

            @endforeach

            </ul>

    </div>

    <div class="project-contributor-right">

        <div class="project-button">

            <a class="btn btn-primary gelatine" href="{{ $contributorsLinks[1] }}">Lisa's Portfolio</a>

            @endif

        </div>

    </div>

</div>

@endforeach

</div>

@else

<div class="project-footer-wrapper">

    <div class="project-github-repos w-100">

        @php
            $subProjects1 = explode(',', $subProjectsNameString1);
            $subProjects2 = explode(',', $subProjectsNameString2);
            $gitHubURLs = explode('*', $gitHubRepoURLString);
        @endphp

        <h3 class="{{ $cardIndex == 5 ? 'd-none' : '' }}">
            GitHub Repositories
        </h3>

        <div class="project-github-repo w-100">

            @if ($cardIndex == 2)
                <div class="project-github-repo-upper">

                    @foreach ($subProjects1 as $subProject)

                        <h5>{{ $subProject }}</h5>

                    @endforeach

            @endif

            @if ($cardIndex > 2)
                <div class="project-github-repo-upper w-100">

                    <h5>{{ $subProjects1[0] }}</h5>

                    @php
                        unset($subProjects1[0]);
                    @endphp

                    <div class="project-github-repo-subProjects-list">

                        <ul>

                            @foreach ($subProjects1 as $subProject)

                                <li class="project-github-repo-subProjects-list-item">

                                    {{ $subProject }}

                                </li>

                            @endforeach

                        </ul>

                    </div>

                    <h5>{{ $subProjects2[0] }}</h5>

                    @php
                        unset($subProjects2[0]);
                    @endphp

                    <div class="project-github-repo-subProjects-list">

                        <ul>

                            @foreach ($subProjects2 as $subProject)

                                <li class="project-github-repo-subProjects-list-item">

                                    {{ $subProject }}

                                </li>

                            @endforeach

                        </ul>

                    </div>

            @endif

        </div>

        @if ($cardIndex == 2)

            <div class="project-github-repo-lower">

                @foreach ($gitHubURLs as $gitHubURL)

                    <a class="btn btn-primary gelatine" href="{{ $gitHubURL }}">Github Repository</a>

                @endforeach

            </div>

        @endif

    </div>

</div>

@endif

</div>

<div class="project-footer-buttons">

    <div class="project-footer-button">

        <a class="btn btn-primary visit-project-button gelatine {{ $cardIndex == 1 || $cardIndex == 2 ? '' : 'd-none' }}"
            href="{{ $projectURL }}">
            {{ $projectName . '.EricCraigen.com' }}
        </a>

        <a class="btn btn-primary visit-project-button gelatine {{ $cardIndex == 3 || $cardIndex == 4 ? '' : 'd-none' }}"
            href="{{ $gitHubRepoURL }}">
            GitHub Repository
        </a>

    </div>

</div>

</div>

</div>
