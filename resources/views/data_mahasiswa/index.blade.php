@extends('layouts.app')
@section('title', 'Daftar Data Mahasiswa')

@section('content')
    <div class="container mt-5">
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-4">Daftar Data Mahasiswa</h2>
            <div class="text-end mb-3">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
            </div>

            @if ($mahasiswas->isEmpty())
                <div class="alert alert-warning text-center">
                    Belum ada data mahasiswa yang tersimpan.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>No. KTP</th>
                                <th>Alamat Rumah</th>
                                <th>Alamat Email</th>
                                <th>Nomor HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mahasiswa->nama_lengkap }}</td>
                                    <td>{{ $mahasiswa->no_ktp }}</td>
                                    <td>{{ $mahasiswa->alamat_rumah }}</td>
                                    <td>{{ $mahasiswa->alamat_email }}</td>
                                    <td>{{ $mahasiswa->nomor_hp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
