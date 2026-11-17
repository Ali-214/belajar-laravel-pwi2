@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        Daftar Mahasiswa S1 TRM
    </div>
    <div class="card-body">
        <ul>
            @foreach ($mahasiswa as $nama)
                <li>{{ $nama }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection