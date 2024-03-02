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
                <li class="breadcrumb-item active" aria-current="page">Listings</li>
            </ol>
            <h2 class="breadcrumb__page-title">Listings</h2>
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
            <section class="listing__filter">
                <div class="form-group listing__price">
                    <label for="">Price</label>
                    <select name="min-price" class="listing__min-price">
                        <option value="1000">0</option>
                    </select>
                    <select name="max-price" class="listing__max-price">
                        <option value="1000">1000</option>
                    </select>
                </div>
                <div class="form-group listing__make">
                    <label for="">Make</label>
                    <select name="make" class="listing__make">
                        <option value="subaru">Subaru</option>
                    </select>
                </div>
            </section>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection