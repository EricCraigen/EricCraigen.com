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

                    @php
                        $inbox_array = json_decode($inbox, true);
                        // var_dump($inbox_array[0]['id']);
                    @endphp

                    @foreach (json_decode($inbox) as $message)

                        <x-messages.message>

                            <div class="message" id="{{ 'message-' . $message->id }}">

                                <div class="message-thumb" id="{{ 'message-thumb-' . $message->id }}"  data-message="{{ json_encode($inbox_array[$loop->index]) }}">
                                    <div class="message-content d-none" id="{{ 'message-content-' . $message->id }}">

                                        <div class="message-thumb-header">
                                            <div class="message-thumb-header-left">
                                                <div class="message-thumb-from">
                                                   {!! $message->firstName . ' ' . $message->lastName !!}
                                                </div>
                                                <div class="message-thumb-subject">
                                                    <span class="">Subject:&nbsp;</span>{!! $message->subject !!}
                                                </div>
                                            </div>
                                            <div class="message-thumb-header-right">
                                                <div class="message-thumb-date">
                                                    August 20
                                                </div>
                                                <div class="message-thumb-time">
                                                    23:23
                                                </div>
                                            </div>
                                            {{-- <div class="message-thumb-commands"> --}}
                                                <div class="dropdown message-thumb-commands">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="/img/svg/dots.svg" alt="message options dropdown" />
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                  </div>
                                            {{-- </div> --}}
                                        </div>

                                    </div>
                                </div>
                                <div class="loading" id="{{ 'loading-' . $message->id }}">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                {{-- <div class="message-content d-none" id="{{ 'message-content-' . $message->id }}">

                                    <div class="message-name">
                                        {!! $message->firstName . ' ' . $message->lastName !!}
                                    </div>

                                </div> --}}

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

                    @php
                        $starred_array = json_decode($starred, true);
                        // var_dump($starred_array[0]['id']);
                    @endphp

                    @foreach (json_decode($starred) as $message)

                        <x-messages.message>

                            <div class="message" id="{{ 'message-' . $message->id }}" data-message="{{ json_encode($starred_array[$loop->index]) }}">

                                {{-- Animations (css) --}}
                                <div class="loading" id="{{ 'loading-' . $message->id }}">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <div class="message-content d-none" id="{{ 'message-content-' . $message->id }}">

                                    <div class="message-name">
                                        {!! $message->firstName . ' ' . $message->lastName !!}
                                    </div>

                                </div>

                            </div>

                        </x-messages.message>

                    @endforeach

                </div>

            <div class="selected-mailbox">

        </x-selected-mailbox>




    </div>


</div>
