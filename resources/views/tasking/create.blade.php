@extends('layout.master')
@section('content')
<form method="post" action="{{url('/tasking')}}">
    @csrf
    <div>
        <span>Tugas</span>
        <input type="text" name="tugas">
    </div>
    <div>
        <span>Tanggal</span>
        <input type="text" name="tanggal">
    </div>
    <div>
        <span>PIC</span>
        <input type="text" name="pic">
    </div>
    <div>
        <span>Status</span>
        <input type="text" name="status">
    </div>
    <div><button type="submit">Simpan</button> </div>
</form>

    @push('scripts')
        <script>
            console.log('test masuk create');
        </script>
    @endpush
@endsection
