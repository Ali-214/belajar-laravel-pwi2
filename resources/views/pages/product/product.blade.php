@extends('layouts.master')

@section('content')
    <h2 class="mb-3">Daftar Produk Kami</h2>

    <div class="row">
        @foreach ($produk as $item)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item['harga'] }}</h6>
                        <p class="card-text">{{ $item['deskripsi'] }}</p>
                        <button type="button" class="btn btn-primary">Beli</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection