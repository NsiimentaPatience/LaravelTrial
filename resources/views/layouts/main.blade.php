<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial Web</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center log">
                <img src="images/logo.jpg" alt="Logo" class="rounded-pill me-2" style="width:40px;">
                <h4>TMR<br>Hospital</h4>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <div class="navbar-nav d-flex flex-row justify-content-center">
                    <a class="nav-link px-3" href="#">Find a Doctor</a>
                    <a class="nav-link px-3" href="#">Make Appointment</a>
                    <a class="nav-link px-3" href="#">Get Care</a>
                    <a class="nav-link px-3" href="#">Services and Billing</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container-fluid">
    <div class="row">
      
      <!-- Column 1 -->
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-center text-md-start">
        <!-- Logo with Rounded Pill -->
        <img src="images/logo.jpg" alt="Company Logo" class="mb-3 rounded-pill" style="max-width: 100px;">
        <!-- Company Name -->
        <h5 class="text-uppercase mb-4">TMR Hospital</h5>
        <!-- Company Description -->

      </div>

      <!-- Column 2 -->
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase mb-4" style="color: teal;">Quick Search</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">Find Location</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">Services</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">Make an Appointment</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase mb-4" style="color: teal;">Contact</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Kira, Kampala, Uganda</li>
          <li class="mb-2"><i class="fas fa-phone me-2"></i>0775634512</li>
          <li class="mb-2"><i class="fas fa-envelope me-2"></i>tmr@gmail.com</li>
        </ul>
      </div>

      <!-- Column 4 -->
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase mb-4" style="color: teal;">Follow Us</h5>
        <div class="d-flex">
          <a href="#" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-4"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-4"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white me-4"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      
    </div>
  </div>
</footer>


</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    Stack for additional scripts
    @stack('scripts')
</html>