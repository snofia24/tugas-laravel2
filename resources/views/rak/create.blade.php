@extends('layouts.master')
@section('title', 'rak')
    @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0"></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Rak</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title">Data Rak</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route ('rak.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Rak</label>
                  <input type="text" class="form-control" name="nama_rak" id="exampleInputPassword1" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Lokasi Rak</label>
                  <input type="text" class="form-control" name="lokasi_rak" id="exampleInputPassword1" placeholder="Masukan Lokasi">
                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Next</button>
              </div>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    @endsection