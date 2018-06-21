<div class="side-filter-card">
    <div class="filter-header text-center">
        <h3>Room Filter</h3>
    </div>
    <form action="room" method="GET">
        {{ csrf_field() }}

        <div class="form-group">
            <select class="form-control" name="greater_areas" id="greater_areas">
                <option value="" selected disabled>Select Greater Area</option>
                @foreach($greaterAreas as $value => $area)
                    <option {{ old('greater_areas') == $area->id ? 'selected' : '' }} value="{{ $area->id }}">{{ $area->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="locations" id="locations">
                <option value="" selected disabled>Select Suburb</option>
                @foreach($locations as $value => $location)
                    <option {{ old('locations') == $location->id ? 'selected' : '' }} value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('locations'))
                <span class="help-block">
                    <strong>{{ $errors->first('locations') }}</strong>
                </span>
            @endif
        </div>

        {{-- Room Detail Filters --}}
        <div class="form-group">
            <input type="text" class="form-control" name="min_rent" id="min_rent" placeholder="(R) min rent" value="{{ old('min_rent') }}">
            @if ($errors->has('min_rent'))
                <span class="help-block">
                    <strong>{{ $errors->first('min_rent') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="max_rent" id="max_rent" placeholder="(R) max rent" value="{{ old('max_rent') }}">
            @if ($errors->has('max_rent'))
                <span class="help-block">
                    <strong>{{ $errors->first('max_rent') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="available_from" id="available_from" placeholder="Available From" value="{{ old('available_from') }}">
        </div>
        {{-- Room Detail Filters End --}}

        {{-- Form Actions --}}
        <button type="submit" class="btn btn-primary w-100">Update Search</button>
        {{-- Form Actions End --}}
    </form>
</div>
