@extends('layout.master')
@section('content')
<form method="post" action="{{url('/tasking')}}">
    @csrf
    <div>
        <span>Tugas</span>
               <x-custom-input name="Tugas" placeholder="isi Tugas" />

    </div>
    <div>
        <span>Tanggal</span>
        <x-custom-input type="date" name="tanggal" placeholder="Tanggal Isi" />

    </div>
    <div>
        <span>PIC</span>
        <x-custom-input name="pic" placeholder="isi Nama Anda" />

    </div>
    <div>
        <span>Status</span>
        <x-custom-input name="Tugas" placeholder="Isis Status Pengerjaan Anda" />

    </div>
    <div> <x-button>Simpan</x-button> </div>
</form>

    @push('scripts')
        <script>
            console.log('test masuk create');
        </script>
    @endpush
@endsection
