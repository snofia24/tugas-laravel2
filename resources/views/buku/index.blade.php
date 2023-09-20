@extends('layouts.master')

@section('title', 'Data Buku')


@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Table Data buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>id buku</th>
                                    <th>kode buku</th>
                                    <th>judul</th>
                                    <th>penulis</th>
                                    <th>penerbit</th>
                                    <th>tahun terbit</th>
                                    <th>stok</th>
                                    <th>Actiom</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->kode }}</td>
                                    <td>{{ $value->judul }}</td>
                                    <td>{{ $value->penulis }}</td>
                                    <td>{{ $value->penerbit }}</td>
                                    <td>{{ $value->tahun_penerbit }}</td>
                                    <td>{{ $value->stok }}</td>
                                    <td>
                                        <a href="" class="btn-sm btn-info">Show</a>
                                        <a href="" class="btn-sm btn-warning">Edit</a>
                                        <a href="" class="btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td>Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>

@endsection


@push('script')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush