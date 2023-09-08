
@extends('layout.master')
@section('content')

<x-button><a href="{{url('/')}}">Kembali</a></x-button>

<x-table>
    @foreach ($list_tasking as $tasking)
        <tr>
            <td>{{ $tasking->tugas }}</td>
            <td>{{ $tasking->tanggal }}</td>
            <td>{{ $tasking->pic }}</td>
            <td>{{ $tasking->status }}</td>

        </tr>
    @endforeach
</x-table>


{{-- push template stack yg ada di master biasanya kita push js,mungkin library lainnya seperti swiper,dll --}}
    @push('scripts')
        <script>
            console.log('hallo');
        </script>
    @endpush

@endsection
