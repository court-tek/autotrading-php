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
        <!-- form start -->
        <form method="post" action="{{ route('update', [$listing->slug, $listing->id]) }}">
          @csrf
          @method('patch')
           <div class="row">
            <!-- columns -->
            <div class="col-md-9">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
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
                          <input type="text" class="form-control" name="vin_number" value="{{ old('vin_number', $listing->vin_number) }}" id="vin_number" placeholder="Vin">
                        </div>
                        @error('vin_number')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="make">Make</label>
                          <input type="text" class="form-control" name="make" value="{{ old('make', $listing->make) }}" id="make" placeholder="Make">
                        </div>

                        <div class="form-group">
                          <label for="body_type">Body Type</label>
                          <input type="text" class="form-control" name="body_type" value="{{ old('body_type', $listing->body_type) }}" id="body_type" placeholder="Body Type">
                        </div>
                        @error('body_type')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="mileage">Mileage</label>
                          <input type="text" class="form-control" name="mileage" value="{{ old('mileage', $listing->mileage) }}" id="mileage" placeholder="Mileage">
                        </div>
                        @error('mileage')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="transmission">Transmission</label>
                          <input type="text" class="form-control" name="transmission" value="{{ old('transmission', $listing->transmission) }}" id="transmission" placeholder="Transmission">
                        </div>
                        @error('transmission')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="engine">Engine</label>
                          <input type="text" class="form-control" name="engine" value="{{ old('engine', $listing->engine) }}" id="engine" placeholder="Engine">
                        </div>
                        <div class="form-group">
                          <label for="wheel_type">Wheel Type</label>
                          <input type="text" class="form-control" name="wheel_type" value="{{ old('wheel_type', $listing->wheel_type) }}"id="wheel_type" placeholder="Wheel Type">
                        </div>
                        <div class="form-group">
                          <label for="year">Year</label>
                          <input type="text" class="form-control" name="year" value="{{ old('year', $listing->year) }}" id="year" placeholder="Year">
                        </div>
                        <div class="form-group">
                          <label for="price">Price</label>
                          <input type="text" class="form-control" name="price" value="{{ old('price', $listing->price) }}" id="price" placeholder="Price">
                        </div>
                        <div class="form-group">
                          <label for="state">State</label>
                          <select name="state" class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option value="AK" @selected( old('state', $listing->state) == 'AK')>Alaska</option>
                            <option value="CA" @selected( old('state', $listing->state) == 'CA')>California</option>
                            <option value="DE" @selected( old('state', $listing->state) == 'DE')>Delaware</option>
                            <option value="TN" @selected( old('state', $listing->state) == 'TN')>Tennessee</option>
                            <option value="TX" @selected( old('state', $listing->state) == 'TX')>Texas</option>
                            <option value="WA" @selected( old('state', $listing->state) == 'WA')>Washington</option>
                            <option value="FL" @selected( old('state', $listing->state) == 'FL')>Florida</option>
                            <option value="VA" @selected( old('state', $listing->state) == 'VA')>Virginia</option>
                            <option value="NY" @selected( old('state', $listing->state) == 'NY')>New York</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="fuel_type">Fuel Type</label>
                          <input type="text" class="form-control" name="fuel_type" value="{{ old('fuel_type', $listing->fuel_type) }}" id="fuel_type" placeholder="Fuel Type">
                        </div>
                        @error('fuel_type')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="model">Model</label>
                          <input type="text" class="form-control" name="model" value="{{ old('model', $listing->model) }}" id="model" placeholder="Model">
                        </div>
                        <div class="form-group">
                          <label for="color">Color</label>
                          <input type="text" class="form-control" name="color" value="{{ old('color', $listing->color) }}" id="color" placeholder="Color">
                        </div>
                        @error('color')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="driveline">Driveline</label>
                          <input type="text" class="form-control" name="driveline" value="{{ old('driveline', $listing->driveline) }}" id="driveline" placeholder="Driveline">
                        </div>
                        @error('driveline')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="type">Type</label>
                          <input type="text" class="form-control" name="type" value="{{ old('type', $listing->type) }}" id="type" placeholder="Sports etc">
                        </div>
                        <div class="form-group">
                          <label for="interior">Interior</label>
                          <input type="text" class="form-control" name="interior" value="{{ old('interior', $listing->interior) }}" id="interior" placeholder="Interior">
                        </div>
                        @error('interior')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="mpg">MPG</label>
                          <input type="text" class="form-control" name="mpg" value="{{ old('mpg', $listing->mpg) }}" id="mpg" placeholder="Mpg">
                        </div>
                        @error('mpg')
                          <div class="error-sub-text">
                              {{ $message }}
                          </div>    
                        @enderror
                        <div class="form-group">
                          <label for="horsepower">Horsepower</label>
                          <input type="text" class="form-control" name="horsepower" value="{{ old('horsepower', $listing->horsepower) }}" id="horsepower" placeholder="Horsepower">
                        </div>
                        <div class="form-group">
                          <label for="options">Options</label>
                          <input type="text" class="form-control" name="options" value="{{ old('options', $listing->options) }}" id="options" placeholder="Alloy wheels, Bluetooth, Headted Seats, Navigation System etc..">
                        </div>
                        <div class="form-group">
                          <label for="city">City</label>
                          <input type="text" class="form-control" name="city" value="{{ old('city', $listing->city) }}" id="city" placeholder="City">
                        </div>
                        <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" class="form-control" name="slug" value="{{ old('slug', $listing->slug) }}" id="slug" placeholder="slug">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" name="description" rows="3" placeholder="Enter description...">{{ old('description', $listing->description) }}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  {{-- <div class="card-footer">
                  </div> --}}
                </form>
              </div>
              <!-- /.card -->
            </div>
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-12">
                   <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Settings</h3>
                      </div>
                      <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                  <option selected="selected" value="draft" @selected( old('status', $listing->status) == 'draft')>Draft</option>
                                  <option value="published" @selected( old('status', $listing->status) == 'published')>Published</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <a href="{{ route('destroy', [$listing->id]) }}" type="submit" onclick="return confirm('Are you sure you want to delete this listing?')" class="text-danger pt-2 align-middle">Move To Trash</a>
                          <button type="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-12">
                   <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Format</h3>
                      </div>
                      <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <nav class="mt-2">
                                <ul class="nav nav-sidebar flex-column" role="menu" data-accordion="false">
                                  <!-- Add icons to the links using the .nav-icon class
                                       with font-awesome or any other icon font library -->
                                  <li class="nav-item menu-open">
                                    <a href="#" class="nav-link">
                                      <i class="ti-gallery text-white"></i>
                                      <p class="text-white">
                                        Images
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item menu-open">
                                    <a href="#" class="nav-link">
                                      <i class="ti-gallery text-white"></i>
                                      <p class="text-white">
                                        Images
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item menu-open">
                                    <a href="#" class="nav-link">
                                      <i class="ti-gallery text-white"></i>
                                      <p class="text-white">
                                        Images
                                      </p>
                                    </a>
                                  </li>
                            
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </form>
                    </div>
                    <!-- /.card -->
                </div>
              </div>
             
            </div>
          </div>
        </form>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection