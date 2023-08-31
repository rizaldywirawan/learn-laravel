@extends('layout.master')
@section('content')

<h1>Edit Tasking</h1>

<form method="post" action="{{url('/tasking/update',$tasking->id)}}">
@csrf
<div>Tugas<input type="text" name="tugas" value="{{$tasking->tugas}}" /></div>
<div>Tanggal<input type="date" name="tanggal" value="{{$tasking->tanggal}}" /></div>
<div>Pic<input type="text" name="pic" value="{{$tasking->pic}}" /></div>
<div>status<input type="text" name="status" value="{{$tasking->status}}" /></div>
<div>
    <button type="submit">Update</button>
    <button><a href="/">batal</a></button>
</div>
</form>

{{-- push template stack yg ada di master biasanya kita push js,mungkin library lainnya seperti swiper,dll --}}
    @push('scripts')
        <script>
            console.log('hallo');
        </script>
    @endpush

@endsection
