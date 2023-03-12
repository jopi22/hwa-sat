@if (Auth::user()->level < 3)
    @include('asset.sad.mas.mas_generate')
@else
    @include('home.404')
@endif
