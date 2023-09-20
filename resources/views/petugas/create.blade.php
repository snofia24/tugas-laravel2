@extends('layouts.master')
@section('title', 'petugas')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">petugas/li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Petugas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('petugas.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Petugas</label>
                                    <input class="form-control" type="text" name="id" id="id" placeholder="Masukan ID">
                                </div>
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan_petugas" id="judul" placeholder="jabatan_petugas">
                                </div>

                                <div class="form-group">
                                    <label for="no_telp_petugas" name="tlp_petugas" id="no_telp_petugas">telepon petugas</label>
                                    <input class="form-control" type="text" name="no_telp_petugas" id="no_telp_petugas" placeholder="telepon petugas">
                                </div>

                                <div class="form-group">
                                    <label for="alamat_petugas" name="alamat_petugas" id="alamat_petugas">alamat petugas</label>
                                    <input class="form-control" type="text" name="alamat_petugas" id="alamat_petugas" placeholder="alamat">
                                </div>

                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection

</html>