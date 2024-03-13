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
            <h1 class="m-0">Show All Photos</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Photos for: {{ $slug }}</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  @foreach ($photos as $item)
                        <div class="card col-sm-3" style="width: 18rem;">
                          <img src="/images/{{$item->name}}" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>{{ $item->name }}</h5>
                            <h5>{{ $item->id }}</h5>
                            <a href="{{ route("photo.destroy", ["slug" => $slug, "id" => $id, "photo_id" => $item->id]) }}" onclick="return confirm('Are you sure you want to delete this listing photo?')" class="text-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to delete image"><i class="far fa-trash-alt" style="font-size: 20px"></i></a>
                            @if ($item->featured == 1)
                              <a href="{{ route("photo.featured", ["slug" => $slug, "id" => $id, "photo_id" => $item->id]) }}" class="text-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to make featured image"><i class="ti-star" style="font-size: 20px"></i></a>                                
                            @else
                              <a href="{{ route("photo.featured", ["slug" => $slug, "id" => $id, "photo_id" => $item->id]) }}" class="text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to make featured image"><i class="ti-star" style="font-size: 20px"></i></a>                                  
                            @endif
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  {{ $photos->links() }}
                  <a href="{{ route("photo.create", ['slug'=> $slug, 'id' => $id]) }}" type="submit" class="btn btn-primary">Add An Image</a>
                </div>
              </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection