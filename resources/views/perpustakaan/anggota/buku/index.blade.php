@extends('layouts.master')
@section('title','Buku')
@section('content')
{{-- {{dd($buku)}} --}}
<div class="container">
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Id</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Penerbit</th>
            <th>Stok</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($buku as $key=>$item)    
            <tr>
              <td>{{ $key + 1}}</td>
              <td>{{ $item->id }}</td>
              <td>{{ $item->kode_buku}}</td>
              <td>{{ $item->judul_buku}}</td>
              <td>{{ $item->penulis_buku}}</td>
              <td>{{ $item->penerbit_buku}}</td>
              <td>{{ $item->tahun_penerbit}}</td>
              <td>{{ $item->stok}}</td>
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