
@extends('backend.layouts.master')

@section('title')
Board of Directors Page - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection


@section('admin-content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Board of Directors
        </div>
        <div class="card-body">
            <a href="#addLogoModal" data-toggle="modal" class="btn btn-info float-right mb-2">
              <i class="fa fa-plus"></i> Add Board of Directors
            </a>
            <div class="clearfix"></div>
           
            <!-- Add Modal -->
            <div class="modal fade" id="addLogoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    
                   
                    <h5 class="modal-title" id="exampleModalLabel">Add Board of Directors</h5>
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form action="{!! route('admin.bod.store') !!}"  method="post" enctype="multipart/form-data">

                      @csrf

                      <div class="form-group">
                        <label for="name">Name<small class="text-danger">*</small></label>
                        <input type="text" class="form-control" name="name"  placeholder="Name" required>
                      </div>

                      <div class="form-group">
                        <label for="designation">Name<small class="text-danger">*</small></label>
                        <input type="text" class="form-control" name="designation"  placeholder="Designation" required>
                      </div>

                      <div class="form-group">
                        <label for="image">Image<small class="text-danger">*</small></label>
                        <input type="file" class="form-control" name="image"  placeholder="Image" required>
                      </div>

                      <div class="form-group">
                        <label for="fb">Facebook Link</label>
                        <input type="text" class="form-control" name="fb"  placeholder="facebook link" >
                      </div>

                      <div class="form-group">
                        <label for="tw">Twitter Link</label>
                        <input type="text" class="form-control" name="tw"  placeholder="Twitter link" >
                      </div>

                      <div class="form-group">
                        <label for="in">Linked Link</label>
                        <input type="text" class="form-control" name="in"  placeholder="LinkedIn link" >
                      </div>

                      <div class="form-group">
                        <label for="ints">Instagram Link</label>
                        <input type="text" class="form-control" name="ints"  placeholder="Instagram link" >
                      </div>

                      

                      <button type="submit" class="btn btn-success">Add New</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </form>

                  </div>
                </div>
              </div>
            </div>


          <table class="table table-hover table-striped">
            <tr>
              <th>Sl</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Image</th>
              <th>Action</th>
            </tr>

            @foreach ($bod as $bod)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $bod->name }}</td>
                <td>{{ $bod->designation }}</td>
                <td>
                  <img src="{{ asset('upload/student_images/'.$bod->image) }}" style="width:200px; height:100px;">
                </td>
                <td>
                  <a href="#editModal{{ $bod->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $bod->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                   <!-- Edit Modal -->
                   <div class="modal fade" id="editModal{{ $bod->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to edit?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.bod.update', $bod->id) !!}"  method="post" enctype="multipart/form-data">

                          @csrf 

                          <div class="form-group">
                            <label for="name">Title Text<small class="text-danger">(*)</small></label>
                            <input type="text" class="form-control" name="name" required value="{{$bod->name}}">
                          </div>

                          <div class="form-group">
                            <label for="designation">Designation<small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="designation" required value="{{$bod->designation}}">
                          </div>


                          <div class="form-group">
                            <label for="image">Previous image                            
                              <small class="text-danger">*</small></label>
                              <img src="{{ asset('upload/student_images/'.$bod->image) }}" style="width:200px; height:100px;">
                          </div>

                        <div class="form-group">
                          <label for="image">New Image<small class="text-danger">*</small></label>
                          <input type="file" class="form-control" name="image"  placeholder="New Image" >
                        </div>
                        
                        <div class="form-group">
                        <label for="fb">Facebook Link</label>
                        <input type="text" class="form-control" name="fb"  value="{{$bod->fb}}" >
                      </div>

                      <div class="form-group">
                        <label for="tw">Twitter Link</label>
                        <input type="text" class="form-control" name="tw"  value="{{$bod->tw}}" >
                      </div>

                      <div class="form-group">
                        <label for="in">Linked Link</label>
                        <input type="text" class="form-control" name="in"  value="{{$bod->in}}" >
                      </div>

                      <div class="form-group">
                        <label for="ints">Instagram Link</label>
                        <input type="text" class="form-control" name="ints"  value="{{$bod->ints}}" >
                      </div>
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- edit modal -->

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $bod->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.bod.delete', $bod->id) !!}"  method="post">
                            @csrf 
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                 


                </td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
