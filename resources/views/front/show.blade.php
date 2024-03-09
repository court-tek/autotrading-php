<!-- resources/views/child.blade.php -->
@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <?php 
        $location = basename($_SERVER["REQUEST_URI"]); 
        // $result = str_ireplace("%20"," ", $location);
        // // foreach ($car["thumbnails"] as $thumbnail) {
        // //     echo "$thumbnail";
        // // }
        // $image_1 = $car["thumbnails"][6];
    
        // die(var_dump($image_1));
    ?>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb__grid">
                <li class="breadcrumb__item"><a href="/">Home</a></li>
                <span class="breadcrumb__divider" style="">/</span>
                <li class="breadcrumb__item"><a href="/listings/Skyline%20R34/">Shop cars similar to this {{ $listing->title }}</a></li>
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
                                <div class="listing__arrow"><i class="ti-angle-left"></i></div>
                                <div class="listing__arrow"><i class="ti-angle-right"></i></div>
                                <div class="listing__image-1" style='background-image: url("{{ url("/images/1709938036-mazda_rx7_1.jpeg") }}")'></div>
                            </div>
                        </div>
                        <div class="listing__thumbnails">
                            @foreach ($photos as $thumbnail)
                                <div class="listing__thumb-image" style="background-image: url('{{ url("/images/$thumbnail") }}')"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="listing__details-column">
                    <div class="listing__condition">Used</div>
                    <h3 class="listing__title">{{ $listing->title }}</h3>
                    <h4 class="listing__price">${{ $listing->price }}</h4>
                    <h4 class="listing__status"><i class="fas fa-fire"></i> Hot Car – this car is popular and expected to sell soon.</h4>
                    <div class="listing__save-item listing__save--active"><i class="fas fa-heart"></i> <span class="listing__saved-status"></span></div>
                    <div class="listing__more-details">
                        <div class="listing__info">
                            <label for="vin">Vin</label>
                            <h5 name="vin">{{ $listing->vin_number }}</h5>
                        </div>
                        <div class="listing__info">
                            <label for="mileage">Mileage</label>
                            <h5 name="mileage">{{ $listing->mileage }} mi</h5>
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