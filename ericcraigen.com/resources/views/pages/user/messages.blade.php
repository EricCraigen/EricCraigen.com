@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="dashboard-sidebar" id="messages-group">

        <x-dashboard-menu />

        <div class="messages-menu-wrapper">

            <x-messages-menu />

        </div>
        <div class="accordion w-100">

            <div class="messages-container" id="inbox">


                <div class="messages-list-wrapper">

                    @foreach ($inbox as $message)
                        <x-message-list-item id="{{ $message['id'] }}" firstName="{{ $message['firstName'] }}"
                            lastName="{{ $message['lastName'] }}" subject="{{ $message['subject'] }}"
                            messageDate="{{ $message['created_at']->format('F d') }}"
                            messageTime="{{ $message['created_at']->format('h:i a') }}"/>
                    @endforeach

                </div>

                <div class="select-message-notification">Please select a message to view (place an image here instead?)</div>

                <div class="message-viewer test5">

                        @foreach ($inbox as $message)
                            <div class="message-message" id="{{ 'message-message-' . $message['id'] }}">

                                <div class="message-display-wrapper">

                                    <div class="message-list-head">

                                        <div class="message-list-name-left">

                                            <div class="message-name">
                                                {{ $message['firstName'] . ' ' . $message['lastName'] }}
                                            </div>

                                            <div class="message-subject">
                                                <span class="subject">Subject:</span> {!! html_entity_decode(substr($message['subject'], 0, 35)) !!}{{ strlen($message['subject']) > 35 ? '...' : '' }}
                                            </div>

                                        </div>

                                        <div class="message-list-info">

                                            <div class="message-date">
                                                {{ $message['messageDate'] }}
                                            </div>

                                            <div class="message-time">
                                                {{ $message['messageTime'] }}
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                                {{ $message['message'] }}

                            </div>
                        @endforeach

                </div>

            </div>

            <div class="messages-container" id="sent">

                <div class="messages-list-wrapper">

                    <div class="message-message" id="{{ 'message-message-' . $message['id'] }}">



                            {{ $message['message'] }}

                        </div>


                    </div>

                </div>

            </div>

            <div class="messages-container" id="starred">

                <div class="messages-list-wrapper">

                    @foreach ($starred as $message)
                        <x-message-list-item id="{{ $message['id'] }}" firstName="{{ $message['firstName'] }}"
                            lastName="{{ $message['lastName'] }}" subject="{{ $message['subject'] }}"
                            messageDate="{{ $message['created_at']->format('F d') }}"
                            messageTime="{{ $message['created_at']->format('h:i a') }}"/>
                    @endforeach

                </div>

            </div>

            <div class="messages-container" id="snoozed">

                <div class="messages-list-wrapper">

                    @foreach ($snoozed as $message)
                        <x-message-list-item id="{{ $message['id'] }}" firstName="{{ $message['firstName'] }}"
                            lastName="{{ $message['lastName'] }}" subject="{{ $message['subject'] }}"
                            messageDate="{{ $message['created_at']->format('F d') }}"
                            messageTime="{{ $message['created_at']->format('h:i a') }}"/>
                    @endforeach

                </div>

            </div>

            <div class="messages-container" id="trashed">

                <div class="messages-list-wrapper">

                    @foreach ($trashed as $message)
                        <x-message-list-item id="{{ $message['id'] }}" firstName="{{ $message['firstName'] }}"
                            lastName="{{ $message['lastName'] }}" subject="{{ $message['subject'] }}"
                            messageDate="{{ $message['created_at']->format('F d') }}"
                            messageTime="{{ $message['created_at']->format('h:i a') }}"/>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</x-app-layout>


<script type="text/javascript">

    function FadeMessageWindow() {
        $(".messages-container").css("opacity", "0").on(
            'transitionend webkitTransitionEnd oTransitionEnd otransitionend', AddDNoneAfterFade);
    }

    function AddDNoneAfterFade() {
        $(".messages-container").css("display", "none");
    }

    function ShowSelectedMessageWindow(messages_container_to_show) {
        $(messages_container_to_show).css("display", "flex").css("opacity", "1").unbind(
            "transitionend webkitTransitionEnd oTransitionEnd otransitionend");
    }

    function addActiveTabBgColor(messages_tab) {
        $(messages_tab).css("background", "#434e5c");
    }

    function FadeCurrentMessage() {
        $(".message-message").css("opacity", "0").on(
            'transitionend webkitTransitionEnd oTransitionEnd otransitionend', AddDNoneAfterFadeMessages);
    }

    function AddDNoneAfterFadeMessages() {
        $(".message-message").css("display", "none");
    }

    function ShowSelectedMessage(messageToDisplay) {
        $(messageToDisplay).css("display", "flex").css("opacity", "1").unbind(
            "transitionend webkitTransitionEnd oTransitionEnd otransitionend");
    }

    // make this a setting...
    ShowSelectedMessageWindow('#inbox');
    ShowSelectedMessage('#message-message-1');
    addActiveTabBgColor('#inbox-li');

    $('.messages-link').on('click', function() {
        let messages_container_to_show = $(this).data('message-link');
        let messages_tab = $(this).data('message-link') + '-li';
        $('.messages-link').css('pointer-events', 'none');
        $('.messages-link').removeClass('active');
        $('.messages-menu-li').css('background', '#2f3640');

        switch (messages_tab) {
            case '#inbox-li':
                $('#messages-menu-list').css('padding-top', '234px');
            break;
            case '#sent-li':
                $('#messages-menu-list').css('padding-top', '188px');
            break;
            case '#starred-li':
                $('#messages-menu-list').css('padding-top', '142px');
            break;
            case '#snoozed-li':
                $('#messages-menu-list').css('padding-top', '96px');
            break;
            case '#trashed-li':
                $('#messages-menu-list').css('padding-top', '50px');
            break;

            default:
                console.log('in default...');

        }

        $(this).addClass('active');
        addActiveTabBgColor(messages_tab);

        FadeMessageWindow();
        window.setTimeout(function() {
            ShowSelectedMessageWindow(messages_container_to_show);
            $('.messages-link').css('pointer-events', 'auto');
        }, 500);

    });

    $('.message-list-item').on('click', function() {
        // alert($(this).hasClass('message-list-item'));

        // if($(this).hasClass('message-controls-toggler')) {
            $('.message-list-item').on('click', function() {

                let messageToDisplay = $(this).data('id');

                FadeCurrentMessage();
                window.setTimeout(function() {
                    ShowSelectedMessage(messageToDisplay);
                }, 500);

            });
        // }

    //     let messageToDisplay = $(this).data('id');

    //     FadeCurrentMessage();
    //     window.setTimeout(function() {
    //         ShowSelectedMessage(messageToDisplay);
    //     }, 500);

    });

    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });

    // $('.message-controls-toggler').on('mouseover', function() {

    //     var dropdownMenu = $(this).children(".dropdown-menu");
    //         if(dropdownMenu.is(":visible")){
    //             dropdownMenu.parent().toggleClass("open");
    //         }


    // //     // $('.message-list-item').css('pointer-events', 'none');
    // //     // $('.message-controls-toggler').css('pointer-events', 'auto');

    // });

</script>
