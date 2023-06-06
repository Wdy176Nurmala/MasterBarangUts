<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container m-5">
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/ftoo.jpg') }}" alt="image">
    </div>
    <div class="container">
        <h1 class="text-center">Welcome to My Website</h1>
        <h2 class="text-center">Biodata Mahasiswa</h2>
        <ul class="list-group mx-auto" style="max-width: 300px;">
            <li class="list-group-item">Nama: Widya Nurmala</li>
            <li class="list-group-item">NIM: 1204200033</li>
            <li class="list-group-item">Program Studi: Sistem Informasi</li>
        </ul>
    </div>
</body>
</html>
