<header>
    <!-- Header Start -->
    <div class="header-area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('usertheme/assets/img/logo/logo1.PNG') }}" alt="Logo" class="img-fluid" style="max-width: 150px; height: 100px;">
                </a>
                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Main-menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="row ms-auto w-100"> <!-- Added row and ms-auto for grid alignment -->
                        <div class="col text-end"> <!-- Ensures right alignment -->
                            <ul class="navbar-nav d-flex justify-content-end">
                                <li class="nav-item mx-2"><a class="nav-link" href="{{ url('#Home') }}">Home</a></li>
                                <li class="nav-item mx-2"><a class="nav-link" href="{{ url('#About') }}">About</a></li>
                                <li class="nav-item mx-2"><a class="nav-link" href="{{ url('#Speciality') }}">Specialities</a></li>
                                <li class="nav-item mx-2"><a class="nav-link" href="{{ url('#Doctor') }}">Doctors</a></li>
                                <li class="nav-item mx-2"><a class="nav-link" href="{{ url('#Contact') }}">Contact Us</a></li>
                                
                                <!-- Authentication Links -->
                                @if (Auth::id())
                                    <li class="nav-item mx-2">
                                        <x-app-layout class="nav-link" style="padding: 0;"></x-app-layout>
                                    </li>
                                @else
                                    <li class="nav-item mx-2"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                                    <li class="nav-item mx-2"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header End -->
</header>

<!-- Include Bootstrap JS (make sure to include Popper.js as well) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<!-- Custom CSS -->
<!-- Custom CSS -->
<style>
    /* Override default navbar styles */
    .navbar-nav .nav-link {
        font-size: 18px; /* Increase font size */
        font-weight: bold; /* Make text bold */
        color: #000; /* Text color */
        transition: color 0.3s; /* Smooth color transition */
    }

    .navbar-nav .nav-link:hover {
        color: #92071a; /* Hover color */
    }

    /* Remove hover effect for small devices */
    @media (max-width: 991.98px) { /* Bootstrap's breakpoint for lg */
        .navbar-nav .nav-link:hover {
            color: #000; /* Set to original color */
            transition: none; /* Remove transition */
            transform: none; /* Prevent scaling on hover */
        }
    }
</style>
