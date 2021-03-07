
@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('kerjasama') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $kerjasama -> nama_barang }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('image') }}/{{ $kerjasama->gambar }}" class="rounded mx-auto d-block" width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $kerjasama -> nama_barang }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ $kerjasama -> harga }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>{{ $kerjasama -> status }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $kerjasama -> keterangan }}</td>
                                    </tr>
                                </tbody>
                                <table>

                                    <td><a class="btn btn-primary" href="/kerjasama/{{ $kerjasama->id }}/edit" role="button">Edit</a></td>
                                    <td> <button class="btn btn-danger" type="submit">Delete</button></td>
                                </table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

