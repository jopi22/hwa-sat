@if (Auth::user()->level < 3)
    @include('asset.sad.kas.cat_list')
@else
    kosong
@endif
