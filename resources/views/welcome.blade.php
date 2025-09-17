@extends('layouts.app')
@section('title', 'Selamat Datang')

@section('content')
    <div class="text-center d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-4 shadow-sm" style="max-width: 600px;">
            <h1 class="display-4">Selamat Datang di Aplikasi Saya!</h1>
            <p class="lead">Ini adalah halaman awal aplikasi.</p>

            @guest
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Login</a>
            @else
                <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg mt-3">Ke Dashboard</a>
            @endguest
        </div>
    </div>
@endsection
