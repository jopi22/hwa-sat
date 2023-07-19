@if (Auth::user()->level == 1)
    @include('home.developer')
@else
    @if (Auth::user()->level == 2)
        @include('home.superadmin')
    @else
        @if (Auth::user()->level == 3)
            @include('home.hrga')
        @else
            @if (Auth::user()->level == 4)
                @include('home.rental')
            @else
                @if (Auth::user()->level == 5)
                    @include('home.logistik')
                @else
                    @if (Auth::user()->level == 6)
                        @include('home.karyawan')
                    @else
                        @if (Auth::user()->level == 7)
                            @include('home.manajer')
                        @else
                            @include('home.404')
                        @endif
                    @endif
                @endif
            @endif
        @endif
    @endif
@endif
