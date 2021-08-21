@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="dashboard-sidebar" id="messages-group">

        <x-dashboard-menu />


        <x-messages.messages-menu />


        <x-messages.messages-lists inbox="{!! $inbox !!}"
                          starred="{!! $starred !!}"
                          snoozed="{!! $snoozed !!}"
                          trashed="{!! $trashed !!}"
                          />


    </div>

</x-app-layout>


<script type="text/javascript">

    // Settings here???
    $(document).ready(function() {
        let active_mailbox = '#inbox';
        let active_mailbox_tab = '#inbox-li';
        $(active_mailbox_tab).css("background", "#434e5c");
        loadPreferredMailbox(active_mailbox, active_mailbox_tab);
    });

    function loadPreferredMailbox(_active_mailbox, _active_mailbox_tab) {
        // window.setTimeout(function() {
            switchActiveMailbox(_active_mailbox, _active_mailbox_tab);
            toggleMessageLoading();
        // }, 1200);
    }

    function toggleMessageLoading() {
        $('.loading').removeClass('d-none');
        $('.message-content').addClass('d-none');
        window.setTimeout(function() {
            $('.loading').addClass('d-none');
            $('.message-content').removeClass('d-none');
        }, 2000);
    }

    function toggleActiveMailboxTab(_active_mailbox_tab, obj) {
        let clicked_mailbox_tab = $(obj);
        $('.messages-link').removeClass('active');
        $('.messages-menu-li').css('background', '#2f3640');
        $(_active_mailbox_tab).css("background", "#434e5c");
        clicked_mailbox_tab.addClass('active');
    }

    function switchActiveMailbox(_active_mailbox, _active_mailbox_tab) {
        switch (_active_mailbox) {
            case '#inbox':
                $('#inbox').css('margin-left', '0px').css('opacity', 1).removeClass('d-none');
                $('#starred').css('margin-left', '400px').css('opacity', 0).addClass('d-none');
                break;
            // case '#sent':
            //     $('#inbox').css('margin-left', '-400px');
            //     $('#starred').css('margin-left', '0px');
            //     break;
            case '#starred':
                $('#inbox').css('margin-left', '-400px').css('opacity', 0).addClass('d-none');
                $('#starred').css('margin-left', '0px').css('opacity', 1).removeClass('d-none');
                break;
            // case '#snoozed':
            //     $('#messages-menu-list').css('padding-top', '96px');
            //     break;
            // case '#trashed':
            //     $('#messages-menu-list').css('padding-top', '50px');
            //     break;

            default:
                console.log('in default...');
        }
        switch (_active_mailbox_tab) {
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
    }

    $('.messages-link').on('click', function() {

        let active_mailbox = '' + $(this).data('mailbox-getter');
        let active_mailbox_tab = $(this).data('mailbox-getter') + '-li';
        toggleMessageLoading();
        toggleActiveMailboxTab(active_mailbox_tab, $(this));
        switchActiveMailbox(active_mailbox, active_mailbox_tab);

    });

</script>
