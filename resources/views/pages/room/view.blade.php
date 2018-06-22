@extends('layouts.app')

@section('styles')
    <style>
        .slick-prev:before, .slick-next:before {
            color: black;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="slick-large mt-4">
                        @foreach($room->roomImages as $roomImage)
                            <div>
                                <img class="img-fluid rounded" src="{{ asset('images/room/' . $roomImage->image->name) }}" alt="Card image cap" style="height: 610px; width: 100%;">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="slick-images mt-4">
                        @foreach($room->roomImages as $roomImage)
                            <div>
                                <img class="img-fluid rounded" src="{{ asset('images/room/' . $roomImage->image->name) }}" alt="Card image cap" style="height: 300px; width: 95%; margin-left: auto; margin-right: auto;">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card mt-4">
                        <div class="card-header">
                            {{ $room->name }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    {{ $room->roomLocation->locationGreaterArea->name }}
                                </div>
                                <div class="col-md-6">
                                    {{ $room->roomLocation->name }}
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-12">
                                    {!! $room->description !!}
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6">
                                    Rent (R): {{ $room->rent }}
                                </div>
                                <div class="col-md-6">
                                    Deposit (R): {{ $room->deposit }}
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6">
                                    Min Lease Period (Months): {{ $room->lease_term_min }}
                                </div>
                                <div class="col-md-6">
                                    Max Lease Period (Months): {{ $room->lease_term_max }}
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6">
                                    Available From: {{ date('d-m-Y', strtotime( $room->available_from )) }}
                                </div>
                                <div class="col-md-6">
                                    Available Until: {{ date('d-m-Y', strtotime( $room->available_to )) }}
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6">
                                    No. Rooms: {{ $room->room_count }}
                                </div>
                                <div class="col-md-6">
                                    No. Bathrooms: {{ $room->bathroom_count }}
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6">
                                    Length (m): {{ $room->length }}
                                </div>
                                <div class="col-md-6">
                                    Width (m): {{ $room->width }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mt-4">
                        <div class="card-header">
                            Room Extras
                        </div>
                        <div class="card-body">
                            @foreach($room->roomExtras as $roomExtra)
                                <ul>
                                    <li>{{ $roomExtra->extra->name }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            Room Requirements
                        </div>
                        <div class="card-body">
                            @foreach($room->roomRequirements as $roomRequirement)
                                <ul>
                                    <li>{{ $roomRequirement->requirement->name }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slick-large').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                prevArrow: false,
                nextArrow: false,
                asNaveFor: '.slick-images'
            });
            $('.slick-images').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                asNavFor: '.slick-large',
                vertical: true
            });
        });
    </script>
@endsection