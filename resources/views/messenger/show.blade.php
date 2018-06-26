@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h2 class="mt-4">{{ $thread->subject }} | <small><a href="{{ url('room/' . $thread->room->id) }}">{{ $thread->room->name }}</a></small></h2>
            @each('messenger.partials.messages', $thread->messages, 'message')

            @include('messenger.partials.form-message')
        </div>
    </div>
@stop
