@props(['id', 'firstName', 'lastName', 'subject', 'messageDate', 'messageTime', 'message'])

<div class="message-list-item" data-id="{{ '#message-list-item-' . $id }}" data-index="{{ $id }}"
    data-message="{{ $message }}">

    <div class="message-list-head">

        <div class="message-list-name-left">

            <div class="message-name">
                {{ $firstName . ' ' . $lastName }}
            </div>

            <div class="message-subject">
                <span class="subject">Subject:</span> {!! html_entity_decode(substr($subject, 0, 35)) !!}{{ strlen($subject) > 35 ? '...' : '' }}
            </div>

        </div>

        <div class="message-list-info">

            <div class="message-date">
                {{ $messageDate }}
            </div>

            <div class="message-time">
                {{ $messageTime }}
            </div>

        </div>



    </div>

    <div class="dropdown message-controls">

        <a class="message-controls-toggler" href="#" role="button" id="message-control-dropdown-{{ $id }}"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/img/svg/dots.svg" alt="Message Controls">
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message-control-dropdown-{{ $id }}">

            <li><a class="dropdown-item" href="#">Star</a></li>
            <li><a class="dropdown-item" href="#">Snooze</a></li>
            <li><a class="dropdown-item" href="#">Trash</a></li>

        </ul>

    </div>

</div>
