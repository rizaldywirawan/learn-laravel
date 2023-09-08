@extends('layout.master')
@section('content')

<h1 class="text-base font-bold justify-center items-center flex w-full ">Edit Tasking</h1>

<form method="post" action="{{url('/tasking/update',$tasking->id)}}">
@csrf
<div class="mb-2"><span class="text-base font-bold ">Tugas</span>
     <x-custom-input type="text" name="tugas" value="{{$tasking->tugas}}" />
</div>
<div class="mb-2"><span class="text-base font-bold ">Tanggal</span>
    <x-custom-input type="date" name="tanggal" value="{{$tasking->tanggal}}" />
    </div>
<div class="mb-2"><span class="text-base font-bold ">Pic</span>
    <x-custom-input type="text" name="pic" value="{{$tasking->pic}}" />
    </div>
<div class="mb-2"><span class="text-base font-bold ">status</span>
    <x-custom-input type="text" name="status" value="{{$tasking->status}}" />
    </div>
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
