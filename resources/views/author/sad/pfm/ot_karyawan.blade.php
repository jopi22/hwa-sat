@if (Auth::user()->level < 3)
    @include('asset.sad.pfm.ot_karyawan')
@else
    @if (Auth::user()->level == 4)
        @include('asset.sad.pfm.ot_karyawan')
    @else
        @include('home.404')
    @endif
@endif
