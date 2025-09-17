@extends('layouts.app')
@section('title', 'Input Data Mahasiswa')

@section('content')
    <div class="container mt-5">
        <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
            <h2 class="text-center mb-4">Input Data Mahasiswa</h2>

            {{-- Menampilkan pesan sukses --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Menampilkan pesan error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('data-mahasiswa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                        value="{{ old('nama_lengkap') }}">
                </div>
                <div class="mb-3">
                    <label for="no_ktp" class="form-label">No. KTP</label>
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ old('no_ktp') }}">
                </div>
                <div class="mb-3">
                    <label for="alamat_rumah" class="form-label">Alamat Rumah</label>
                    <textarea class="form-control" id="alamat_rumah" name="alamat_rumah" rows="3">{{ old('alamat_rumah') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat_email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="alamat_email" name="alamat_email"
                        value="{{ old('alamat_email') }}">
                </div>
                <div class="mb-3">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
