<!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar d-none d-lg-block">
            <div class="container px-0">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="me-4 text-light"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="me-4 text-light"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="#" class="text-light"><i class="fas fa-envelope text-primary me-2"></i>priya@gmail.com</a>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-square border rounded-circle nav-fill"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary display-4">Priya</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="testimonial.html" class="nav-item nav-link">Testimonials</a>
                            <a href="gallery.html" class="nav-item nav-link">Photo gallery</a>
                            <a href="contact.html" class="nav-item nav-link">Contact us</a>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>
                            @endauth

                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="team.html" class="dropdown-item">Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                                    <a href="404.html" class="dropdown-item">404 page</a>
                                </div> -->
                            </div>
                            <!-- <a href="contact.html" class="nav-item nav-link">Contact Us</a> -->
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <button class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                            <a href="index.html" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Book Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<!-- Navbar End -->