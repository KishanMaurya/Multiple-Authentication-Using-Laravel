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
                  <table class="table table-hover table-responsive table-bordered">
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Create_At</th>
                      <th>Update_At</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    @foreach($posts as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td width="10%">{{ $row->title }}</td>
                        <td width="15%">{{ $row->body }}</td>
                        <td width="10%">
                          <img src="img/{{ $row->image }}" alt="" class="img-fluid">
                        </td>
                        <td>{{ $row->created_at }}</td>
                        <td></td>
                        <td>
                        <button data="{{ $row->id }}" class="btn btn-sm btn-outline-info view">View</button>
                        </td>
                        <td>
                          <button data="{{ $row->id }}" class="btn btn-outline-primary btn-sm edit">Edit</button>
                        </td>
                        <td>
                          <button data="{{ $row->id }}" class="btn btn-sm btn-outline-danger delete">Delete</button>
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


<!---Writer View model!--->

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-white">
        <div class="modal-header bg-success">
          <h4 class="modal-title text-white font-weight-bold">Writer Post View</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <table id="tableview" class="table table-hover table-bordered" width="300px" >
                
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>  

 <!---end!---> 

<!---Writer Edit!--->
   <div id="Modaledit" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
        <div class="modal-header bg-success">
          <h4 class="modal-title text-white font-weight-bold">Writer Post View</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <table class="table table-hover" id="table">
                
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div> 

  <!---end!--->
@endsection

