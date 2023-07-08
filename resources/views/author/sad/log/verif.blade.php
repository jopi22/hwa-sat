@if (Auth::user()->level < 3)
    @include('asset.sad.log.verif_info')
@else
    @include('home.404')
@endif
