@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @include('partials.side-filter')
        </div>

        <div class="col-md-10">
            @if(isset($rooms) && count($rooms) > 0)
                @foreach($rooms as $room)
                    @include('partials.room-card')
                @endforeach
            @else
                <div class="text-center" style="margin-top: 60px;">
                    <h3>
                        No Rooms that match your search
                    </h3>
                </div>
            @endif
        </div>
    </div>
@endsection
