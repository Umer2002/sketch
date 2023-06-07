<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="index.html">
            <h1>Append</h1>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fg-link" href="{{ route('pricing_show') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://discord.com/invite/5qqzBcVv58">Cummunity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('enterprice') }}">Enterprice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-warning" href="{{ route('login') }}">Get Started</a>
                </li>
            </ul>
        </div>
    </div>
</nav>