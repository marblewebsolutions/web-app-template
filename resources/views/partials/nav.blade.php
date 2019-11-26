<nav class="nav">
    <div class="container">
        <div class="logo-container">
            <h1 class="logo">{{ config('app.name') }}</h1>
        </div>

        <div class="nav-links" id="nav-links">
            @guest
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endif
            @else
                <p class="inline">Hello, {{ Auth::user()->name }}</p>

                <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>

        <a class="menu-toggle" data-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <div class="menu-button">
                Menu
            </div>
        </a>
    </div>
</nav>
