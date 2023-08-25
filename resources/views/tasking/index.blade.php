@extends('layout.master')
@section('content')

<div><a href="{{url('/tasking/create')}}">Tambah Task</a></div>
<form action="{{url('/tasking/search')}}" method="get">
    @csrf
    <input type="text" name="word" placeholder="Cari Tugas">
</form>

<table>
    <tr>
        <th>Tugas</th>
        <th>Tanggal</th>
        <th>PIC</th>
        <th>Status</th>
    </tr>
    <tbody>
        @foreach ($list_tasking as $tasking )
        <tr>
            <td>{{$tasking->tugas}}</td>
            <td>{{$tasking->tanggal}}</td>
            <td>{{$tasking->pic}}</td>
            <td>{{$tasking->status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- push template stack yg ada di master biasanya kita push js,mungkin library lainnya seperti swiper,dll --}}
    @push('scripts')
        <script>
            console.log('hallo');
        </script>
    @endpush

@endsection
