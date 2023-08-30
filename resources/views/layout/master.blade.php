<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
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
