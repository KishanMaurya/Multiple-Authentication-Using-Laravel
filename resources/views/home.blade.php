@extends('layouts.user_nav')
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
                </span>User Dashboard</h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-bold mb-3">Total Post By User<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h1 class="mb-5 font-weight-bold">
                      {{ \App\post::where('post_id',Auth::user()->id)->count() }}
                    </h1>
                    <h6 class="card-text font-weight-bold">All User Post</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Traffic Sources</h4>
                    <canvas id="traffic-chart"></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @include('layouts.footer_nav')
    </div>
@endsection