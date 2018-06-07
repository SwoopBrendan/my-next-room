@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3">
            @include('partials.side-filter')
        </div>

        <div class="col-md-9">
            <div class="row room-cards">
                <div class="col-md-4">
                    <div class="card room-card text-center">
                        <a href="#">
                            <img class="card-img-top" src="http://via.placeholder.com/200x200" alt="Card image cap">
                            <div class="card-header">Bedroom with En-Suite</div>
                            <div class="card-body">
                                Double volume bedroom with en-suit bathroom
                            </div>
                            <div class="card-footer">
                                City Bowl, Gardens, 8001
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card room-card text-center">
                        <a href="#">
                            <img class="card-img-top" src="http://via.placeholder.com/200x200" alt="Card image cap">
                            <div class="card-header">Bedroom with En-Suite</div>
                            <div class="card-body">
                                Double volume bedroom with en-suit bathroom
                            </div>
                            <div class="card-footer">
                                City Bowl, Gardens, 8001
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card room-card text-center">
                        <a href="#">
                            <img class="card-img-top" src="http://via.placeholder.com/200x200" alt="Card image cap">
                            <div class="card-header">Bedroom with En-Suite</div>
                            <div class="card-body">
                                Double volume bedroom with en-suit bathroom
                            </div>
                            <div class="card-footer">
                                City Bowl, Gardens, 8001
                            </div>
                        </a>
                    </div>
                </div>
                {{--@if(isset($rooms) && count($rooms) > 0)--}}
                    {{--@foreach($rooms as $room)--}}
                        {{--@include('partials.room-card')--}}
                    {{--@endforeach--}}
                {{--@else--}}
                    {{--<div class="col-md-12 text-center" style="margin-top: 60px;">--}}
                        {{--<h3>--}}
                            {{--No Rooms that match your search--}}
                        {{--</h3>--}}
                    {{--</div>--}}
                {{--@endif--}}
            </div>
        </div>
    </div>
    </div>
@endsection
