<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link"href="/contact">Contact</a></li>
        </ul>
        <div class="text-right my-2 my-lg-0">
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a  href="{{ url('/home') }}">{{ Auth::user()->username }}</a>
                    @else
                        <a class="mr-sm-0 btn btn-basic" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="my-2 my-sm-0 btn btn-basic" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 
        </div>
    </div>     
</nav>