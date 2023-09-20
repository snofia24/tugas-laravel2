@extends('layouts.master')
@section('title', 'buku')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Buku</li>
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
                            <h3 class="card-title">Data Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('buku.update', $buku[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control" name="kode" id="kode_buku" placeholder="Masukan kode" value="{{ $buku[0]->kode }}">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id_buku">ID Buku</label>
                                        <input class="form-control" type="text" name="id" id="id_buku" placeholder="Masukan ID"  value="{{ $buku[0]->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_buku">Kode Buku</label>
                                        <input class="form-control" type="text" name="kode" id="kode_buku" placeholder="Masukan kode" value="{{ $buku[0]->kode }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukan judul" value="{{ $buku[0]->judul }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="penulis" name="penulis" id="penulis">Penulis</label>
                                        <input class="form-control" type="text" name="penulis" id="penulis" placeholder="Masukan nama penulis" value="{{ $buku[0]->penulis }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit" name="penerbit" id="penerbit">Penerbit</label>
                                        <input class="form-control" type="text" name="penerbit" id="penerbit" placeholder="Masukan nama penerbit" value="{{ $buku[0]->penerbit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_penerbit" name="tahun_penerbit" id="tahun_penerbit">Tahun penerbit</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input class="form-control" type="number" name="tahun_penerbit" id="tahun_penerbit" value="{{ $buku[0]->tahun_penerbit }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok" name="stok" id="stok">Stok Buku</label>
                                        <input class="form-control" type="number" name="stok" id="stok" placeholder="Masukan angka" value="{{ $buku[0]->stok }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                    @endsection
