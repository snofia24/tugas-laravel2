@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Welcome</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
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
                            
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Data Anggota</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>

                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, sequi?</p>
                                    <a href="{{ route('get_anggota') }}" class="btn btn-primary">Click me</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Data Buku</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, asperiores!</p>
                                    <a href="{{ route('get_buku') }}" class="btn btn-primary">Click me</a>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Data Petugas</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Lorem ipsum dolor sit amet.</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, asperiores!</p>
                                    <a href="{{ route('get_petugas') }}" class="btn btn-primary">Click me</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
@endsection