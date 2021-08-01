
@extends('backend.layouts.master')

@section('title')
Subscribe Page - Admin Panel
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
          Manage Subscribes
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped">
            <tr>
              <th>Sl</th>
              <th>Email</th>
              <th>Action</th>
            </tr>

            @foreach ($subcribe as $subcribe)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $subcribe->email }}</td>
                <td>
                  <a href="" data-toggle="modal" class="btn btn-danger">Delete</a>
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
