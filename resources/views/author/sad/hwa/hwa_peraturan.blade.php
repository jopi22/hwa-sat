@if (Auth::user()->level < 3)
    @include('asset.hwa.hwa_peraturan')
@else
    @include('home.404')
@endif
