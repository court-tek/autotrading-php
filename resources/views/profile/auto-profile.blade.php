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
                <li class="breadcrumb__item breadcrumb--active" aria-current="page">Profile Settings</li>
            </ol>

            <h2 class="breadcrumb__page-title">Account Info</h2>
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
    <div class="profile">
        <div class="container">
            <div class="profile__info">
                <p>Name: <span>{{ auth()->user()->name }}</span></p>
                <p>Email: <span>{{ auth()->user()->email }}</span> <span>verified</span></p>
                <button class="listings__update">edit your info</button>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')
                    
                    <input type="submit" class="profile__destroy" value="Delete your account">
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- content  -->
    <!-- ============================================================== -->
@endsection