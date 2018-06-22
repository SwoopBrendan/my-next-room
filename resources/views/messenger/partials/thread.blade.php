<div class="row">
    @php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : 'alert-success'; @endphp
    <div class="col-md-12">
        <div class="alert {{ $class }}" role="alert">
            <h4 class="alert-heading">
                <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
                ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)
            </h4>
            <p>{{ $thread->latestMessage->body }}</p>
            <hr>
            <p class="mb-0">{{ $thread->participantsString(Auth::id()) }}</p>
        </div>
    </div>
</div>