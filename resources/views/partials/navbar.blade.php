<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: none">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/tf logo.png" alt="" width="39" height="35" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{ $active==="home" ? "active":"" }}" aria-current="page" href="/#">Home</a>
                    <a class="nav-link" href="/#about">About</a>
                    <a class="nav-link {{ $active==="posts" ? "active":"" }}" href="/posts">My blog posts</a>
                    <a class="nav-link {{ $active==="Categories" ? "active":"" }}" href="/categories">Post categories</a>
                </div>
            </div>
        </div>
    </nav>

<!-- End Navbar -->