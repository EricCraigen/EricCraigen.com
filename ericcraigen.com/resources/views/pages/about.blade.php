@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="about-wrapper">
        <div class="about-left">
            <div class="about-left-top">
                <div class="image-wrapper bounce-in-about-load">
                    <img src="/img/header--image.jpg" alt="Eric Craigen" class="about-img">
                </div>
                <div class="about-left-top-row-wrapper">
                    <div class="about-left-top-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-briefcase" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        <div class="about-left-top-info gelatine-about-load">
                            Full Stack Software Developer
                        </div>
                    </div>
                    <div class="about-left-top-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-house-door" viewBox="0 0 16 16">
                            <path
                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                        </svg>
                        <div class="about-left-top-info gelatine-about-load">
                            Spokane, WA
                        </div>
                    </div>
                    <div class="about-left-top-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg>
                        <div class="about-left-top-info">
                            <a class="phone-link gelatine gelatine-about-load"
                                href="mailto:contact@ericcraigen.com">contact@ericcraigen.com</a>
                        </div>
                    </div>
                    <div class="about-left-top-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-phone" viewBox="0 0 16 16">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <div class="about-left-top-info">
                            <a class="phone-link gelatine gelatine-about-load" href="tel:5092942930">(509) 294-2930</a>
                        </div>
                    </div>

                    <div class="about-left-dotted-hr">&nbsp;</div>

                    <div class="about-left-top-contact-social-links">
                        <a class="btn btn-outline-dark btn-floating m-1 gelatine hithere-about-load" href="#"
                            role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Google Account"><i
                                class="fab fa-google"></i></a>

                        <a class="btn btn-outline-dark btn-floating m-1 gelatine hithere-about-load"
                            href="https://github.com/EricCraigen" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="GitHub Profile" role="button" target="blank"><i class="fab fa-github"></i></a>

                        <a class="btn btn-outline-dark btn-floating m-1 gelatine hithere-about-load"
                            href="https://www.linkedin.com/in/eric-craigen/" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="LinkedIn Profile" role="button" target="blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>

                <div class="about-left-bottom-row-wrapper">

                    <div class="about-left-bottom-row first-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-trophy" viewBox="0 0 16 16">
                            <path
                                d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z" />
                        </svg>
                        <div class="about-left-bottom-info">
                            AAS, Computer Science <br />
                            Spokane Community College
                        </div>
                    </div>

                    <div class="about-left-dotted-hr">&nbsp;</div>

                    <div class="about-left-bottom-row first-row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-gear spin-about-load" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg>
                        <div class="about-left-bottom-info font-1point75rem">
                            Skills
                        </div>
                    </div>

                    <div class="about-left-bottom-row">

                        @php
                            $skillPercentages = ['88%', '75%', '90%', '70%', '65%', '90%'];
                        @endphp

                        <div class="about-left-bottom-skill-wrapper">
                            <div class="about-left-bottom-skill-name">
                                PHP &amp; Laravel
                            </div>
                            <div class="about-left-bottom-skill-progress-bar">
                                &nbsp;
                            </div>
                            <div class="about-left-bottom-skill-progress-bar-filler grow-about-load"
                                style="width: {{ $skillPercentages[0] }};">
                                88%
                            </div>
                        </div>

                        <div class="about-left-bottom-skill-wrapper">
                            <div class="about-left-bottom-skill-name">
                                React &amp; JavaScript
                            </div>
                            <div class="about-left-bottom-skill-progress-bar">
                                &nbsp;
                            </div>
                            <div class="about-left-bottom-skill-progress-bar-filler grow-about-load"
                                style="width: {{ $skillPercentages[1] }};">
                                75%
                            </div>
                        </div>

                        <div class="about-left-bottom-skill-wrapper">
                            <div class="about-left-bottom-skill-name">
                                Bootstrap, jQuery, &amp; CSS3
                            </div>
                            <div class="about-left-bottom-skill-progress-bar">
                                &nbsp;
                            </div>
                            <div class="about-left-bottom-skill-progress-bar-filler grow-about-load"
                                style="width: {{ $skillPercentages[2] }};">
                                90%
                            </div>
                        </div>

                        <div class="about-left-bottom-skill-wrapper">
                            <div class="about-left-bottom-skill-name">
                                UI/UX
                            </div>
                            <div class="about-left-bottom-skill-progress-bar">
                                &nbsp;
                            </div>
                            <div class="about-left-bottom-skill-progress-bar-filler grow-about-load"
                                style="width: {{ $skillPercentages[3] }};">
                                70%
                            </div>
                        </div>

                        <div class="about-left-bottom-skill-wrapper">
                            <div class="about-left-bottom-skill-name">
                                Android &amp; Kotlin
                            </div>
                            <div class="about-left-bottom-skill-progress-bar">
                                &nbsp;
                            </div>
                            <div class="about-left-bottom-skill-progress-bar-filler grow-about-load"
                                style="width: {{ $skillPercentages[4] }};">
                                65%
                            </div>
                        </div>

                        <div class="about-left-bottom-skill-wrapper">
                            <div class="about-left-bottom-skill-name">
                                Azure DevOps &amp; GitHub
                            </div>
                            <div class="about-left-bottom-skill-progress-bar">
                                &nbsp;
                            </div>
                            <div class="about-left-bottom-skill-progress-bar-filler grow-about-load"
                                style="width: {{ $skillPercentages[5] }};">
                                90%
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="about-right">

            <div class="about-right-work-history-wrapper">
                <div class="about-right-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-signpost-split" viewBox="0 0 16 16">
                        <path
                            d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z" />
                    </svg>
                    <div class="about-right-header-text">
                        Work Experience
                    </div>
                </div>

                <div class="about-right-work-histories">

                    <div class="work-history bounce-in-right-about-load">

                        <div class="work-history-top">

                            AAS, Computer Science / Spokane Community College<br />
                            <span class="font-lighter">Full Stack Software Development / 3.5 GPA</span>

                        </div>

                        <div class="work-history-date">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>

                            <div class="work-history-dates">

                                September 2019 – June 2021

                            </div>

                        </div>

                        <ul class="work-history-descriptions">

                            <li class="work-history-description">
                                Designed back-end systems utilizing Object Relational Models as well as raw SQL queries
                                that were sent, validated, and received via efficient http requests to and from a
                                multi-table database with multiple joins across many of the tables to create a
                                responsive and fluid user experience between the front and back end of the applications
                            </li>

                            <li class="work-history-description">
                                Developed skills in building device responsive front end web applications in multiple
                                languages and frameworks
                            </li>

                            <li class="work-history-description">
                                Produced three full stack eCommerce web applications utilizing ReactJS, NodeJS, and PHP
                                Laravel
                            </li>

                            <li class="work-history-description">
                                Programmed a full stack PHP Laravel web application in a small group utilizing Azure
                                DevOps and git for version control through all stages of the development lifecycle
                            </li>

                        </ul>

                    </div>

                    <div class="work-history bounce-in-right-about-load">

                        <div class="work-history-top">

                            AAS, Computer Science / Central Ohio Technical College<br />
                            <span class="font-lighter">Full Stack Web Development / (no degree obtained)</span>

                        </div>

                        <div class="work-history-date">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>

                            <div class="work-history-dates">

                                September 2017 – April 2018

                            </div>

                        </div>

                        <ul class="work-history-descriptions">

                            <li class="work-history-description">
                                Learned basics of HTML5 and CSS3, Computer Math principles, and Object-
                                Oriented Programming
                            </li>

                            <li class="work-history-description">
                                Developed many web applications with PHP and Apache server (locally) in
                                order to complete weekly assignments
                            </li>

                            <li class="work-history-description">
                                Produced one full stack PHP web application complete with a MySql
                                database that utilized CRUD operations to allow a user to add, edit and
                                delete records
                            </li>

                        </ul>

                    </div>

                    <div class="work-history bounce-in-right-about-load">

                        <div class="work-history-top">

                            United States Marine Corps - MCAS Beaufort, SC<br />
                            <span class="font-lighter">Staff Sergeant - Intelligence Analyst SNCOIC</span>

                        </div>

                        <div class="work-history-date">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>

                            <div class="work-history-dates">

                                May 2014 – April 2017

                            </div>

                        </div>

                        <ul class="work-history-descriptions">

                            <li class="work-history-description">
                                Mentored and trained five junior analysts in career advancement and becoming a better
                                intelligence analyst through the application of various techniques in producing quality
                                all source fusion analysis
                            </li>

                            <li class="work-history-description">
                                Produced and disseminated daily intelligence summaries to the entire organization of
                                over 230 employees via email and printouts to increase awareness of current events and
                                organizational events
                            </li>

                            <li class="work-history-description">
                                Developed pre-op briefs for customers in order to reduce uncertainty in the
                                decision-making process of mission planning and disseminated these briefs orally with MS
                                PowerPoints as visual aide
                            </li>

                        </ul>

                    </div>

                    <div class="work-history bounce-in-right-about-load">

                        <div class="work-history-top">

                            United States Marine Corps - MCAS Miramar, CA <br />
                            <span class="font-lighter">Corporal - Individual Material Readiness List Asset
                                Manager</span>

                        </div>

                        <div class="work-history-date">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>

                            <div class="work-history-dates">

                                April 2009 – April 2014

                            </div>

                        </div>

                        <ul class="work-history-descriptions">

                            <li class="work-history-description">
                                Inventoried, tracked, and maintained over 850 Individual serialized assets totaling over
                                $1,000,000
                            </li>

                            <li class="work-history-description">
                                Maintained Support Equipment Preventative Maintenance record jackets on over 300
                                calibrated assets to ensure mission ready assets to maintenance
                            </li>

                            <li class="work-history-description">
                                Conducted 100% physical inventories monthly, quarterly, and annually to ensure accurate
                                reporting of asset locations
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>

<script type="text/javascript">
    $(function() {

        window.setTimeout(function() {
            $('.bounce-in-right-about-load').css('opacity', 1);
        }, 1500);

        window.setTimeout(function() {
            $('.hithere-about-load').removeClass('hithere-about-load');
            $('.gelatine-about-load').removeClass('gelatine-about-load');
            $('.spin-about-load').removeClass('spin-about-load');
            $('.spin-about-load').removeClass('grow-about-load');

        }, 2000);

    });

</script>
