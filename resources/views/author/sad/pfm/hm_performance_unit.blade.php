@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.hm_performance_unit')
@else
    @include('home.404')
@endif