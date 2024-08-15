@extends('layouts/main')
@section('content')
<section class="banner-section">
  <div class="owl-carousel owl-theme">
      <div class="item" style="background-image: url('images/care (2).jpg');">
          <div class="banner-content" style="color: black;">
              <h1 style="color: teal;">Health Care Made Easy</h1>
              <p>Access to safe, convenient care when and where you need it</p>
              <a href="#" class="btn btn-outline-dark">Find a Doctor</a>
          </div>
      </div>
      <div class="item" style="background-image: url('images/immune.jpg');">
          <div class="banner-content" style="color: black;" >
              <h1 style="color: teal;">Transforming Your Care</h1>
              <p>Learn How We Drive Innovation</p>
              <a href="#" class="btn btn-light">Request Appointment</a>
          </div>
      </div>
      <div class="item" style="background-image: url('images/theatre.webp');">
          <div class="banner-content" style="color: teal;">
              <h1>Our Strength is Yours </h1>
              
              <a href="#" class="btn btn-dark">View Our Treatments</a>
          </div>
          
      </div>
  </div>
</section>
<br>
<div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0" style="color: white;">
                <h2 style="color: teal;">Healing starts here</h2>
                <br>
                <h6>The right answers the first time</h6>
                <p>Effective treatment depends on getting the right diagnosis. Our experts diagnose and treat the toughest medical challenges.</p>
                <br>
                <h4 style="color: teal;">Fourth Ranked in Uganda</h4>
                <p>TMR is ranked the fourth hospital in the nation according to the Observer.</p>
                <button type="button" class="btn btn-outline-light">Why choose TMR</button>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="images/doctor.webp" alt="Doctor Image" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 bg-transparent text-white border-0">
                <img src="images/medicine.webp" class="card-img-top img-fluid rounded" alt="medicine">
                <div class="card-body">
                    <h5 class="card-title" style="color: teal;">Treatments</h5>
                    <p class="card-text">TMR has been certified to treat all  kinds of diseases and complications.</p>
                    <br>
                    <a href="#" class="btn btn-outline-light">See Treatments</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 bg-transparent text-white border-0">
                <img src="images/nurse.webp" class="card-img-top img-fluid rounded" alt="nurse">
                <div class="card-body">
                    <h5 class="card-title" style="color: teal;">Online Appointments</h5>
                    <p class="card-text">No need to make long qeues.Make an appointment with one of our eperts at any time in any location.</p>
                    <a href="#" class="btn btn-outline-light">Schedule Now</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 bg-transparent text-white border-0">
                <img src="images/orthopedic.webp" class="card-img-top img-fluid rounded" alt="surgery">
                <div class="card-body">
                    <h5 class="card-title" style="color: teal;">Orthopedic Care</h5>
                    <p class="card-text">TMR is ranked the first in Orthopedic Care in the Nation.</p>
                    <br>
                    <a href="#" class="btn btn-outline-light">See Testimonials</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div>
    <form action="{{route('contact.store')}}" method="post" style="color: white;">
        @csrf
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="email" >Email:</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address">
        </div>
        <button type="submit" class="btn btn-light">Submit</button>

        
    </form>
</div> -->
<div class="container d-flex justify-content-center">
  <div class="col-lg-6 col-md-8 col-sm-10">
    <div class="card rounded p-4 shadow-sm bg-light" style="color: teal;">
      <h2 class="text-center" style="color: teal;">Schedule an Appointment With Us</h2>
      <br>
      <form action="{{ route('patient.store') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="name" placeholder="Enter your full name" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="appointmentDate" class="form-label">Preferred Appointment Date</label>
            <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
          </div>
        </div>
        
        <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <select class="form-select" id="department" name="department" required>
            <option selected disabled>Select Department</option>
            <option value="cardiology">Cardiology</option>
            <option value="orthopedics">Orthopedics</option>
            <option value="pediatrics">Pediatrics</option>
            <option value="dermatology">Dermatology</option>
          </select>
        </div>
        
        <div class="mb-3">
          <label for="message" class="form-label">Additional Message</label>
          <textarea class="form-control" id="message" name="message" rows="3" placeholder="Any additional information"></textarea>
        </div>
        
        <div class="text-center">
          <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 1,              
    loop: true,            
    autoplay: true,        
    autoplayTimeout: 5000, 
    autoplayHoverPause: true, 
    animateOut: 'fadeOut', 
    animateIn: 'fadeIn',   
    dots: false,           
    nav: false,            
  });
});
</script>
@endpush