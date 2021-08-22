const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

// Settings here???
$(document).ready(function() {
    let active_mailbox = '#inbox';
    let active_mailbox_tab = '#inbox-li';
    $(active_mailbox_tab).css("background", "#434e5c");
    loadPreferredMailbox(active_mailbox, active_mailbox_tab);

    window.setTimeout(function() {
        $('.selected-message-animation-window').removeClass('d-none');
        // displaySelectedMessageAnimationWindow();
    }, 1200);
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

function displaySelectedMessageAnimationWindow(obj) {
    $('.selected-message-animation-window').addClass('d-none').css('left', '0px');
    window.setTimeout(function() {
        $('.selected-message-animation-window').removeClass('d-none');
        toggleActiveSelectedMessageThumb($(obj));
        $('.selected-message-animation-window').css('opacity', 1);
    }, 1200);
}

    function displaySelectedMessageAnimationWindowLog(obj) {
        let _message = $(obj);
        console.log(_message);
    }

function removeSelectedMessageAnimationWindow() {
    $('.selected-message-animation-window').css('opacity', 0);
    window.setTimeout(function() {
        $('.selected-message-animation-window').addClass('d-none');
        $('.selected-message-animation-window').css('left', 'calc(100% - 623px)');
    }, 1200);
}

function toggleActiveSelectedMessageThumb(obj) {
    // let clicked_message_thumb = $(obj);
    // window.setTimeout(function() {
        $(obj).addClass('active-message-thumb');
    // }, 2050);
    console.log($(obj));
}

function setSelectedMessageContent(obj) {
    window.setTimeout(function() {
        $('.populated-message-window').removeClass('d-none');
    }, 2050);
    let clicked_message_content = $(obj).data('message');
    $('.message-from').text(clicked_message_content.firstName + ' ' + clicked_message_content.lastName);
    $('.subject').text(clicked_message_content.subject);
    let date = new Date(clicked_message_content.created_at);
    let  [month, day, [hours, minutes, seconds]] = [date.getMonth(), date.getDate(), [date.getHours(), date.getMinutes(), date.getSeconds()]];
    $('.message-date').text(monthNames[month] + ' ' + day);
    $('.message-time').text(hours + ':' + minutes);
    $('.message-message').text(clicked_message_content.message);
    console.log(clicked_message_content);
}

$('.messages-link').on('click', function() {
    let active_mailbox = '' + $(this).data('mailbox-getter');
    let active_mailbox_tab = $(this).data('mailbox-getter') + '-li';
    toggleMessageLoading();
    toggleActiveMailboxTab(active_mailbox_tab, $(this));
    switchActiveMailbox(active_mailbox, active_mailbox_tab);
});

$('.message-thumb').on('click', function() {
    $('.populated-message-window').addClass('d-none');
    $('.message-thumb').removeClass('active-message-thumb');
    // toggleActiveSelectedMessageThumb($(this));
    setSelectedMessageContent($(this));
    displaySelectedMessageAnimationWindow($(this));

    window.setTimeout(function() {
        removeSelectedMessageAnimationWindow();
    }, 1200);
});

$('.menu').on('mouseover', function() {
    $('#selected-message').css('transition', 'left 0.5s').css('left', '773px');
    $('.menu').on('mouseleave', function() {
        window.setTimeout(function() {
            $('#selected-message').css('left', '623px');
        }, 500);
    });
});

