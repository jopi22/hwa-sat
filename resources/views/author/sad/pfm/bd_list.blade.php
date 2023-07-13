@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.bd_list')
@else
    @include('home.404')
@endif
