<div class="side-filter-card">
    <div class="filter-header text-center">
        <h3>Room Filter</h3>
    </div>
    <form>
        {{-- Location Filters --}}
        <div class="form-group">
            <select class="form-control" id="room-select" name="room-select">
                <option value="0">No. of Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="bathroom-select" name="bathroom-select">
                <option value="0">No. of Bathrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        {{-- Location Filters End --}}

        {{-- Room Detail Filters --}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="(R) min rent">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="(R) max rent">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Available From">
        </div>
        {{-- Room Detail Filters End --}}

        {{-- Room Extras Filters --}}
        <p>
            <a class="btn btn-success dropdown-toggle w-100" data-toggle="collapse" href="#collapseExtraFilters" role="button" aria-expanded="false" aria-controls="collapseExtraFilters">
                Extras / Includes
            </a>
        </p>
        <div class="collapse" id="collapseExtraFilters">
            <div class="card card-body">
                @foreach($extras as $extra)
                    <div class="form-group">
                        <input type="{{ $extra->input_type }}" id="{{ $extra->slug }}" name="{{ $extra->slug }}" placeholder="{{ $extra->name }}">
                        <label for="{{ $extra->slug }}">{{ $extra->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Room Extras Filters End --}}

        {{-- Room Requirements Filters --}}
        <p>
            <a class="btn btn-warning dropdown-toggle w-100" data-toggle="collapse" href="#collapseRequirementFilters" role="button" aria-expanded="false" aria-controls="collapseRequirementFilters">
                Requirements
            </a>
        </p>
        <div class="collapse" id="collapseRequirementFilters">
            <div class="card card-body">
                @foreach($requirements as $requirement)
                    <div class="form-group">
                        <input type="{{ $requirement->input_type }}" id="{{ $requirement->slug }}" name="{{ $requirement->slug }}" placeholder="{{ $requirement->name }}">
                        <label for="{{ $requirement->slug }}">{{ $requirement->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Room Requirements Filters End --}}

        {{-- Form Actions --}}
        <button type="submit" class="btn btn-primary w-100">Update Search</button>
        {{-- Form Actions End --}}
    </form>
</div>
