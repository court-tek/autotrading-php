<!-- resources/views/child.blade.php -->
@extends('layouts.admin.app')
 
@section('title', 'Admin Dashboard')
 
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
            <h1 class="m-0">Show All Listings</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Vin</th>
                      <th>Price</th>
                      <th>Featured</th>
                      <th>Status</th>
                      <th>Engine</th>
                      <th>Driveline</th>
                      <th>Horsepower</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($listings as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                          <a href="{{ route('edit', [$item->slug, $item->id]) }}">{{ $item->title }}</a></td>
                        </td>
                        <td>{{ $item->vin_number }}</td>
                        <td>${{ $item->price}}</td>
                        <td>
                          @if ($item->featured == 1)
												    <a class="text-capitalize text-white badge badge-success p-2">Featured</a>
                          @else
                            <a class="text-capitalize text-white badge badge-primary p-2">No</span></a>
                          @endif
                        <td>
                          @if ($item->status == "published")
												    <a class="text-capitalize text-white badge badge-success p-2">{{ $item->status }}</a>
                          @else
                            <a class="text-capitalize text-white badge badge-primary p-2">{{ $item->status }}</span></a>
                          @endif
                        </td>
                        <td>{{ $item->engine }}</td>
                        <td>{{ $item->driveline }}</td>
                        <td>{{ $item->horsepower }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-left">
                  {{ $listings->links() }}
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection