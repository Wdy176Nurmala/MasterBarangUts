<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
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
    <div class="col-md-2 offset-md-5 mt-4">
        <div class="d-grid gap-2">
            <a class="btn btn-dark" href="{{url('/ListBarang')}}">List Barang</a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
