<!-- resources/views/child.blade.php -->
@extends('layouts.front.app')
 
@section('title', 'Realestate App')
 
@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">listings</li>
            </ol>
            <h2 class="breadcrumb__page-title">listings</h2>
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
                <div class="form-group listings__price">
                    <label for="">New/used</label>
                    <select name="min-price" class="listings__min-price">
                        <option value="new_used">New & used</option>
                        <option value="new_used">New</option>
                        <option value="used">Used</option>
                        <option value="certified">Certified</option>
                    </select>
                </div>
                <div class="form-group listings__price">
                    <label for="">Price</label>
                    <select name="min-price" class="listings__min-price">
                        <option value="1000">0</option>
                    </select>
                    <select name="max-price" class="listings__max-price">
                        <option value="1000">1000</option>
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
            </section>
            <section class="listings__sort-view">
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
            </section>
            <section class="listings__grid">

            </section>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection