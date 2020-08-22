<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
                <img class="logo-dark" src="{{ asset('images/logo/cmsblog100.png') }}" alt="logo">
                <img class="logo-light" src="{{ asset('images/logo/cmsblog-reg100.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">

                <li class="nav-item">
                    <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pages <span class="arrow"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog <span class="arrow"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Shop <span class="arrow"></span></a>
                </li>

                <li class="nav-item nav-mega">
                    <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
                </li>

                <li class="nav-item nav-mega">
                    <a class="nav-link" href="#">UI Kit <span class="arrow"></span></a>
                </li>

            </ul>
        </section>
        <a href="{{ route('login') }}" class="btn btn-xs btn-round btn-info">Login</a>
    </div>
</nav><!-- /.navbar -->
