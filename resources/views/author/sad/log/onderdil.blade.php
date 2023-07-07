@if (Auth::user()->level < 3)
    @include('asset.sad.log.ond_list')
@else
    @include('home.404')
@endif
