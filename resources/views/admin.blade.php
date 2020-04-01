@extends('layouts.admin_nav')
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
                </span>Admin Dashboard </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                  <div class="card-body">
                    <a href="{{ route('admin.AllPost') }}" class="text-white">
                      <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Posts  <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">{{ \App\post::all()->count() }}</h2>
                      <h6 class="card-text">All Post By Users/Writers</h6>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <a href="" class="text-white">
                      <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Writers <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">{{ \App\writer::all()->count() }}</h2>
                      <h6 class="card-text">All Writers</h6>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <a href="" class="text-white">
                      <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Users<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">{{ \App\User::all()->count() }}</h2>
                      <h6 class="card-text">All Users</h6>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <a href="" class="text-white">
                      <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Admins<i class="mdi mdi-diamond mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">{{ \App\admin::all()->count() }}</h2>
                      <h6 class="card-text">All Admins</h6>
                    </a>
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