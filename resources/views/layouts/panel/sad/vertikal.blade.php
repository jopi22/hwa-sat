<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>

    {{-- HEAD SIDEBAR --}}
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('dash') }}">
            <div class="d-flex align-middle py-3">
                <img src="{{ asset('assets/img/logos/hubstaff.png') }}" alt="" width="30" height="30" />
                <span class="font-sans-serif">HWA SAT</span>
            </div>
        </a>
    </div>

    {{-- SIDEBAR --}}
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                @if (Auth::user()->level == 1)
                    @include('layouts.sidebar.sidebar_sad')
                @else
                    @if (Auth::user()->level == 2)
                        @include('layouts.sidebar.sidebar_sad')
                    @else
                        @if (Auth::user()->level == 3)
                            @include('layouts.sidebar.sidebar_hrga')
                        @else
                            @if (Auth::user()->level == 4)
                                @include('layouts.sidebar.sidebar_rental')
                            @else
                                @if (Auth::user()->level == 5)
                                    @include('layouts.sidebar.sidebar_log')
                                @else
                                @endif
                            @endif
                        @endif
                    @endif
                @endif


            </ul>
        </div>
    </div>
</nav>
