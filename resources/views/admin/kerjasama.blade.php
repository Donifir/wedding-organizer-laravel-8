@extends('layouts.index')

@section('konten')


    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($kerjasama as $kerjasamas)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $kerjasamas->nama_barang}}</td>
                    <td>{{ $kerjasamas->harga}}</td>
                    <td>{{ $kerjasamas->status}}</td>

                    <td><a href="#" class="btn btn-info  stretched-link">Detail</a></td>
                    {{-- <td><a href="/produk/{{ $produks->id}}" class="btn btn-info  stretched-link">Detail</a></td> --}}
                </tr>
          @endforeach
        </tbody>
      </table>

</form>


</div>
@endsection
