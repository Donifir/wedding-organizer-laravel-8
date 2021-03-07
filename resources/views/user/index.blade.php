
@extends('layouts.app2')

@section('content')
<div class="container">

    <a class="btn btn-primary" href="buat-penawaran" role="button">Buat Penawaran</a>

<form style="padding-top: 20px">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        @php
        $no=1;
        @endphp
        @foreach ($kerjasama as $kerjasama  )


        <tbody>
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $kerjasama ->nama_barang }}</td>
            <td>{{ $kerjasama ->harga }}</td>
            <td>
                {{ $kerjasama ->status }}
             </td>
            <td>

              <a class="btn btn-primary" href="/kerjasama/{{ $kerjasama->id }}" role="button">Detail</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </form>
</div>


@endsection

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
