@extends('layouts.app')

@section('styles')
    <style>
        .output-image{
            width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="container">

            <form action="/room" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-9">
                        <div class="card mt-4">
                            <div class="card-header">Room Details</div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('greater_areas') ? ' has-error' : '' }}">
                                            <select class="form-control" name="greater_areas" id="greater_areas">
                                                <option value="" selected disabled>Select Greater Area</option>
                                                @foreach($greaterAreas as $value => $area)
                                                    <option value="{{ $area->id }}" {{ old('greater_areas') == $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('greater_areas'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('greater_areas') }}</strong>
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
                                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Enter Room Name *">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                            <label for="summernote">Description / Details</label>
                                            <textarea class="form-control" name="description" id="summernote">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('length') }}" name="length" id="length" placeholder="Enter Room Length">
                                            @if ($errors->has('length'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('length') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('width') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('width') }}" name="width" id="width" placeholder="Enter Room Width">
                                            @if ($errors->has('width'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('width') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('rent') }}" name="rent" id="rent" placeholder="Enter Monthly Rent *">
                                            @if ($errors->has('rent'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('rent') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('deposit') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('deposit') }}" name="deposit" id="deposit" placeholder="Enter Room Deposit Amount">
                                            @if ($errors->has('deposit'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('deposit') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('lease-min') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('lease-min') }}" name="lease-min" id="lease-min" placeholder="Enter The Minimum Lease Term (no. months)">
                                            @if ($errors->has('lease-min'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('lease-min') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('lease-max') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('lease-max') }}" name="lease-max" id="lease-max" placeholder="Enter The Maximum Lease Term (no. months)">
                                            @if ($errors->has('lease-max'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('lease-max') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('available-from') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('available-from') }}" name="available-from" id="available-from" placeholder="Room Available From (move in date)">
                                            @if ($errors->has('available-from'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('available-from') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('available-to') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('available-to') }}" name="available-to" id="available-to" placeholder="Room Available Until (leave date)">
                                            @if ($errors->has('available-to'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('available-to') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('rooms') }}" name="rooms" id="rooms" placeholder="Enter No. Of Rooms">
                                            @if ($errors->has('rooms'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('rooms') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('bathrooms') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" value="{{ old('bathrooms') }}" name="bathrooms" id="bathrooms" placeholder="Enter No. Of Bathrooms">
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

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('picture_1') ? ' has-error' : '' }}">
                                            <label for="picture_1">Picture One</label>
                                            <input class="form-input" type="file" name="picture_1" id="picture_1" onchange="preview_image(event, 1)" value="{{ old('picture_1') }}">
                                            @if ($errors->has('picture_1'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('picture_1') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <img class="output-image" id="output_image_1">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('picture_2') ? ' has-error' : '' }}">
                                            <label for="picture_1">Picture Two</label>
                                            <input class="form-input" type="file" name="picture_2" id="picture_2" onchange="preview_image(event, 2)" value="{{ old('picture_2') }}">
                                            @if ($errors->has('picture_2'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('picture_2') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <img class="output-image" id="output_image_2">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('picture_3') ? ' has-error' : '' }}">
                                            <label for="picture_1">Picture Three</label>
                                            <input class="form-input" type="file" name="picture_3" id="picture_3" onchange="preview_image(event, 3)" value="{{ old('picture_3') }}">
                                            @if ($errors->has('picture_3'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('picture_3') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <img class="output-image" id="output_image_3">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('picture_4') ? ' has-error' : '' }}">
                                            <label for="picture_4">Picture Four</label>
                                            <input class="form-input" type="file" name="picture_4" id="picture_4" onchange="preview_image(event, 4)" value="{{ old('picture_4') }}">
                                            @if ($errors->has('picture_4'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('picture_4') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <img class="output-image" id="output_image_4">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('picture_5') ? ' has-error' : '' }}">
                                            <label for="picture_5">Picture Five</label>
                                            <input class="form-input" type="file" name="picture_5" id="picture_5" onchange="preview_image(event, 5)" value="{{ old('picture_5') }}">
                                            @if ($errors->has('picture_5'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('picture_5') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <img class="output-image" id="output_image_5">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('picture_6') ? ' has-error' : '' }}">
                                            <label for="picture_6">Picture Six</label>
                                            <input class="form-input" type="file" name="picture_6" id="picture_6" onchange="preview_image(event, 6)" value="{{ old('picture_6') }}">
                                            @if ($errors->has('picture_6'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('picture_6') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <img class="output-image" id="output_image_6">
                                    </div>

                                </div>

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
                                @foreach($extras as $key => $extra)
                                    <div class="form-group">
                                        <input class="input-group-sm"
                                               type="{{ $extra->input_type }}"
                                               id="{{ $extra->slug }}"
                                               name="extra_check[]"
                                               value="{{ $extra->id }}"
                                               placeholder="{{ $extra->name }}"
                                               @if(is_array(old('extra_check')) && in_array($extra->id, old('extra_check'))) checked @endif>
                                        <label for="{{ $extra->slug }}">{{ $extra->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">Room Requirements</div>

                            <div class="card-body">
                                @foreach($requirements as $key => $requirement)
                                    <div class="form-group">
                                        <input class="input-group-sm"
                                               type="{{ $requirement->input_type }}"
                                               id="{{ $requirement->slug }}"
                                               name="requirement_check[]"
                                               value="{{ $requirement->id }}"
                                               placeholder="{{ $requirement->name }}"
                                               @if(is_array(old('requirement_check')) && in_array($requirement->id, old('requirement_check'))) checked @endif>
                                        <label for="{{ $requirement->slug }}">{{ $requirement->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>
@endsection

@section('scripts')
    <!-- include summernote css/js -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#available-from').datepicker({ dateFormat: 'dd-mm-yy' });
            $('#available-to').datepicker({ dateFormat: 'dd-mm-yy' });
        });

        function preview_image(event, num)
        {
            var reader = new FileReader();

            reader.onload = function()
            {
                var output = document.getElementById('output_image_' + num);
                output.src = reader.result;
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
