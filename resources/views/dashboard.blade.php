<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

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

</body>

</html>
