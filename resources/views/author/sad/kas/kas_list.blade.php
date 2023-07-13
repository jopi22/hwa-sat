@if (Auth::user()->level < 3)
    @include('asset.sad.kas.kas_list')
@else
    @include('home.404')
@endif
