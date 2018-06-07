<div class="side-filter-card">
    <form>
        {{-- Location Filters --}}
        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        {{-- Location Filters End --}}

        {{-- Room Detail Filters --}}
        <div class="form-group">
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="(R) min rent">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="(R) max rent">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Available From">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="No. Rooms">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="No. Bathrooms">
        </div>
        {{-- Room Detail Filters End --}}

        {{-- Room Extras Filters --}}
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExtraFilters" role="button" aria-expanded="false" aria-controls="collapseExtraFilters">
                Room Extras / Includes
            </a>
        </p>
        <div class="collapse" id="collapseExtraFilters">
            <div class="card card-body">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-single-bed" name="filter-single-bed">
                    <label class="form-check-label" for="filter-single-bed">Single Bed</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-double-bed" name="filter-double-bed">
                    <label class="form-check-label" for="filter-double-bed">Double bed</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-queen-bed" name="filter-queen-bed">
                    <label class="form-check-label" for="filter-queen-bed">Queen Bed</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-king-bed" name="filter-king-bed">
                    <label class="form-check-label" for="filter-king-bed">King Bed</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-en-suite" name="filter-en-suite">
                    <label class="form-check-label" for="filter-en-suite">En-Suite</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-include-electricity" name="filter-include-electricity">
                    <label class="form-check-label" for="filter-include-electricity">Include Electricity</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-include-water" name="filter-include-water">
                    <label class="form-check-label" for="filter-include-water">Include Water</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-include-wi-fi" name="filter-include-wi-fi">
                    <label class="form-check-label" for="filter-include-wi-fi">Include Wi-Fi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-include-cleaning-products" name="filter-include-cleaning-products">
                    <label class="form-check-label" for="filter-include-cleaning-products">Include Cleaning Products</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-weekly-cleaning" name="filter-weekly-cleaning">
                    <label class="form-check-label" for="filter-weekly-cleaning">Weekly Cleaning</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-include-linen" name="filter-include-linen">
                    <label class="form-check-label" for="filter-include-linen">Include Linen</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-smoking-friendly" name="filter-smoking-friendly">
                    <label class="form-check-label" for="filter-smoking-friendly">Smoking Friendly</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-420-friendly" name="filter-420-friendly">
                    <label class="form-check-label" for="filter-420-friendly">420 Friendly</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-" name="filter-">
                    <label class="form-check-label" for="filter-">Filter</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-" name="filter-">
                    <label class="form-check-label" for="filter-">Filter</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter-" name="filter-">
                    <label class="form-check-label" for="filter-">Filter</label>
                </div>
            </div>
        </div>
        {{-- Room Extras Filters End --}}

        {{-- Room Requirements Filters --}}
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        {{-- Room Requirements Filters End --}}

        {{-- Form Actions --}}
        <button type="submit" class="btn btn-primary">Update Search</button>
        {{-- Form Actions End --}}
    </form>
</div>
