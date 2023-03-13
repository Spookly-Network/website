<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4" style="z-index: 100">
    <div class="container">
        <a class="navbar-brand d-block d-lg-none me-auto" href="/">
            <img src="{{ asset('/images/logo/spookly-logo.png') }}" alt="" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand d-none d-lg-block" href="/">
                <img src="{{ asset('/images/logo/spookly-logo.png') }}" alt="" width="150px">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/join') }}">Join</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Unsere Spielmodi
                        </a>

                        <ul class="dropdown-menu bg-dark text-white" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item nav-link bg-dark text-white" href="{{url('/gamemode/knock-knock')}}">Knock
                                    Knock</a></li>
                            <li><a class="dropdown-item nav-link bg-dark text-white" href="{{url('/gamemode/bingo')}}">Bingo</a></li>
                            <li><a class="dropdown-item nav-link bg-dark text-white" href="{{url('/gamemode/skywars')}}">Skywars</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <form class="d-flex justify-content-center align-items-center">
                @if($status->online == true)
                    <span class="online-players text-success pe-3">
                        {{$status->players->online}} Spieler Online
                    </span>
                @else
                    <span class="online-players pe-3">
                        Server offline
                    </span>
                @endif
                <a href="https://www.patreon.com/spookly" class="btn btn-md btn-outline-danger">
                    <i class="fab fa-patreon"></i> Patreon
                </a>
            </form>
        </div>
    </div>
</nav>
