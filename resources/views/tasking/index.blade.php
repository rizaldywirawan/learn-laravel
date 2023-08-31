@extends('layout.master')
@section('content')

<div><a href="{{url('/tasking/create')}}">Tambah Task</a></div>
<form action="{{url('/search')}}" method="GET">
    <input type="text" name="search" placeholder="Search ">
    <button type="submit">Search</button>
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
            <td>
                <td>
                <form action="{{url('/tasking/delete',$tasking->id)}}" method="post">
                @csrf
                @method('PATCH')
                <button><a href="{{url('/tasking/edit',$tasking->id)}}">Edit</a></button>
                @method('delete')
                <button onclick="return confirm('yakin mau dihapus?')">Delete</button>
                </td>
            </form>
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
