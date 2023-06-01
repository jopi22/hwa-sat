@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.pengabs.pengabs_index')
@else
@include('home.404')
@endif
