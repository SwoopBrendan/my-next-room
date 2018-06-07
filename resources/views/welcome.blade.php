@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://via.placeholder.com/1200x300" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://via.placeholder.com/1200x300" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://via.placeholder.com/1200x300" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{ url('/home') }}" class="btn btn-primary w-50 mt-3">Find My Next Room</a>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">

                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-header">Looking?</div>

                        <div class="card-body">
                            Are you posting or looking?
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-header">Advertising?</div>

                        <div class="card-body">
                            Are you posting or looking?
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
