<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="{{ url('/') }}">
            <img class="header-logo" src="{{ asset('assets/images/web-logo.png') }}" alt="">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
                <li class="nav-item dropdown custom-dropdown">
                    <a class="nav-link dropdown-toggle" href="#">
                        Pages <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu custom-dropdown-menu">
                        <li>
                            <a class="dropdown-item fw-bold" href="{{ url('/projects') }}">
                                Projects<i class="fa-solid fa-angle-right float-end"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fw-bold" href="{{ url('/about') }}">
                                About<i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fw-bold active" href="{{ url('/blogs') }}">
                                Blogs<i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>

            <div class="button mt-2 mt-lg-0">
                <a href="{{ asset('assets/files/shihab-uddin-cv.pdf') }}" download class="btn custom-btn"><i
                        class="fa-solid fa-download me-1"></i>Download CV</a>
            </div>
        </div>
    </div>
</nav>
