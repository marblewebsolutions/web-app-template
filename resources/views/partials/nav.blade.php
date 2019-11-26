<nav class="nav">
    <div class="container">
        <div class="logo-container">
            <h1 class="logo">BrandName</h1>
        </div>

        <div class="nav-links">
            <a class="nav-link" href="/">Home</a>

            @if (Route::has('login'))
                @auth
                    <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </div>

        <a class="menu-toggle">
            <div class="menu-button">
                Menu
            </div>
        </a>
    </div>
</nav>