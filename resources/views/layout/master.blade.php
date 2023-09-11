<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
<body class="w-screen h-screen">
    {{-- untuk menyertakan suatu file dalam script,ini ditaruh di menjadi header --}}
    @include('sweetalert::alert')
    <div class=" w-full h-full p-4">
    @include('layout.header')
        {{-- yield untuk isi section pada webnya --}}
        @yield('content')
    </div>
{{-- stask digunakan untuk mengelola file biasanya buat javascriptnya --}}
    @stack('scripts')
</body>
</html>
