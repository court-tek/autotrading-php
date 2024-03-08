<!-- resources/views/child.blade.php -->
@extends('layouts.admin.app')
 
@section('title', 'Create A Listing')
 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add An Image</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- whole column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="{{ route('photo.store', ['slug' => $slug, 'id' => $id]) }}">
                @csrf
                <div class="card-body d-flex justify-content-center" style="padding: 50px;">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="">
                        <input type="file" class="btn btn-lg btn-primary" name="image">
                      </div>
                      @error('image')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection