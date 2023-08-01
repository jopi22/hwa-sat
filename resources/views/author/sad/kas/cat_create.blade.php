@if (Auth::user()->level < 3)
    @include('asset.sad.kas.cat_create')
@else
    @include('home.404')
@endif
