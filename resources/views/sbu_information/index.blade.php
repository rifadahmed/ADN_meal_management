@extends('layouts.master')
@section('content')

@push('css')
      <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=" {{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href=" {{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
@endpush

<!-- BEGIN: Page Main-->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ isset($title) ? $title : "Title Not Found" }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">{{ isset($title) ? $title : "Title Not Found" }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ isset($title) ? $title : "Title Not Found" }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Company Name</th>
                    <th>Created By</th>
                    <th>Modified By</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                    @foreach ($sub_informations as $sub_information)
                    <tr>

                      <td>{{$serial++}}</td>
                      <td>{{$sub_information->company_name}}</td>
                      <td>{{$sub_information->created_by}}</td>
                      <td>{{$sub_information->modified_by}}</td>


                      <td>
                        <a  href="{{route('sbu.edit',$sub_information->id)}}" class="btn btn-warning btn-xs">Edit</a>
                        {{--  <a data-target="#" class="btn btn-xs btn-default" href="#">Details</a>  --}}

                    </td>
                  </tr>
                    @endforeach


                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            {{--  <div class="d-flex justify-content-center">
              {!! $mealrate->links() !!}
             </div>  --}}
          </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


{{-- <div id="delete-modal" class="modal">
<div class="modal-content">
  <h4>Delete Client</h4>
  <p>Are Sure To Delete This Clients From your List</p>
</div>
<div class="modal-footer">

    <form method="post" action="#">
      {{@csrf_field()}}
      {{method_field('delete')}}
      <input type="hidden" id="id" name="id" name="_method" value="" />
      <a href="#!"  class="modal-action modal-close waves-effect waves-red btn-flat ">Disagree</a>
      <button type="submit" class="modal-action btn modal-close waves-effect waves-green btn-flat ">Agree</button>
    </form>

</div>
</div> --}}


     @push('script')
        <!-- DataTables -->
        <script src=" {{asset('plugins/datatables/jquery.dataTables.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}} "></script>
        <!-- AdminLTE App -->
          <!-- END PAGE VENDOR JS-->



          <!-- Script for Modal Delete -->
          <script>
            $('.delete-client').click(function(){
                let id = $(this).attr('data-id');
                let value = $('#id').val(id);
            });
          <!-- Script for Modal Delete -->
           $(function () {
            $("#example1").DataTable({
              "responsive": true,
              "autoWidth": false,
            });
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });

          </script>
    @endpush
@endsection
