<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            BD
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#who-we-are">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                @if(Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin_dashboard')}}">Dashboard</a>
                </li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{route('user_profile')}}">Profile</a>
                      <form id="logout" method="post" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('logout').submit();">logout</a>
                    </form>
                    </div>
                </div>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>

                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
