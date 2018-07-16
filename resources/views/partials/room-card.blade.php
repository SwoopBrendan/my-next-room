<div class="col-md-4">
    <div class="d-flex flex-row border rounded">
        <div class="p-0 w-25">
            @php $roomImages = $room->roomImages @endphp
            <img src="{{ asset('images/room/' . $roomImages[0]->image->name) }}" class="img-thumbnail border-0" />
        </div>
        <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
            <h4 class="text-primary">{{ $room->name }}</h4>
            <h5 class="text-info">{{ $room->roomLocation->locationGreaterArea->name }}</h5>
            <h5 class="text-info">{{ $room->roomLocation->name }}</h5>
            <ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
                <li>Rent: R {{ $room->rent }}</li>
                <li>Deposit: R {{ $room->deposit }}</li>
            </ul>
            <p class="text-right m-0">
                <a href="{{ url('room/' . $room->id) }}" class="btn btn-success"><i class="far fa-eye"></i></a>
                <a href="#" class="btn btn-primary"><i class="far fa-star"></i></a>
            </p>
        </div>
    </div>
</div>