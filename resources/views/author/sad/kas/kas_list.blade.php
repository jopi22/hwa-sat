@if (Auth::user()->level < 3)
    @include('asset.sad.kas.kas_list')
@else
    kosong
@endif
