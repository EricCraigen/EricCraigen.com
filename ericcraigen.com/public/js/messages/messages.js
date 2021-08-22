// Settings here???
$(document).ready(function() {
    let active_mailbox = '#inbox';
    let active_mailbox_tab = '#inbox-li';
    $(active_mailbox_tab).css("background", "#434e5c");
    loadPreferredMailbox(active_mailbox, active_mailbox_tab);
    // window.setTimeout(function() {
        displayEmptySelectedMessageWindow();
    // }, 1200);
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

function displayEmptySelectedMessageWindow() {
    let loading_gif = document.createElement('div');
    loading_gif.classList.add('selected-message-loader');
    document.querySelector('.selected-message-animation-window').appendChild(loading_gif);
    for (let loaderInners = 0; loaderInners < 3; loaderInners++) {
        let loaderInner = document.createElement('div');
        loaderInner.classList.add('inner');
        loaderInner.classList.add(loaderInners + 1 == 3 ? 'three' : loaderInners + 1 == 1 ? 'one' : 'two');
        document.querySelector('.selected-message-loader').appendChild(loaderInner);
    }
}

    function displayEmptySelectedMessageWindowLog(obj) {
        let _message = $(obj);
        console.log(_message);
    }

function removeEmptySelectedMessageWindow() {
    $('.selected-message-animation-window').css('left', 'calc(100% - 623px)');
}

function toggleActiveSelectedMessageThumb(obj) {
    let clicked_message_thumb = $(obj);
    console.log(clicked_message_thumb);
}

function getSelectedMessageContent(obj) {
    let clicked_message_content = $(obj).data('message');
    console.log(clicked_message_content);
}

$('.messages-link').on('click', function() {

    let active_mailbox = '' + $(this).data('mailbox-getter');
    let active_mailbox_tab = $(this).data('mailbox-getter') + '-li';
    toggleMessageLoading();
    toggleActiveMailboxTab(active_mailbox_tab, $(this));
    switchActiveMailbox(active_mailbox, active_mailbox_tab);

});

$('.message').on('click', function(obj) {
    removeEmptySelectedMessageWindow();
    toggleActiveSelectedMessageThumb($(this));
    getSelectedMessageContent($(this));

});

$('.menu').on('mouseover', function() {
    $('#selected-message').css('transition', 'left 0.5s').css('left', '773px');
    $('.menu').on('mouseleave', function() {
        window.setTimeout(function() {
            $('#selected-message').css('left', '623px');
        }, 500);
    });
});

