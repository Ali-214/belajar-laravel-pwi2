@extends('layouts.master')

@section('content')
    <div class="alert alert-primary" role="alert">
        Selamat datang di halaman about
    </div>

    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Data Diri Mahasiswa
        </div>
        <div class="card-body">
            <p class="mb-1"><strong>Nama:</strong> {{ $nama }}</p>
            <p class="mb-1"><strong>Kelas:</strong> {{ $kelas }}</p>
            <p class="mb-0"><strong>NIM:</strong> {{ $nim }}</p>
        </div>
    </div>
@endsection