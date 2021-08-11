<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $project = new Project([
            'cardIndex' => '1',
            'featuredProject' => true,
            'featuredProjectFrontDescriptionString' => 'Is a collaborative full stack Laravel v5.8.35 web application. It serves a multitude of functions for customers and employees alike.',
            'featuredProjectBackDescriptionString' => 'This is the description for the back of the card! It will be a bit longer then the front but not quite as long as the paragraphs 
                                                       inside of the actual project cards on the projects page!',
            'projectName' => 'RecycleTechs',
            'minifiedBackgroundImage' => '/img/project-expand-background/recycleTechs-project-expand-background.jpeg',
            'projectURL' => 'https://www.recycletechs.ericcraigen.com',
            'gitHubRepoURL' => 'https://github.com/EricCraigen/recycletechs.ericcraigen.com',
            'toolTipString' => 'Visit RecycleTechs,Laravel 5.8.35,PHP 7.4,JavaScript,Font Awesome 5,HTML 5,CSS 3,BootStrap 4,MySql',
            'toolTipIconClassNameString' => 'fab fa-laravel,fab fa-php,fab fa-js-square,fab fa-font-awesome,fab fa-html5,fab fa-css3-alt,fab fa-bootstrap,fas fa-database',
            'projectOverlay' => 'img/overlay/mac-overlay.png',
            'projectOverlayAlt' => 'Mac Overlay',
            'projectGIF' => '/img/project-gifs/RT-admin-repairs.gif',
            'projectGIFAlt' => 'RecycleTechs Gif #1',
            'contributorsNameString' => 'Me,Sean Rising,Lisa Faulkner',
            'contributorsLinkString' => 'https://astraportia.com/,https://www.webidocity.com/',
            'contributionsString' => 'Frontend Development,Backend Development,Employee/Admin Portal,UI/UX,Hosting*Backend Development,Database Management,Eloquent (Object Relational<br />Mapper),Agile Meeting Manager*Login System & Features,User Account Dashboards,Repair Request Form System',
            'projectDescriptionString' => 'RecycleTechs is a full stack Laravel web-application that serves a multitude of funcitons and provides
                                            services for customers and employees of a hypothetical company that specializes in computer repairs/sales. This project is a
                                            colaboration with two other developers.
                                            *It was planned and designed using agile development techniques over the course of a ten week quarter. It is not complete, as an application of this 
                                            scale would take much more time to complete than our quarter offered, but it will continue to recieve features as they are completed.
                                            *In addition to presenting RecycleTechs to the world and offering an online store front, this
                                            application provides two additional portals for employees and administrators. Within these portals,
                                            employees of RecycleTechs have access to a myriad of features that aim to aid them in completing thier
                                            daily functions.
                                            *As this application was developed with security in mind, the afformentioned employee/admin portals are only accessible if you are logged 
                                            in as a user with elevated privlages. But that does not have to keep you from viewing them.
                                            *If you are a potential employer/customer and would like to view these portals, you can simply register for an account and
                                            send me a message from the <a class="contact-link gelatine" href="/contact">Contact Form</a> requesting access, as well as your email provided during registration. 
                                            *I will try to
                                            elevate your account to an administrator status within 24 hours of recieving your message.',
        ]);
        $project->save();

        $project = new Project([
            'cardIndex' => '2',
            'featuredProject' => true,
            'featuredProjectFrontDescriptionString' => 'Is a collaborative full stack Laravel v5.8.35 web application. It serves a multitude of functions for customers and employees alike.',
            'featuredProjectBackDescriptionString' => 'This is the description for the back of the card! It will be a bit longer then the front but not quite as long as the paragraphs 
                                                       inside of the actual project cards on the projects page!',
            'projectName' => 'Plankcooking',
            'minifiedBackgroundImage' => '/img/project-expand-background/plankcooking-project-expand-background.jpeg',
            'projectURL' => 'https://www.plankcooking.ericcraigen.com',
            'gitHubRepoURL' => 'https://github.com/EricCraigen/plankcooking.ericcraigen.com',
            'toolTipString' => 'Visit Plankcooking,Laravel 5.8.35,PHP 7.4,JavaScript,Font Awesome 5,HTML 5,CSS 3,BootStrap 4,MySql',
            'toolTipIconClassNameString' => 'fab fa-laravel,fab fa-php,fab fa-js-square,fab fa-font-awesome,fab fa-html5,fab fa-css3-alt,fab fa-bootstrap,fas fa-database',
            'projectOverlay' => 'img/overlay/mac-overlay.png',
            'projectOverlayAlt' => 'Mac Overlay',
            'projectGIF' => '/img/project-gifs/PC-home.gif',
            'projectGIFAlt' => 'Plankcooking Gif #1',
            'contributorsNameString' => 'Me',
            'subProjectsNameString1' => 'ReactJS (Reflux), ReactJS (Redux, Mirco-service),NodeJS (Monolithic),Laravel 5 (v1),Laravel 5 (Presented Here)',
            'gitHubRepoURLString' => 'https://github.com/EricCraigen/Plankcooking-ReactJS-Reflux*https://github.com/EricCraigen/Plankcooking-ReactJS-Redux*https://github.com/EricCraigen/Plankcooking-NodeJS-Monolithic*https://github.com/EricCraigen/Plankcooking-Laravel-5-v1*https://github.com/EricCraigen/plankcooking.ericcraigen.com',
            'contributionsString' => 'Frontend Development,Backend Development,Eloquent (Object Relational<br />Mapper),Database Management,Hosting',
            'projectDescriptionString' => 'Plankcooking is a website that I have come to know inside and out. I have developed it
                                           on five different occasions, with a different
                                           technology each time. The first and fourth times were with ReactJS, the second was Laravel 5, the
                                           third being with NodeJS, and the fifth and
                                           final is the one presented here; Also developed with Laravel 5.
                                           *When writing this application in ReactJS, I utilized class componenets and Reflux for
                                           store/dispatcher management in the first rendition. This version is purley front-end. 
                                           *The second was completed with functional hooks and Redux for store management. This version was also written 
                                           with a NodeJS Express server that functions as a micro-service that returns JSON. 
                                           *The Laravel versions follow fairly standard Laravel framework practices with views (blades),
                                           controllers (with Eloquent ORM for database interaction), and models. The NodeJS version is
                                           monolithic and utlizes Express, EJS Templating, and MSSql.
                                           *I have provided links to my Git repositories that contain my cooresponding Plankcooking
                                           versions. These are all development only and have never seen
                                           a live server, with the exception of the one presented here. The others are not 100% complete as these were final assignments for
                                           various classes taught by the same teacher.
                                           *His version of <a class="contact-link gelatine" href="https://www.plankcooking.com">Plankcooking</a> is alive and well on the internet and has evolved many times for him, 
                                           as it has for us. This was one of his first websites and he has utilized it as a "playground" to 
                                           teach himself new technologies as the industry evolved.
                                           *Every quarter, the final directions were the same. "Here is the sites URL, recreate my website
                                           EXACTLY using only that and the knowledge I have given you about the classes technologies."
                                           *When you re-create a webiste with nothing but the website itself to reference, you
                                           have the potential to learn a ton about how to find resources
                                           that are avaiable to you as a developer.
                                           *In my research when completing these finals I realized the people that created all of the tools, libraries, and frameworks
                                           have not only created awesome environments for us as developers to utilize in order to create
                                           safe, secure, and efficient websites in a flash. 
                                           *They have also provided excellent documentation
                                           as reference to impliment features in every facet, and not just how the slick stack
                                           overflow example showed you it can maybe work for your specific application.',
        ]);
        $project->save();

        $project = new Project([
            'cardIndex' => '3',
            'featuredProject' => true,
            'featuredProjectFrontDescriptionString' => 'Is a collaborative full stack Laravel v5.8.35 web application. It serves a multitude of functions for customers and employees alike.',
            'featuredProjectBackDescriptionString' => 'This is the description for the back of the card! It will be a bit longer then the front but not quite as long as the paragraphs 
                                                       inside of the actual project cards on the projects page!',
            'projectName' => 'Mobile Apps',
            'minifiedBackgroundImage' => '/img/project-expand-background/mobile-apps-project-expand-background.jpeg',
            'gitHubRepoURL' => 'https://github.com/EricCraigen/Mobile-Applications',
            'toolTipString' => 'Where are my spare parts?,Open Movie Database Application,Android Studio 4.1.3',
            'toolTipIconClassNameString' => 'fab fa-android',
            'projectOverlay' => 'img/overlay/android-phone-overlay.png',
            'projectOverlayAlt' => 'Android Phone Overlay',
            'projectGIF' => '/img/project-gifs/CRUDAPI.gif*/img/project-gifs/OMDBApi.gif',
            'projectGIFAlt' => 'CRUD API Gif #1*OMBD API Gif #1',
            'contributorsNameString' => 'Me',
            'subProjectsNameString1' => 'Mobile Dev I Course Assignments,Dice Roller,Time Fighter,PIG Dice Rolling Game (v1),PIG DRG (Localization),PIG DRG (Save State)',
            'subProjectsNameString2' => 'Mobile Dev II Course Assignments,PIG Dice Rolling Game,Where are my spare parts? (CRUD),Where are my spare parts? (API Integration),Open Movie Database Final Project',
            'gitHubRepoURLString' => 'https://github.com/EricCraigen/Mobile-Applications',
            'contributionsString' => 'Frontend Development,Backend Development,Eloquent (Object Relational Mapping),Database Management,Hosting',
            'projectDescriptionString' => 'Please pardon my dust...
                                           *
                                           *Project Descriptions are inbound!',
        ]);
        $project->save();

        $project = new Project([
            'cardIndex' => '4',
            'featuredProject' => false,
            'featuredProjectFrontDescriptionString' => 'Is a collaborative full stack Laravel v5.8.35 web application. It serves a multitude of functions for customers and employees alike.',
            'featuredProjectBackDescriptionString' => 'This is the description for the back of the card! It will be a bit longer then the front but not quite as long as the paragraphs 
                                                       inside of the actual project cards on the projects page!',
            'projectName' => 'Console Apps',
            'minifiedBackgroundImage' => '/img/project-expand-background/console-apps-project-expand-background.jpeg',
            'gitHubRepoURL' => 'https://github.com/EricCraigen/Console-Applications',
            'toolTipString' => 'Puzzle TDD Console Application,IntelliJ (Kotlin)',
            'toolTipIconClassNameString' => 'fas fa-brain',
            'projectOverlay' => 'img/overlay/mac-overlay.png',
            'projectOverlayAlt' => 'Mac Overlay',
            'projectGIF' => '/img/project-gifs/PuzzleTDD.gif',
            'projectGIFAlt' => 'PuzzleTDD Gif #1',
            'contributorsNameString' => 'Me',
            'subProjectsNameString1' => 'Programming Principles I Course Assignments,Acronym,Center String,Coins,Hash Maps,Histogram,Leap Years Calculator,Payroll Calculator,Reverse Digit,Rock Paper Scissors,Triangle,Course Header',
            'subProjectsNameString2' => 'Programming Principles II Course Assignments,Book Main,Character Fight,Check Writer,RegEx Text Search,Various Classes,Word Search Final Project',
            'gitHubRepoURLString' => 'https://github.com/EricCraigen/Console-Applications',
            'contributionsString' => 'Frontend Development,Backend Development,Eloquent (Object Relational Mapping),Database Management,Hosting',
            'projectDescriptionString' => 'Please pardon my dust...
                                           *
                                           *Project Descriptions are inbound!',
        ]);
        $project->save();

        $project = new Project([
            'cardIndex' => '5',
            'featuredProject' => false,
            'featuredProjectFrontDescriptionString' => 'Is a collaborative full stack Laravel v5.8.35 web application. It serves a multitude of functions for customers and employees alike.',
            'featuredProjectBackDescriptionString' => 'This is the description for the back of the card! It will be a bit longer then the front but not quite as long as the paragraphs 
                                                       inside of the actual project cards on the projects page!',
            'projectName' => 'Game Dev',
            'minifiedBackgroundImage' => '/img/project-expand-background/game-dev-project-expand-background.jpeg',
            'gitHubRepoURL' => 'https://github.com/EricCraigen/Mobile-Applications',
            'toolTipString' => '2D Top Down Inspiration,Laravel 8,PHP 7.4,JavaScript,Font Awesome 6,HTML 5,CSS 3,BootStrap 5,MySql',
            'toolTipIconClassNameString' => 'fab fa-laravel,fab fa-php,fab fa-js-square,fab fa-font-awesome,fab fa-html5,fab fa-css3-alt,fab fa-bootstrap,fas fa-database',
            'projectOverlay' => 'img/overlay/mac-overlay.png',
            'projectOverlayAlt' => 'Mac Overlay',
            'projectGIF' => '/img/project-gifs/Game-Dev.gif',
            'projectGIFAlt' => 'GameDev Gif #1',
            'contributorsNameString' => 'Me',
            // 'contributorsLinkString' => '#,#',
            'contributionsString' => 'Frontend Development,Backend Development,Eloquent (Object Relational Mapping),Database Management,Hosting',
            'projectDescriptionString' => 'Please pardon my dust...
                                           *
                                           *Project Descriptions are inbound!',
        ]);
        $project->save();

    }
}
