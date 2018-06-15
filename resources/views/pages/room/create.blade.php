@extends('layouts.app')

@section('styles')

@endsection

@section('content')
    <div class="container-fluid">

        <form action="/room" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-4">
                        <div class="card-header">Room Details</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('greater-areas') ? ' has-error' : '' }}">
                                        <select class="form-control" name="greater-areas" id="greater-areas" onchange="updateLocations(this)">
                                            <option value="" selected disabled>Select Greater Area</option>
                                            @foreach($greaterAreas as $value => $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('greater-areas'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('greater-areas') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('locations') ? ' has-error' : '' }}">
                                        <select class="form-control" name="locations" id="locations" disabled>
                                            <option value="" selected disabled>Select Suburb</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('locations'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('locations') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Room Name *">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter Room Description *" cols="30" rows="10"></textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="length" id="length" placeholder="Enter Room Length">
                                    </div>
                                    @if ($errors->has('length'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('length') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('width') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="width" id="width" placeholder="Enter Room Width">
                                    </div>
                                    @if ($errors->has('width'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('width') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="rent" id="rent" placeholder="Enter Monthly Rent *">
                                    </div>
                                    @if ($errors->has('rent'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rent') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('deposit') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="deposit" id="deposit" placeholder="Enter Room Deposit Amount">
                                    </div>
                                    @if ($errors->has('deposit'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('deposit') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lease-min') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="lease-min" id="lease-min" placeholder="Enter The Minimum Lease Term">
                                    </div>
                                    @if ($errors->has('lease-min'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lease-min') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lease-max') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="lease-max" id="lease-max" placeholder="Enter The Maximum Lease Term">
                                    </div>
                                    @if ($errors->has('lease-max'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lease-max') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('available-from') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="available-from" id="available-from" placeholder="Room Available From">
                                    </div>
                                    @if ($errors->has('available-from'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('available-from') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('available-to') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="available-to" id="available-to" placeholder="Room Available To">
                                    </div>
                                    @if ($errors->has('available-to'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('available-to') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="rooms" id="rooms" placeholder="Enter No. Of Rooms">
                                    </div>
                                    @if ($errors->has('rooms'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rooms') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('bathrooms') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="Enter No. Of Bathrooms">
                                    </div>
                                    @if ($errors->has('bathrooms'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bathrooms') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">Room Pictures</div>

                        <div class="card-body">

                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control btn btn-primary" type="submit" value="Submit">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control btn btn-warning" type="reset" value="Reset">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control btn btn-danger" type="button" value="Cancel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <div class="card-header">Room Extras</div>

                        <div class="card-body">
                            @foreach($extras as $extra)
                                <div class="form-group">
                                    <input class="input-group-sm" type="{{ $extra->input_type }}" id="{{ $extra->slug }}" name="{{ $extra->slug }}" placeholder="{{ $extra->name }}">
                                    <label for="{{ $extra->slug }}">{{ $extra->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">Room Requirements</div>

                        <div class="card-body">
                            @foreach($requirements as $requirement)
                                <div class="form-group">
                                    <input class="input-group-sm" type="{{ $requirement->input_type }}" id="{{ $requirement->slug }}" name="{{ $requirement->slug }}" placeholder="{{ $requirement->name }}">
                                    <label for="{{ $requirement->slug }}">{{ $requirement->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-4">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <
                </div>
            </div>

        </form>

    </div>
@endsection

@section('scripts')
    <script>
        function updateLocations(select)
        {
            $.ajax({
                type: 'POST',
                url: 'getLocations/',
                data: {
                    greaterAreaId: select.value
                },
                success: function (data) {
                    console.dir(data);
                    // the next thing you want to do
                    let locations = $('#locations');
                    for (var i = 0; i < data.length; i++) {
                        locations.append('<option id=' + data[i].id + ' value=' + data[i].id + '>' + data[i].name + '</option>');
                    }
                }
            });
        }
    </script>
@endsection
