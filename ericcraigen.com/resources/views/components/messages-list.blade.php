@props(['allMessages', 'inbox'])


<div class="messages test">

    <form class="messages-search-bar" method="GET" action="/account/messages">
        <div class="input-group">
            <button type="submit" class="input-group-text" id="addon-wrapping" onclick="event.preventDefault();
                    //  Call message search function here

                    alert('searching');
                    this.closest('form').submit();">
                <img src="/img/svg/search-icon.svg" alt="Messages search bar" />
            </button>
            <input class="messages-search-input form-control" type="text" placeholder="Search"
                name="messages-search-input" id="messages-search-input">
        </div>
        @csrf
    </form>

    <div class="current-mailbox">
        Inbox
    </div>

    <div class="messages-list">
        {{-- @php
            // $messages = json_decode($allMessages);
            // $inbox = json_decode($allMessages->where('messageStarred', false));
            // array_push($inbox, $allMessages->where('messageStarred', false));
            $mailboxs = array('inbox', 'starred', 'snoozed', 'trashed');
            $inbox = array();
            $starred = array();
            $snoozed = array();
            $trashed = array();
        @endphp --}}

        {{-- @foreach (json_decode($inbox) as $message) --}}
        @php
            $messageRecord = json_decode($inbox, true);
        @endphp

        {!! $messageRecord !!}
        {{-- {{ $messageRecord }} --}}

        {{-- {{ json_encode($messageRecord) }} --}}

        {{-- <x-message messageRecord={{ $message }} /> --}}

        {{-- @if (($message->messageStarred == false || $message->messageStarred == null) && ($message->messageSnoozed == false || $message->messageSnoozed == null) && ($message->messageTrashed == false || $message->messageTrashed == null))


        @endif --}}
        {{-- @if (($message->messageStarred == false || $message->messageStarred == null) && ($message->messageSnoozed == false || $message->messageSnoozed == null) && ($message->messageTrashed == false || $message->messageTrashed == null))
            @php
                array_push($inbox, $message);
            @endphp
        @else


        @endif --}}



        {{-- {{ $message->id }}<br /> --}}
        {{-- @endforeach --}}
        {{-- {{ json_decode($inbox)->count() }} --}}
        {{-- {{ $inbox[13]->id }} --}}
    </div>


</div>
