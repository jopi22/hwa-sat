@if (Auth::user()->level < 3)
    @include('asset.sad.log.liq_list')
@else
    @include('home.404')
@endif
