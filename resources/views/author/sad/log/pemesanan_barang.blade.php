@if (Auth::user()->level < 3)
    @include('asset.sad.log.pemesanan_barang')
@else
    @if (Auth::user()->level == 5)
        @include('asset.sad.log.pemesanan_barang')
    @else
        @include('home.404')
    @endif
@endif

