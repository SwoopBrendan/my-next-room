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
                                        <select class="form-control" name="greater-areas" id="greater-areas">
                                            <option value="" selected disabled>Select Greater Area</option>
                                            @foreach($greaterAreas as $value => $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('greater-areas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('greater-areas') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('locations') ? ' has-error' : '' }}">
                                        <select class="form-control" name="locations" id="locations" disabled>
                                            <option value="" selected disabled>Select Suburb</option>
                                        </select>
                                        @if ($errors->has('locations'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('locations') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Room Name *">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <textarea class="form-control" name="description" id="description" placeholder="Enter Room Description *" cols="30" rows="10"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="length" id="length" placeholder="Enter Room Length">
                                        @if ($errors->has('length'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('length') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('width') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="width" id="width" placeholder="Enter Room Width">
                                        @if ($errors->has('width'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('width') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="rent" id="rent" placeholder="Enter Monthly Rent *">
                                        @if ($errors->has('rent'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('rent') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('deposit') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="deposit" id="deposit" placeholder="Enter Room Deposit Amount">
                                        @if ($errors->has('deposit'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('deposit') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lease-min') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="lease-min" id="lease-min" placeholder="Enter The Minimum Lease Term (no. months)">
                                        @if ($errors->has('lease-min'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lease-min') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lease-max') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="lease-max" id="lease-max" placeholder="Enter The Maximum Lease Term (no. months)">
                                        @if ($errors->has('lease-max'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lease-max') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('available-from') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="available-from" id="available-from" placeholder="Room Available From (move in date)">
                                        @if ($errors->has('available-from'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('available-from') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('available-to') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="available-to" id="available-to" placeholder="Room Available Until (leave date)">
                                        @if ($errors->has('available-to'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('available-to') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="rooms" id="rooms" placeholder="Enter No. Of Rooms">
                                        @if ($errors->has('rooms'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('rooms') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('bathrooms') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="Enter No. Of Bathrooms">
                                        @if ($errors->has('bathrooms'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bathrooms') }}</strong>
                                            </span>
                                        @endif
                                    </div>
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
                                        <a href="{{ url('/home') }}" class="form-control btn btn-danger">Cancel</a>
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
                                    <input class="input-group-sm" type="{{ $extra->input_type }}" id="{{ $extra->slug }}" name="extra_check[]" value="{{ $extra->id }}" placeholder="{{ $extra->name }}">
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
                                    <input class="input-group-sm" type="{{ $requirement->input_type }}" id="{{ $requirement->slug }}" name="requirement_check[]" value="{{ $requirement->id }}" placeholder="{{ $requirement->name }}">
                                    <label for="{{ $requirement->slug }}">{{ $requirement->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#available-from').datepicker({

        });
    </script>
@endsection
