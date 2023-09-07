
@extends('layout.master')
@section('content')

<form action="{{url('/search')}}" method="GET">
    <input type="text" name="search" placeholder="Search ">
    <button type="submit">Search</button>
</form>
<button type="submit"><a href="{{url('/')}}">Kembali</a></button>
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
