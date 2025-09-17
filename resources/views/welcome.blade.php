<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="text-center">
        <h1 class="display-4">Selamat Datang di Aplikasi Saya!</h1>
        <p class="lead">Ini adalah halaman awal aplikasi.</p>

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Login</a>
        @else
            <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg mt-3">Ke Dashboard</a>
        @endguest
    </div>

</body>

</html>
