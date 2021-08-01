
@extends('backend.layouts.master')

@section('title')
Address Page - Admin Panel
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
          Manage Addresss
        </div>
        <div class="card-body">
            @include('backend.layouts.partials.messages')
            @php 
            $count_img = App\Models\Backend\Address::select('address')->get()->count();                    
             @endphp
             @if($count_img <1 )
            <a href="#addAddressModal" data-toggle="modal" class="btn btn-info float-right mb-2">
              <i class="fa fa-plus"></i> Add New Address
            </a>
            @endif 
            <div class="clearfix"></div>
           
            <!-- Add Modal -->
            <div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    
                   
                    <h5 class="modal-title" id="exampleModalLabel">Add new address</h5>
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form action="{!! route('admin.address.store') !!}"  method="post" enctype="multipart/form-data">

                      @csrf

                      <div class="form-group">
                        <label for="address">Company address <small class="text-danger">(required)</small></label>
                        <input type="text" class="form-control" name="address"  placeholder="Company address" required>
                      </div>

                      <div class="form-group">
                        <label for="email">Company Email <small class="text-danger">(required)</small></label>
                        <input type="email" class="form-control" name="email"  placeholder="Company email" required>
                      </div>

                      <div class="form-group">
                        <label for="mobile_no">Company mobile_no <small class="text-danger">(required)</small></label>
                        <input type="text" class="form-control" name="mobile_no"  placeholder="Company mobile_no" required>
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
              <th>Address</th>
              <th>Email</th>
              <th>Mobile No</th>
              <th>Action</th>
            </tr>

            @foreach ($address as $address)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $address->address }}</td>
                <td>{{ $address->email }}</td>
                <td>{{ $address->mobile_no }}</td>
                <td>
                  <a href="#editModal{{ $address->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $address->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $address->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.address.delete', $address->id) !!}"  method="post">
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
                  
                  <!-- Edit Modal -->
                  <div class="modal fade" id="editModal{{ $address->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.address.update', $address->id) !!}"  method="post" enctype="multipart/form-data">

                          @csrf 

                          <div class="form-group">
                            <label for="address">Address                            
                              <small class="text-danger">(required)</small></label>
                            <input type="text" class="form-control" name="address" id="address"value="{{$address->address}}">
                          </div>

                          <div class="form-group">
                            <label for="email">Email                           
                              <small class="text-danger">(required)</small></label>
                            <input type="text" class="form-control" name="email" id="email"value="{{$address->email}}">
                          </div>

                          <div class="form-group">
                            <label for="mobile_no">Mobile No                           
                              <small class="text-danger">(required)</small></label>
                            <input type="text" class="form-control" name="mobile_no" id="mobile_no"value="{{$address->mobile_no}}">
                          </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </form>
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
