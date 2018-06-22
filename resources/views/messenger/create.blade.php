<form action="{{ route('messages.store') }}" method="post">
    {{ csrf_field() }}
    <!-- Subject Form Input -->
    <div class="form-group">
        <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{ old('subject') }}">
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
    </div>

    <input type="hidden" name="recipient" id="recipient" value="{{ $room->user_id }}">

    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </div>
</form>