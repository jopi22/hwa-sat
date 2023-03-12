@if (Auth::user()->level < 3)
    @include('asset.sad.kar.jab_index')
@else
    kosong
@endif
