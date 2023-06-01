@if (Auth::user()->level < 3)
    @include('asset.sad.kar.akun_index')
@else
    @include('home.404')
@endif
