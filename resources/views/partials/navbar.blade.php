<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ Request::is('blog*') ? 'active' : '' }}" href="/blog">Blog</a>
                <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">Category</a>
            </div>

            <div class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout <i
                                            class="bi bi-box-arrow-in-right"></i></button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a href="/login#sign-in" class="nav-link">Sign In <i class="bi bi-box-arrow-in-left"></i></a>
                @endauth
            </div>
        </div>
    </div>
</nav>
