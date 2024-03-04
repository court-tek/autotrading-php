<!-- resources/views/child.blade.php -->
@extends('layouts.admin.app')
 
@section('title', 'Edit Listing')
 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Listing</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Enter Title">
                      </div>
                      <div class="form-group">
                        <label for="vin_number">Vin Number</label>
                        <input type="text" class="form-control" value="{{ old('vin_number') }}" id="vin_number" placeholder="Vin">
                      </div>
                      <div class="form-group">
                        <label for="make">Make</label>
                        <input type="text" class="form-control" value="{{ old('make') }}" id="make" placeholder="Make">
                      </div>
                      <div class="form-group">
                        <label for="body_type">Body Type</label>
                        <input type="text" class="form-control" value="{{ old('body_type') }}" id="body_type" placeholder="Body Type">
                      </div>
                      <div class="form-group">
                        <label for="mileage">Mileage</label>
                        <input type="text" class="form-control" value="{{ old('mileage') }}" id="mileage" placeholder="Mileage">
                      </div>
                      <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <input type="text" class="form-control" value="{{ old('transmission') }}" id="transmission" placeholder="Transmission">
                      </div>
                      <div class="form-group">
                        <label for="engine">Engine</label>
                        <input type="text" class="form-control" value="{{ old('engine') }}" id="engine" placeholder="Engine">
                      </div>
                      <div class="form-group">
                        <label for="wheel_type">Wheel Type</label>
                        <input type="text" class="form-control" value="{{ old('wheel_type') }}" id="wheel_type" placeholder="Wheel Type">
                      </div>
                      <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" value="{{ old('year') }}" id="year" placeholder="Year">
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" value="{{ old('price') }}" id="price" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label>Minimal</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Alabama</option>
                          <option value="AK" @selected( old('state') == 'AK')>Alaska</option>
                          <option value="CA" @selected( old('state') == 'CA')>California</option>
                          <option value="DE" @selected( old('state') == 'DE')>Delaware</option>
                          <option value="TN" @selected( old('state') == 'TN')>Tennessee</option>
                          <option value="TX" @selected( old('state') == 'TX')>Texas</option>
                          <option value="WA" @selected( old('state') == 'WA')>Washington</option>
                          <option value="FL" @selected( old('state') == 'FL')>Florida</option>
                          <option value="VA" @selected( old('state') == 'VA')>Virginia</option>
                          <option value="NY" @selected( old('state') == 'NY')>New York</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <input type="text" class="form-control" value="{{ old('fuel_type') }}" id="fuel_type" placeholder="Fuel Type">
                      </div>
                      <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" value="{{ old('model') }}" id="model" placeholder="Model">
                      </div>
                      <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" value="{{ old('color') }}" id="color" placeholder="Color">
                      </div>
                      <div class="form-group">
                        <label for="driveline">Driveline</label>
                        <input type="text" class="form-control" value="{{ old('driveline') }}" id="driveline" placeholder="Driveline">
                      </div>
                      <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" value="{{ old('type') }}" id="type" placeholder="Sports etc">
                      </div>
                      <div class="form-group">
                        <label for="interior">Interior</label>
                        <input type="text" class="form-control" value="{{ old('interior') }}" id="interior" placeholder="Interior">
                      </div>
                      <div class="form-group">
                        <label for="mpg">MPG</label>
                        <input type="text" class="form-control" value="{{ old('mpg') }}" id="mpg" placeholder="Mpg">
                      </div>
                      <div class="form-group">
                        <label for="horsepower">Horsepower</label>
                        <input type="text" class="form-control" value="{{ old('horsepower') }}" id="horsepower" placeholder="Horsepower">
                      </div>
                      <div class="form-group">
                        <label for="options">Options</label>
                        <input type="text" class="form-control" value="{{ old('options') }}" id="options" placeholder="Alloy wheels, Bluetooth, Headted Seats, Navigation System etc..">
                      </div>
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" value="{{ old('city') }}" id="city" placeholder="City">
                      </div>
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