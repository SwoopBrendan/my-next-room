@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h3>Inbox</h3>
                </div>
            </div>
            @include('messenger.partials.flash')

            @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
        </div>
    </div>
@stop