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
                </span>User Dashboard</h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12">

              <div class="card">
                <div class="card-header bg-white">
                  <h3 class="card-title font-weight-bold">View All Post </h3>
                </div>
                <div class="card-body">
                  <table class="table table-hover table-bordered">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    @foreach($data as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td width="10%">{{ $row->name }}</td>
                        <td width="15%">{{ $row->email }}</td>
                        <td>{{ decrypt($row->password) }}</td>
                        <td width="10%">
                          <img src="img/{{ $row->image }}" alt="" class="img-fluid">
                        </td>
                        <td>{{ $row->created_at }}</td>
                        <td></td>
                        <td>
                        <button class="btn btn-sm btn-outline-info view">View</button>
                        </td>
                        <td>
                          <button class="btn btn-outline-primary btn-sm edit">Edit</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-outline-danger delete">Delete</button>
                        </td>
                      </tr>
                      @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        @include('layouts.footer_nav')
    </div>
@endsection