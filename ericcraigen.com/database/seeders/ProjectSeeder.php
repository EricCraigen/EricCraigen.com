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
            'featuredProjectFrontDescriptionString' => 'A collaborative full stack Laravel 5 web application that serves a multitude of functions for customers and employees alike.',
            'featuredProjectBackDescriptionString' => 'RecycleTechs is very much intended to be modeled as Software as a Service. Offering not only a store front and online presence for a hypothetical company, it was developed with employees in mind. Employees can complete a multitude of funcitions to aid in completing daily functions, as well as collecting performance metrics on items such as sales.',
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
            'featuredProjectFrontDescriptionString' => '<a class="contact-link gelatine" href="https://www.plankcooking.com">Plankcooking</a> is a website that I have re-engineered from scratch in five separate technologies.',
            'featuredProjectBackDescriptionString' => 'Plankcooking served as the final project for many of my courses while becoming a developer. I have come to know his version of the site inside and out while not only learning 
                                                       how to produce efficient applications with the courses given technology, but also teaching myself how to incorporate and utilize other frameworks and libraries such as 
                                                       Bootstrap &amp; jQuery.',
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
            'featuredProjectFrontDescriptionString' => 'My Android mobile applications developed with Kotlin. These applications represent my journey in learning how to develop full stack Android apps.',
            'featuredProjectBackDescriptionString' => 'From a simple single button game called Time Fighter to an API movie database application, I have developed five separate mobile applications using Kotlin.
                                                       Two of these applications not only demonstrate CRUD operations, but does so with the power of the Volley library in order to communicate with a microservice.',
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
            'subProjectsNameString1' => 'Mobile Dev I Course Assignments,Dice Roller,Time Fighter,PIG Dice Rolling Game,PIG DRG (Localization),PIG DRG (Save State)',
            'subProjectsNameString2' => 'Mobile Dev II Course Assignments,PIG Dice Rolling Game,Where are my spare parts? (CRUD),Where are my spare parts? (API Integration),Open Movie Database Final Project',
            'gitHubRepoURLString' => 'https://github.com/EricCraigen/Mobile-Applications',
            'contributionsString' => 'Development',
            'projectDescriptionString' => 'After spending over a year creating Kotlin console applications, my journey to developing Android applications began with a <a class="contact-link gelatine" href="https://www.raywenderlich.com/4936497-your-first-kotlin-android-app/">tutorial</a>
                                           that covered all of the basic tools needed to develop a simple, one layout application. This application is called Time Fighter and has a simple button, timer, and scoreboard that allows the user
                                           to compete against the clock to see how many times the button can be depressed within 60 seconds.
                                           *PIG Dice Rolling Game (PDRG) is a just that! A two dice rolling game where the user competes with the computer in an attempt to reach the winning score first. If you would like to be a little piggy
                                           and try to win without ever letting the cpu take a turn, you may! But look out! If you come up with a one, you\'ve lost your score AND score turn. Roll double ones and you\'ll not only lose your turn score,
                                           but say goodbye to your over all score as well.
                                           *There are 4 versions of PDRG, each containing a separate aspect of functionality to show how the application progressed through out my experience in learning Android development. There is a version where 
                                           localization was implemented in order to support Spanish speaking users. 
                                           *Another version saves the applications state on screen rotation in order to maintain the applications state after it has destroyed and rebuilt itself 
                                           in the new oreientation layout. The final version contained all the afforementioned features as well as a newly designed leaderboard that utilizes the devices storages to save users win/loss records against the computer.
                                           *Where are my spare parts? is an application that was developed to demonstrate CRUD operations in an Android environmet. The basic CRUD version utilizes the devices storage to maintain user records of spare parts and their locations.
                                           The API version functions the same, however instead of saving the database records in CSV format on the device, they are actually interacted with via Kotlin\'s volley library to a microservice API.
                                           *The final project of Mobile Dev II is a movie database that allows a user to search for and view information about all movies contained within the Open Movie Database. Search results are displayed in a recylcer view that allows the user
                                           to scroll through and click on their desired result to show more detailed information about the movie in a single movie layout. ',
        ]);
        $project->save();

        $project = new Project([
            'cardIndex' => '4',
            'featuredProject' => false,
            'featuredProjectFrontDescriptionString' => null,
            'featuredProjectBackDescriptionString' => null,
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
            'subProjectsNameString1' => 'Programming Principles I Course Assignments,Acronym,Center String,Coins,Hash Maps,Histogram,Leap Years Calculator,Payroll Calculator,Reverse Digit,Rock Paper Scissors,Triangle,Course Header,Connect Four Final Project',
            'subProjectsNameString2' => 'Programming Principles II Course Assignments,Book Main,Character Fight,Check Writer,RegEx Text Search,Various Classes,Word Search Final Project',
            'gitHubRepoURLString' => 'https://github.com/EricCraigen/Console-Applications',
            'contributionsString' => 'Development',
            'projectDescriptionString' => 'Before the mobile applications could be started, my journey to learning Kotlin began right along side full stack web development with console application. Many of these applications are fairly basic, but provide 
                                           real world examples of programs that are ready to plugin to an Android application. Some of my more simple programs allow users to convert sentences into an acronymns or to put in a number of coins and be told the 
                                           vaule of the entered coins.
                                           *My first menu driven application was Rock Paper Scissors. This was really my first deep dive into the world of Object Oriented Programming and was one of the mentally challenging tasks I had ever come against in my 
                                           life. I can not begin to describe the feeling I had when I was able to finally make it all work as intended and this is really where software develpment took a grip of me so tight that I will never be able to free myself
                                           from its grasp.
                                           *This grasp never felt more suffocating than during the final project in which we were tasked with creating a menu driven Connect Four game. This project required me to utilize a multi-dimensional array to act as a
                                           gameboard that would house the blank and player spaces of the board. 
                                           *"Array index out of bounds" was the error that I was seeing and despite my days of searching I never did figure out how to defeat this major bug before
                                           mid-night cut off. While I was able to test for wins horizontally and vertically, however when testing in the diagonal direction I just could not comprehend how I needed to test the value that will be used next, vice testing
                                           it when it was actually being tested, thus throwing the index "out of bounds".
                                           *Fast forward the the Programming Principles II final project in which we were tasked with building an application that would take in a txt file containing words in CSV and display these words on a 45x45 space board. 
                                           This program was very similar to the previous final in that it had a mulit-dimensional array to traverse in every direction at some point during the logic. 
                                           *Having gained an abundance of knowledge and experience on how to
                                           properly achieve this, I was finally able to comprehend the concept of testing BEFORE testing and make it work perfectly.',
        ]);
        $project->save();

        $project = new Project([
            'cardIndex' => '5',
            'featuredProject' => false,
            'featuredProjectFrontDescriptionString' => null,
            'featuredProjectBackDescriptionString' => null,
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
                                           *As I have only just begun my journey into web-based game development!
                                           *My overall goal is to create a classic RPG, top down style game from pure HTML/CSS/JavaScript. 
                                           *Projects will be posted here as I procede through my quest to build an exciting RPG title.',
        ]);
        $project->save();

    }
}
