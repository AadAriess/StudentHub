@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="container mt-5">
        <div class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
            <h2 class="text-center mb-4">Dashboard</h2>
            <p class="text-center">Selamat datang, {{ Auth::user()->name }}!</p>
            <hr>
            <div class="d-grid gap-2">
                <a href="{{ route('data-mahasiswa.create') }}" class="btn btn-primary">Input Data Mahasiswa</a>
                <a href="{{ route('data-mahasiswa.index') }}" class="btn btn-info">Lihat Data Mahasiswa</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100 mt-2">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
