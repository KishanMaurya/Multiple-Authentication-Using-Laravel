@extends('layouts.writer_nav')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <i class="mdi" id="bannerClose"></i>
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span>Writer Dashboard</h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            
             @if(Session::has('success'))
              <div class="alert alert-success" role= "alert">
                <strong>Successfull:</strong>
                  {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            <div class="row">
              <div class="col-md-12">

              <div class="card">
                <div class="card-header bg-white">
                  <h3 class="card-title font-weight-bold">Create New Post </h3>
                </div>
                <form action="/success" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                      <label for="" class="font-weight-bold">Title:</label>
                      <div class="form-group">
                        <input type="text" name="title"  class="form-control form-control-sm" placeholder="Enter the title " required>
                      </div>
                      <label for="" class="font-weight-bold">Post-Body:</label>
                      <div class="form-group">
                        <textarea class="form-control" name="body" id=""cols="30" rows="5" placeholder="Enter the Description .." required></textarea>
                      </div>
                      <label for="" class="font-weight-bold">Image:</label>
                      <div class="form-group">
                        <input type="file" name="image" class="form-control" required>
                      </div>
                      <div class="form-group text-right">
                        <button type="submit" class="btn btn-sm btn-success">Create Post</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        @include('layouts.footer_nav')
    </div>
@endsection