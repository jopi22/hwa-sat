@if (Auth::user()->level < 3)
    @include('asset.sad.abs.master_index')
@else
    kosong
@endif
