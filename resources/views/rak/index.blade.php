@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" >Data Rak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data Perpustakaan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>nomor</th>
                      <th>nama rak</th>
                      <th>lokasi</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                        @forelse ($raks as $key => $values)
                        <form action="{{route ('rak.destroy', $values->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $values->nama_rak}}</td>
                            <td>{{ $values->lokasi_rak}}</td>
                            <td>
                                <a href="#" class="btn-sm btn-info">show</a>
                                <a href="{{route('rak.edit', $values->id)}}" class="btn-sm btn-warning">edit</a>
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td>Data masih kosong</td>
                            </tr>
                        @endforelse
                    <tfoot>
                    </tfoot>
                    </table>
                  </div>
                </div>
            </div>

          </div>
        </div>
    </section>
                  <!-- /.card-body -->
  </div>
                <!-- /.card -->
                

@endsection

@push('script')
<script src="{{asset ('Template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset ('Template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset ('Template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush