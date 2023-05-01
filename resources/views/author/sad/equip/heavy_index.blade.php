@if (Auth::user()->level < 3)
    @include('asset.sad.equip.heavy_index')
@else
    kosong
@endif
