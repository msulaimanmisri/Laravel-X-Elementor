<nav class="navbar navbar-expand-lg bg-warning py-4">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="#">LaraMentor</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('page.index') ? 'active fw-bold' : '' }}"
                        href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active fw-bold' : '' }}"
                        href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
