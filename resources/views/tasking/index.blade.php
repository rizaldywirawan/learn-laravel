@extends('layout.master')
@section('content')

<div>
     <x-button><a href="{{url('/tasking/create')}}">Tambah Task</a></x-button>
 </div>
<form action="{{url('/')}}" method="GET">
    <x-custom-input name="search" placeholder="Search" />
    <x-button>Search</x-button>

</form>

<x-table>
    @foreach ($list_tasking as $tasking)
        <tr>
            <td>{{ $tasking->tugas }}</td>
            <td>{{ $tasking->tanggal }}</td>
            <td>{{ $tasking->pic }}</td>
            <td>{{ $tasking->status }}</td>
            <td>
                <form action="{{ url('/tasking/delete', $tasking->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <x-button><a href="{{ url('/tasking/edit', $tasking->id) }}">Edit</a></x-button>
                    @method('delete')
                    <x-button onclick="return confirm('yakin mau hapus?')">Delete</x-button>
                </form>
            </td>
        </tr>
    @endforeach
</x-table>



{{-- <x-alert :type="success" :message="Berhasil"></x-alert>
<x-alert :type="warning" :message="Periksa Lagi"></x-alert>
<x-alert :type="error" :message="gagal Periksa Lagi"></x-alert> --}}

{{-- push template stack yg ada di master biasanya kita push js,mungkin library lainnya seperti swiper,dll --}}
    @push('scripts')
        <script>
            console.log('hallo');
        </script>
    @endpush

@endsection
