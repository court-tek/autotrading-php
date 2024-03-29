@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <?php 
        $location = basename($_SERVER["REQUEST_URI"]); 
    ?>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb__grid">
                <li class="breadcrumb__item"><a href="/">Home</a></li>
                <span class="breadcrumb__divider" style="">/</span>
                <li class="breadcrumb__item"><a href="{{ route('front.index', ['body_type' => $listing->body_type, 'make' => $listing->make, 'model' => $listing->model, 'state' => $listing->state]) }}">Shop cars similar to this {{ $listing->title }}</a></li>
                <span class="breadcrumb__divider" style="">/</span>
                <li class="breadcrumb__item breadcrumb--active" aria-current="page">{{ $listing->title }}</li>
            </ol>
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="listing">
        <div class="container">
            <section class="listing__content-area">
                <div class="listing__media-column">
                    <div class="listing__gallery">
                        <div class="listing__slider">
                            <div class="listing__main-image">
                                <div class="listing__arrow arrow-left"><i class="ti-angle-left"></i></div>
                                <div class="listing__arrow arrow-right"><i class="ti-angle-right"></i></div>
                                <div class="listing__image-slider" style=""></div>
                            </div>
                        </div>
                        <div class="listing__thumbnails">
                            @foreach ($photos as $thumbnail)
                                <div class="listing__thumb-image" id="{{ $id }}" style="background-image: url('{{ url("/images/$thumbnail->name") }}')"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="listing__details-column">
                    <div class="listing__condition">{{ $listing->condition }}</div>
                    <h3 class="listing__title">{{ $listing->title }}</h3>
                    <h4 class="listing__price">${{ Helper::formatNumber($listing->price) }}</h4>
                    <h4 class="listing__status"><i class="fas fa-fire"></i> Hot Car – this car is popular and expected to sell soon.</h4>
                    <div class="listing__save-item listing__save--active"><i class="fas fa-heart"></i> <span class="listing__saved-status"></span></div>
                    <div class="listing__more-details">
                        <div class="listing__info">
                            <label for="vin">Vin</label>
                            <h5 name="vin">{{ $listing->vin_number }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="mileage">Mileage</label>
                            <h5 name="mileage">{{ Helper::formatNumber($listing->mileage) }} mi</h5>
                        </div>
                        <div class="listing__info">
                            <label for="transmission">Transmission</label>
                            <h5 name="transmission">{{ $listing->transmission }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="fuel">Fuel</label>
                            <h5 name="fuel">{{ $listing->fuel_type }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="color">Color</label>
                            <h5 name="color">{{ $listing->color }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="driveline">Driveline</label>
                            <h5 name="driveline">{{ $listing->driveline }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="type">Type</label>
                            <h5 name="type">{{ $listing->type }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="interior">Interior</label>
                            <h5 name="interior">{{ $listing->interior }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="mpg">MPG</label>
                            <h5 name="mpg">{{ $listing->mpg }}</h5>
                        </div>
                    </div>
                    <div class="listing__description">
                        <p>{{ $listing->description }}</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis accusamus veniam rerum voluptate in ipsam distinctio nihil officia possimus commodi ut cumque consequatur.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection