<!-- resources/views/child.blade.php -->
@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <?php 
        $location = basename($_SERVER["REQUEST_URI"]); 
        $result = str_ireplace("%20"," ", $location);
        
        // die(var_dump($cars));
    ?>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb__grid">
                <li class="breadcrumb__item"><a href="/">Home</a></li>
                <span class="breadcrumb__divider" style="">/</span>
                <li class="breadcrumb__item"><a href="/listings/Skyline%20R34/">Shop other used 2023 Subaru WRXs</a></li>
                <span class="breadcrumb__divider" style="">/</span>
                <li class="breadcrumb__item breadcrumb--active" aria-current="page">Used 2023 {{ $result }}</li>
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
            <section class="listing__media-column">
                <div class="listing__gallery">
                    <div class="listing__slider">
                        <div class="listing__main-image">
                            <div class="listing__left-arrow"><i class="ti-angle-left"></i></div>
                            The main image goes here.
                            <div class="listing__right-arrow"><i class="ti-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="listing__thumbnails">
                        <div class="listing__thumb-image">image thumbnails go here.</div>
                    </div>
                </div>
                <div class="listing__details-column">
                    <div class="listing__condition">Used</div>
                    <h3 class="listing__title">2023 Acura NSX Type S</h3>
                    <h4 class="listing__price">$123,500</h4>
                    <div class="listing__more-details">
                        <div class="listing__info">
                            <label for="vin">Vin</label>
                            <h5 name="vin">4Y1SL65848Z411439</h5>
                        </div>
                        <div class="listing__info">
                            <label for="mileage">Mileage</label>
                            <h5 name="mileage">42,000 mi</h5>
                        </div>
                        <div class="listing__info">
                            <label for="transmission">Transmission</label>
                            <h5 name="transmission">9 Spd Dual Clutch</h5>
                        </div>
                        <div class="listing__info">
                            <label for="fuel">Fuel</label>
                            <h5 name="fuel">Hybrid</h5>
                        </div>
                        <div class="listing__info">
                            <label for="color">Color</label>
                            <h5 name="color">Red</h5>
                        </div>
                        <div class="listing__info">
                            <label for="driveline">Driveline</label>
                            <h5 name="driveline">All Wheel Drive</h5>
                        </div>
                        <div class="listing__info">
                            <label for="type">Type</label>
                            <h5 name="type">Sports</h5>
                        </div>
                        <div class="listing__info">
                            <label for="interior">Interior</label>
                            <h5 name="interior">Black leather</h5>
                        </div>
                        <div class="listing__info">
                            <label for="mpg">MPG</label>
                            <h5 name="mpg">19-26</h5>
                        </div>
                    </div>
                    <div class="listing__description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi saepe ad vitae consectetur cum soluta ratione possimus accusantium consequatur molestias nihil perspiciatis veniam minima, repudiandae eos. Aut, odio cum.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection