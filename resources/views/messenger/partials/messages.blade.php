<div class="row">
    <div class="col-md-12">
        @php use Illuminate\Support\Facades\Auth; $class= Auth::id() == $message->user->id ? 'alert-success text-right' : 'alert-info text-left'; @endphp
        <div class="alert {{ $class }}" role="alert">
            <h4 class="alert-heading">{{ $message->user->name }}</h4>
            <p>{{ $message->body }}</p>
            <div class="text-muted">
                <small>Posted {{ $message->created_at->diffForHumans() }}</small>
            </div>
        </div>
    </div>
</div>