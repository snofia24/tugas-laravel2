@extends('layouts.master')
@section('title', 'anggota')
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
                        <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode_anggota" placeholder="Masukan Kode" value="{{ $anggota[0]->kode }}">
                                    @error('kode')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan nama" value="{{ $anggota[0]->nama }}">
                                    @error('nama')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="custom-select @error('jk') is-invalid @enderror" name="jk" value="{{ $anggota[0]->jk }}">
                                        <option selected disabled></option>
                                        <option value="Laki-laki">LAKI-LAKI</option>
                                        <option value="perempuan">PEREMPUAN</option>
                                    </select>
                                    @error('jk')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="" value="{{ $anggota[0]->jurusan }}">
                                    @error('jurusan')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="no" placeholder="Masukan Angka" value="{{ $anggota[0]->no }}">
                                    @error('tlp')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat">{{ $anggota[0]->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('anggota.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                    @endsection