@if (Auth::user()->level < 3)
    @include('asset.sad.kas.hm.sewa')
@else
    @include('home.404')
@endif
