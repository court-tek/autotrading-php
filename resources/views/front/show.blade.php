<!-- resources/views/child.blade.php -->
@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <?php 
        $location = basename($_SERVER["REQUEST_URI"]); 
        $result = str_ireplace("%20"," ", $location);
        // foreach ($car["thumbnails"] as $thumbnail) {
        //     echo "$thumbnail";
        // }
        $image_1 = $car["thumbnails"][6];
    
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
                <li class="breadcrumb__item"><a href="/listings/Skyline%20R34/">Shop other used 2023 NSX Type S</a></li>
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
            <section class="listing__content-area">
                <div class="listing__media-column">
                    <div class="listing__gallery">
                        <div class="listing__slider">
                            <div class="listing__main-image">
                                <div class="listing__arrow"><i class="ti-angle-left"></i></div>
                                <div class="listing__arrow"><i class="ti-angle-right"></i></div>
                                <div class="listing__image-1" style='background-image: url("{{ url("$image_1") }}")'></div>
                            </div>
                        </div>
                        <div class="listing__thumbnails">
                            @foreach ($car["thumbnails"] as $thumbnail)
                                <div class="listing__thumb-image" style="background-image: url('{{ url("$thumbnail") }}')"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="listing__details-column">
                    <div class="listing__condition">Used</div>
                    <h3 class="listing__title">2023 Acura NSX Type S</h3>
                    <h4 class="listing__price">$123,500</h4>
                    <h4 class="listing__status"><i class="fas fa-fire"></i> Hot Car – this car is popular and expected to sell soon.</h4>
                    <div class="listing__save-item listing__save--active"><i class="fas fa-heart"></i> <span class="listing__saved-status"></span></div>
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
                            <h5 name="transmission">9-Speed Automatic</h5>
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
                        <p>2023 NSX Type S Local Trade, BLUETOOTH HANDS FREE, BACK UP CAMERA, KEYLESS ENTRY, LEATHER, PREMIUM SOUND, PREMIUM WHEELS, 11 Speakers, Exterior Parking Camera Rear, Navigation System, Power driver seat, Power moonroof, Power steering, Power windows, Remote keyless entry, Steering wheel mount ed audio controls.Odometer is 647 miles below market average! CARFAX One-Owner. Clean CARFAX. 19/26 City/Highway.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection