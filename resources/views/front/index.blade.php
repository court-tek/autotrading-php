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
                <li class="breadcrumb__item breadcrumb--active" aria-current="page">Listings</li>
            </ol>
            <h2 class="breadcrumb__page-title">Listings for {{ $result }}</h2>
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="listings">
        <div class="container">
            <section class="listings__filter">
                <div class="form-group listings__condition">
                    <label for="condition">New/used</label>
                    <select name="condition" class="listings__condition-select">
                        <option value="new_used">New & used</option>
                        <option value="new_used">New</option>
                        <option value="used">Used</option>
                        <option value="certified">Certified</option>
                    </select>
                </div>
                <div class="form-group listings__price">
                    <label for="min_price">Min Price</label>
                    <select name="min_price" class="listings__min-price">
                        <option value="2000">2000</option>
                        <option value="4000">4000</option>
                        <option value="6000">6000</option>
                    </select>
                </div>
                <div class="form-group listings__price">
                    <label for="max_price">Max Price</label>
                    <select name="max_price" class="listings__max-price">
                        <option value="2000">2000</option>
                        <option value="4000">4000</option>
                        <option value="6000">6000</option>
                    </select>
                </div>
                <div class="form-group listings__make">
                    <label for="">Make</label>
                    <select name="make" class="listings__make">
                        <option value="subaru">Subaru</option>
                    </select>
                </div>
                <div class="form-group listings__model">
                    <label for="">Model</label>
                    <select name="make" class="listings__model">
                        <option value="wrx">WRX</option>
                    </select>
                </div>
                <div class="form-group listings__model">
                    <label for="">Mileage</label>
                    <select name="make" class="listings__model">
                        <option value="10000">10,000 or less</option>
                        <option value="10000">20,000 or less</option>
                    </select>
                </div>
                <div class="form-group listings__miles-from">
                    <label for="">Miles From Zip</label>
                    <select name="make" class="listings__model">
                        <option value="wrx">50 Miles</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" style="color: white;">button</label>
                    <button class="listings__update">update</button>
                </div>
            </section>
            <section class="listings__sort-view">
                <div class="listings__grid">
                    <div class="listings__count">18 matches</div>
                    <div class="form-group listings__price">
                        <label for="">Sort By</label>
                        <select name="min-price" class="listings__min-price">
                            <option value="new_used">Best Match</option>
                            <option value="new_used">Lowest Price</option>
                            <option value="used">Lowest Mileage</option>
                            <option value="certified">Hiest Mileage</option>
                            <option value="certified">Nearest Location</option>
                        </select>
                    </div>
                </div>
            </section>
            <section class="listings__grid">
                @foreach ($cars as $car)
                    <div class="listings__item">
                        <div class="listings__image">
                            <div class="listings__price">$21000</div>
                            <div class="listings__save"><i class="fas fa-heart"></i></div>
                        </div>
                        <div class="listings__details">
                            <h5 class="listings__condition">Used</h5>
                            <h5 class="listings__title">
                                <a href="/listings/1/Skyline%20R34/">2018 {{ $car }}</a>
                            </h5>
                            <h5 class="listings__mileage">23,000 mi</h5>
                            <h5 class="listings__payments">Est. $513/mo</h5>
                            <h5 class="listings__carfax">Get the CarFax Report <i class="ti-arrow-top-right"></i></h5>
                            <h5 class="listings__seller">Hanania of Orange Park</h5>
                            <h6 class="listings__city"><i class="fas fa-map-marker-alt"></i> Jacksonville, FL</h6>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection