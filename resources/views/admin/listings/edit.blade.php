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
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fas fa-check"></i> {{session('success')}}
              </div>
            @endif
            @if (session()->has('error'))
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> {{session('error')}}</h5>
              </div>
            @endif
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
          <!-- whole column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('listing') }}" >
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title', $listing->title) }}" id="title" placeholder="Enter Title">
                      </div>
                      @error('title')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="vin_number">Vin Number</label>
                        <input type="text" class="form-control" name="vin_number" value="{{ old('title', $listing->vin_number) }}" id="vin_number" placeholder="Vin">
                      </div>
                      @error('vin_number')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="make">Make</label>
                        <input type="text" class="form-control" name="make" value="{{ old('title', $listing->make) }}" id="make" placeholder="Make">
                      </div>

                      <div class="form-group">
                        <label for="body_type">Body Type</label>
                        <input type="text" class="form-control" name="body_type" value="{{ old('title', $listing->body_type) }}" id="body_type" placeholder="Body Type">
                      </div>
                      @error('body_type')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="mileage">Mileage</label>
                        <input type="text" class="form-control" name="mileage" value="{{ old('title', $listing->mileage) }}" id="mileage" placeholder="Mileage">
                      </div>
                      @error('mileage')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <input type="text" class="form-control" name="transmission" value="{{ old('title', $listing->transmission) }}" id="transmission" placeholder="Transmission">
                      </div>
                      @error('transmission')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="engine">Engine</label>
                        <input type="text" class="form-control" name="engine" value="{{ old('title', $listing->engine) }}" id="engine" placeholder="Engine">
                      </div>
                      <div class="form-group">
                        <label for="wheel_type">Wheel Type</label>
                        <input type="text" class="form-control" name="wheel_type" value="{{ old('title', $listing->wheel_type) }}"id="wheel_type" placeholder="Wheel Type">
                      </div>
                      <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" name="year" value="{{ old('title', $listing->year) }}" id="year" placeholder="Year">
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ old('title', $listing->price) }}" id="price" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label for="state">State</label>
                        <select name="state" class="form-control select2" style="width: 100%;">
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
                        <input type="text" class="form-control" name="fuel_type" value="{{ old('title', $listing->fuel_type) }}" id="fuel_type" placeholder="Fuel Type">
                      </div>
                      @error('fuel_type')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" name="model" value="{{ old('title', $listing->model) }}" id="model" placeholder="Model">
                      </div>
                      <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" name="color" value="{{ old('title', $listing->color) }}" id="color" placeholder="Color">
                      </div>
                      @error('color')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="driveline">Driveline</label>
                        <input type="text" class="form-control" name="driveline" value="{{ old('title', $listing->driveline) }}" id="driveline" placeholder="Driveline">
                      </div>
                      @error('driveline')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" value="{{ old('title', $listing->type) }}" id="type" placeholder="Sports etc">
                      </div>
                      <div class="form-group">
                        <label for="interior">Interior</label>
                        <input type="text" class="form-control" name="interior" value="{{ old('title', $listing->interior) }}" id="interior" placeholder="Interior">
                      </div>
                      @error('interior')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="mpg">MPG</label>
                        <input type="text" class="form-control" name="mpg" value="{{ old('title', $listing->mpg) }}" id="mpg" placeholder="Mpg">
                      </div>
                      @error('mpg')
                        <div class="error-sub-text">
                             {{ $message }}
                        </div>    
                      @enderror
                      <div class="form-group">
                        <label for="horsepower">Horsepower</label>
                        <input type="text" class="form-control" name="horsepower" value="{{ old('title', $listing->horsepower) }}" id="horsepower" placeholder="Horsepower">
                      </div>
                      <div class="form-group">
                        <label for="options">Options</label>
                        <input type="text" class="form-control" name="options" value="{{ old('title', $listing->options) }}" id="options" placeholder="Alloy wheels, Bluetooth, Headted Seats, Navigation System etc..">
                      </div>
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" value="{{ old('title', $listing->city) }}" id="city" placeholder="City">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description...">{{ old('description', $listings->descriptions) }}</textarea>
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