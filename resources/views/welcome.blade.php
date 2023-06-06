<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1>Daftar Makanan</h1>

    <ul class="flex items-center">
        @foreach ($makanans as $makanan)
            <img src={{ $makanan->gambar }}
            width="100" />

            <li>{{ $makanan->nama }} - Rp. {{
            number_format($makanan->harga) }}</li>
        @endforeach   
        </ul>
    
</body>
</html>