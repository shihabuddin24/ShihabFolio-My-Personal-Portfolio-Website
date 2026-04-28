<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="javascript:void(0)">
            <img class="header-logo" src="{{ asset('assets/images/web-logo.png') }}" alt="">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>

            <div class="button mt-2 mt-lg-0">
                <a href="{{ asset('assets/files/shihab-uddin-cv.pdf') }}" download class="btn custom-btn"><i class="fa-solid fa-download me-1"></i>Download CV</a>
            </div>
        </div>
    </div>
</nav>
