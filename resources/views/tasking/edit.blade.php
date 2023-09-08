@extends('layout.master')
@section('content')

<h1>Edit Tasking</h1>

<form method="post" action="{{url('/tasking/update',$tasking->id)}}">
@csrf
<div>Tugas <x-custom-input type="text" name="tugas" value="{{$tasking->tugas}}" />
</div>
<div>Tanggal<x-custom-input type="date" name="tanggal" value="{{$tasking->tanggal}}" /></div>
<div>Pic<x-custom-input type="text" name="pic" value="{{$tasking->pic}}" /></div>
<div>status<x-custom-input type="text" name="status" value="{{$tasking->status}}" /></div>
<div>

    <x-button>Update</x-button>
    <x-button><a href="/">batal</a></x-button>


</div>
</form>

{{-- push template stack yg ada di master biasanya kita push js,mungkin library lainnya seperti swiper,dll --}}
    @push('scripts')
        <script>
            console.log('hallo');
        </script>
    @endpush

@endsection
