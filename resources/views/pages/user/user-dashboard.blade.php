@extends('layouts.app')

@section('styles')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                @include('pages.user.user-detail-block')

            </div>

            <div class="col-md-9">

                <div class="row">

                    <div class="col-md-6">
                        <div class="card mt-4">

                            <div class="card-header">
                                Your Advertisements
                            </div>

                            <div class="card-body">

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mt-4">

                            <div class="card-header">
                                Your Favourites
                            </div>

                            <div class="card-body">

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection
