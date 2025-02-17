@extends('layouts.master')

@section('content')

@push('css')

@endpush
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create designation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Create designation</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Create designation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('designation.store')}}" method="post" id="quickForm">
                @csrf
                @include('designation._form')
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  <a href="{{route('designation.index')}}" class="btn btn-sm btn-danger">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
