@if (Auth::user()->level < 3)
    @include('asset.sad.gaji.gaji_list')
@else
    kosong
@endif
