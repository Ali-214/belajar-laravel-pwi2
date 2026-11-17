@extends('layouts.master')

@section('content')
    <div class="alert alert-primary" role="alert">
        Selamat datang di halaman contact
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Hubungi Kami</h5>
            <p class="card-text">Silakan hubungi kami melalui informasi kontak atau formulir di bawah ini:</p>
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
@endsection