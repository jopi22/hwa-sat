@if (Auth::user()->level < 3)
    @include('asset.sad.kar.kar_index')
@else
    kosong
@endif
