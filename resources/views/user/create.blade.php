
@extends('layouts.app2')

@section('content')
<div class="container">

    <form role="form" style="max-width: 90%" action="/kerjasama" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
            <label>Nama Produk</label>
            <input class="form-control" name="nama_barang">
                @error("nama_barang")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input class="form-control" name="harga">
                @error("harga")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input class="form-control" name="keterangan">
                 @error("keterangan")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar">
                @error("gambar")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
</div>



@endsection

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
