@if (Auth::user()->level < 3)
    @include('asset.hwa.hwa_edit')
@else
    @include('home.404')
@endif
