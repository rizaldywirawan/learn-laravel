<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan PHP</title>
</head>
<body>
    {{-- untuk menyertakan suatu file dalam script,ini ditaruh di menjadi header --}}
    @include('layout.header')
    <div class="container">
        {{-- yield untuk isi section pada webnya --}}
        @yield('content')
    </div>
{{-- stask digunakan untuk mengelola file biasanya buat javascriptnya --}}
    @stack('scripts')
</body>
</html>
