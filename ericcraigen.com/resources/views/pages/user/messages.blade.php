@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="dashboard-sidebar" id="messages-group">

        <x-dashboard-menu />

        <div class="messages-menu-wrapper">

            <x-messages-menu />

        </div>
        <div class="accordion">

            <div class="messages-container" id="inbox">


                <div class="messages-list-wrapper">

                    @foreach ($inbox as $message)

                        <x-message-list-item id="{{ $message['id'] }}"
                                             firstName="{{ $message['firstName'] }}"
                                             lastName="{{ $message['lastName'] }}"
                                             subject="{{ $message['subject'] }}"
                                             messageDate="{{ $message['created_at']->format('F d') }}"
                                             messageTime="{{ $message['created_at']->format('h:i a') }}"
                                             />
                        {{-- {{ $message_date }} --}}
                    @endforeach

                </div>


            </div>

            <div class="messages-container" id="sent">

                <div class="messages-list-wrapper">

                    Sent component

                </div>

            </div>

            <div class="messages-container" id="starred">

                <div class="messages-list-wrapper">

                    @foreach ($starred as $message)
                        {{ $message['id'] }}
                    @endforeach

                </div>

            </div>

            <div class="messages-container" id="snoozed">

                <div class="messages-list-wrapper">

                    @foreach ($snoozed as $message)
                        {{ $message['id'] }}
                    @endforeach

                </div>

            </div>

            <div class="messages-container" id="trashed">

                <div class="messages-list-wrapper">

                    @foreach ($trashed as $message)
                        {{ $message['id'] }}
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</x-app-layout>


<script type="text/javascript">

    function FadeMessageWindow(){
        $(".messages-container").css("opacity", "0").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend', AddDNoneAfterFade);
    }

    function AddDNoneAfterFade(){
        $(".messages-container").css("display", "none");
    }

    function ShowSelectedMessageWindow(messages_container_to_show){
        $(messages_container_to_show).css("display", "flex").css("opacity", "1").unbind("transitionend webkitTransitionEnd oTransitionEnd otransitionend");
    }

    function addActiveTabBgColor(messages_tab){
        $(messages_tab).css("background", "#2f3640");
    }

    // make this a setting...
    ShowSelectedMessageWindow('#inbox');
    addActiveTabBgColor('#inbox-li');

    $('.messages-link').on('click', function() {
        let messages_container_to_show = $(this).data('message-link');
        let messages_tab = $(this).data('message-link') + '-li';

        $('.messages-link').css('pointer-events', 'none');
        $('.messages-link').removeClass('active');
        $('.messages-menu-li').css('background', '#434e5c');

        $(this).addClass('active');
        addActiveTabBgColor(messages_tab);
        // $(messages_tab).css('background', '#2f3640');

        FadeMessageWindow();
        window.setTimeout(function() {
            ShowSelectedMessageWindow(messages_container_to_show);
            $('.messages-link').css('pointer-events', 'auto');
        }, 500);

    });

</script>
