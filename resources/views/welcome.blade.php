@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://via.placeholder.com/1200x200" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://via.placeholder.com/1200x200" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://via.placeholder.com/1200x200" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                            Are you posting or looking?
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                            Are you posting or looking?
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                            Are you posting or looking?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
