<div class="col-md-3">
    <div class="card room-card text-center">
        <a href="room/{{ $room->id }}">
            <div id="carouselControls{{ $room->id }}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php $first = 1; @endphp
                        @foreach($room->roomImages as $roomImage)
                            <div class="carousel-item @if($first == 1){{ 'active' }}@endif">
                                <img class="card-img-top" src="{{ asset('images/room/' . $roomImage->image->name) }}" alt="Card image cap">
                            </div>
                            @php $first++; @endphp
                        @endforeach
                    @php $first = 1; @endphp
                </div>
                <a class="carousel-control-prev" href="#carouselControls{{ $room->id }}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls{{ $room->id }}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="card-header">{{ $room->name }}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        Rent: R {{ $room->rent }}
                    </div>
                    <div class="col-md-6">
                        Deposit: R {{ $room->deposit }}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                {{ $room->roomLocation->locationGreaterArea->name }}, {{ $room->roomLocation->name }}
            </div>
        </a>
    </div>
</div>