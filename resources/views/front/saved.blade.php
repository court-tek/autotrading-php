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
                <li class="breadcrumb__item breadcrumb--active" aria-current="page">Saved Listings</li>
            </ol>
            <h2 class="breadcrumb__page-title">Saved Listings</h2>
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="saved">
        <div class="container">
            <section class="saved__sort-view">
                <div class="saved__grid">
                    <div class="saved__unsave-all">Remove all listed cars</div>
                    <div class="saved__count">18 matches</div>
                    <div class="form-group saved__price">
                        <label for="">Sort By</label>
                        <select name="min-price" class="saved__min-price">
                            <option value="new_used">Best Match</option>
                            <option value="new_used">Lowest Price</option>
                            <option value="used">Lowest Mileage</option>
                            <option value="certified">Hiest Mileage</option>
                            <option value="certified">Nearest Location</option>
                        </select>
                    </div>
                </div>
            </section>
            <section class="saved__grid">
                @foreach ($cars as $car)
                    <div class="saved__item">
                        <div class="saved__image">
                            <div class="saved__saved-date">Saved on March 3, 2024</div>
                            <div class="saved__unsave"><i class="fas fa-trash-alt"></i></div>
                        </div>
                        <div class="saved__details">
                            <h5 class="saved__condition">Used</h5>
                            <h5 class="saved__title">
                                <a href="/saved/1/Skyline%20R34/">2018 {{ $car }}</a>
                            </h5>
                            <h5 class="saved__mileage">23,000 mi</h5>
                            <h5 class="saved__payments">Est. $513/mo</h5>
                            <h5 class="saved__carfax">Get the CarFax Report <i class="ti-arrow-top-right"></i></h5>
                            <h5 class="saved__seller">Hanania of Orange Park</h5>
                            <h6 class="saved__city"><i class="fas fa-map-marker-alt"></i> Jacksonville, FL</h6>
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