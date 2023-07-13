@if (Auth::user()->level < 3)
    @include('asset.sad.kas.adjust')
@else
    @include('home.404')
@endif
