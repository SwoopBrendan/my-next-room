<div class="row">
    @php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : 'alert-success'; @endphp
    <div class="col-md-12">
        <div class="alert {{ $class }}" role="alert">
            <h4 class="alert-heading">
                <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
                ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)
                {{ $thread->participantsString(Auth::id()) }}
            </h4>
            <p>{{ $thread->latestMessage->body }}</p>
        </div>
    </div>
</div>