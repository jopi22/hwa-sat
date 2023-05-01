@if (Auth::user()->level < 3)
    @include('asset.sad.abs.pengabs_index')
@else
    kosong
@endif
