@extends('layouts.master')
@section('title','Anggota')
@section('content')
{{-- {{dd($anggota)}} --}}
<div class="container">
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Id</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>No Telp</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($anggota as $key=>$item)    
            <tr>
              <td>{{ $key + 1}}</td>
              <td>{{ $item->id }}</td>
              <td>{{ $item->kode_anggota}}</td>
              <td>{{ $item->nama_anggota}}</td>
              <td>{{ $item->jk_anggota}}</td>
              <td>{{ $item->jurusan_anggota}}</td>
              <td>{{ $item->no_telp_anggota}}</td>
              <td>{{ $item->alamat_anggota}}</td>
            </tr>
            @empty
                <tr>
                    Data is empty
                </tr>
            @endforelse
        </tbody>
      </table>
    </div>
</div>
@endsection