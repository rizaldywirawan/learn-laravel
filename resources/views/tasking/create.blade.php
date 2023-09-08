@extends('layout.master')
@section('content')
<form method="post" action="{{url('/tasking')}}">
    @csrf
    <div class="mb-2">
        <span class="text-base font-bold ">Tugas</span>
               <x-custom-input name="tugas" placeholder="isi Tugas" />

    </div>
    <div class="mb-2">
        <span class="text-base font-bold ">Tanggal</span>
        <x-custom-input type="date" name="tanggal" placeholder="Tanggal Isi" />

    </div>
    <div class="mb-2">
        <span class="text-base font-bold ">PIC</span>
        <x-custom-input name="pic" placeholder="isi Nama Anda" />

    </div>
    <div class="mb-2">
        <span class="text-base font-bold ">Status</span>
        <x-custom-input name="status" placeholder="Isis Status Pengerjaan Anda" />

    </div>
    <div> <x-button>Simpan</x-button> </div>
</form>

    @push('scripts')
        <script>
            console.log('test masuk create');
        </script>
    @endpush
@endsection
