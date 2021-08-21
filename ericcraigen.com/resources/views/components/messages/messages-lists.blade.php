@props(['inbox', 'starred', 'snoozed', 'trashed'])


<div class="messages">

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

    <div class="mailboxs-container">

        <x-selected-mailbox>

            <div class="selected-mailbox d-none" id="inbox">

                <div class="current-mailbox-label">
                    Inbox
                </div>

                <div class="messages-list">

                    @foreach (json_decode($inbox) as $message)

                        <x-messages.message>

                            <div class="message" id="{{ 'message-' . $message->id }}">

                                <div class="loading" id="{{ 'loading-' . $message->id }}">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <div class="message-content test d-none" id="{{ 'message-content-' . $message->id }}">

                                    <div class="message-name">
                                        {!! $message->firstName . ' ' . $message->lastName !!}
                                    </div>

                                </div>

                            </div>

                        </x-messages.message>

                    @endforeach

                </div>

            </div>

        </x-selected-mailbox>

        <x-selected-mailbox>

            <div class="selected-mailbox d-none" id="starred">

                <div class="current-mailbox-label">
                    Starred
                </div>

                <div class="messages-list">

                    @foreach (json_decode($starred) as $message)

                        <x-messages.message>

                            <div class="message">

                                {{-- Animations (css) --}}
                                <div class="loading" id="{{ 'loading-' . $message->id }}">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <div class="message-content d-none" id="{{ 'message-content-' . $message->id }}">
                                    {!! $message->firstName . ' ' !!}
                                </div>

                            </div>

                        </x-messages.message>

                    @endforeach

                </div>

            <div class="selected-mailbox">

        </x-selected-mailbox>

    </div>

</div>
