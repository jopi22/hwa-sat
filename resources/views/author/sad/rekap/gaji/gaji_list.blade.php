@if (Auth::user()->level < 3)
    @include('asset.sad.rekap.gaji.gaji_list')
@else
@include('home.404')
@endif