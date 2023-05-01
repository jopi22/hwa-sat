@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.rekap_index')
@else
    kosong
@endif
