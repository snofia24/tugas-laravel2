@extends('layouts.master')
@section('title', 'detail anggota')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
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
                            <h3 class="card-title">Data Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input disabled type="text" class="form-control" name="kode" id="kode_anggota" placeholder="Masukan kode" value="{{ $anggota[0]->kode }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input disabled type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" value="{{ $anggota[0]->nama }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <input disabled type="text" class="form-control" name="jk" id="jk" placeholder="" value="{{ $anggota[0]->jk }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input disabled type="text" class="form-control" name="jurusan" id="jurusan" placeholder="" value="{{ $anggota[0]->jurusan }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input disabled type="number" class="form-control" name="no" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka" value="{{ $anggota[0]->no }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat" disabled>{{ $anggota[0]->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('anggota.index') }}" class="btn btn-primary">Back</a>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                    @endsection