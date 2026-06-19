@extends('layouts.app')

@section('title', 'Cambridge Guest House — Comfortable Stays in Mandaue, Cebu')

@section('content')
  <!-- ===================== NAVBAR ===================== -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#home">
        <img src="assets/logo.png" alt="Cambridge Guest House Logo" class="logo-circle-frame" />
        <span class="navbar-brand-text text-white">Cambridge Guest House</span>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-4 gap-2">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#amenities">Amenities</a></li>
          <li class="nav-item"><a class="nav-link" href="#rooms">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
            <a class="btn btn-brand px-4 rounded-pill" href="#contact">Book Now</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===================== HERO ===================== -->
  <header class="hero" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <span class="hero-badge mb-4"><i class="bi bi-geo-alt-fill"></i> Mandaue City, Cebu</span>
          <h1 class="mb-3">Your Comfortable Home Away From Home</h1>
          <p class="lead mb-4">Experience warm Cebuano hospitality at Cambridge Guest House — spacious queen-bed rooms, complimentary breakfast, and a prime location just minutes from Mactan Island and central Cebu.</p>
          <div class="d-flex flex-wrap gap-3">
            <a href="#rooms" class="btn btn-brand btn-lg px-4 rounded-pill"><i class="bi bi-door-open me-2"></i>View Rooms</a>
            <a href="#contact" class="btn btn-outline-light btn-lg px-4 rounded-pill"><i class="bi bi-calendar-check me-2"></i>Reserve a Stay</a>
          </div>
          <div class="d-flex flex-wrap gap-4 mt-5">
            <div><i class="bi bi-cup-hot-fill text-warning me-1"></i> Free Breakfast</div>
            <div><i class="bi bi-wifi text-warning me-1"></i> Fiber Wi-Fi</div>
            <div><i class="bi bi-p-square-fill text-warning me-1"></i> Free Parking</div>
            <div><i class="bi bi-snow text-warning me-1"></i> Air Conditioned</div>
          </div>
        </div>
      </div>
    </div>
    <a href="#about" class="scroll-indicator" aria-label="Scroll down"><i class="bi bi-chevron-double-down"></i></a>
  </header>

  <!-- ===================== ABOUT ===================== -->
  <section id="about" style="background:var(--cream);">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 reveal">
          <div class="row g-3" style="min-height:440px;">
            <div class="col-7">
              <img src="assets/9b94a340-a412-477b-90e1-b56698fbfd66.png" alt="Cozy hotel bedroom interior" class="about-img" />
            </div>
            <div class="col-5 d-flex flex-column gap-3">
              <img src="assets/67056bd0-546b-4113-bc72-e5ab1cbc5b45.jpg" alt="Hotel lounge area" class="about-img" style="height:48%;" />
              <img src="assets/d93ef6db-775e-4c84-89c3-44d66b72a5af.jpg" alt="Comfortable hotel room detail" class="about-img" style="height:48%;" />
            </div>
          </div>
        </div>
        <div class="col-lg-6 reveal">
          <span class="section-eyebrow">Welcome to Cambridge</span>
          <h2 class="section-title mt-2 mb-3">A Restful Stay in the Heart of Mandaue</h2>
          <hr class="divider mb-4" />
          <p class="text-secondary mb-4">Cambridge Guest House offers clean, comfortable, and affordable accommodations designed for families, groups, and travelers exploring Cebu. Our generously sized queen-bed rooms comfortably fit groups of four to six guests, making us ideal for family getaways and barkada trips alike.</p>
          <p class="text-secondary mb-4">With quick bridge access to Mactan Island and a location close to shopping malls and food districts, everything you need is just a short ride away. Enjoy genuine local hospitality, modern conveniences, and a peaceful place to rest your head.</p>
          <div class="row text-center text-md-start g-4">
            <div class="col-4">
              <div class="stat-num">24/7</div>
              <div class="text-muted small">Front Desk</div>
            </div>
            <div class="col-4">
              <div class="stat-num">6 pax</div>
              <div class="text-muted small">Max per Room</div>
            </div>
            <div class="col-4">
              <div class="stat-num">100%</div>
              <div class="text-muted small">Cebuano Warmth</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== AMENITIES ===================== -->
  <section id="amenities">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <span class="section-eyebrow">What We Offer</span>
        <h2 class="section-title mt-2">Comforts & Amenities</h2>
        <hr class="divider mx-auto mt-3" />
        <p class="text-secondary mx-auto" style="max-width:620px;">Everything you need for a relaxing and connected stay, included with every booking.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4 reveal">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="bi bi-cup-hot-fill"></i></div>
            <h3 class="h5 fw-semibold">Complimentary Breakfast</h3>
            <p class="text-secondary mb-0">Start your morning with fresh local Cebuano breakfast sets or traditional bread and coffee daily.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="bi bi-wifi"></i></div>
            <h3 class="h5 fw-semibold">Fiber-optic Wi-Fi</h3>
            <p class="text-secondary mb-0">Stay fully connected with fast and reliable internet access available in all rooms and public lounges.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="bi bi-p-square-fill"></i></div>
            <h3 class="h5 fw-semibold">Parking Lot</h3>
            <p class="text-secondary mb-0">Drive in with peace of mind. Our guest house features secure private parking spaces on-site.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="bi bi-snow"></i></div>
            <h3 class="h5 fw-semibold">Air Conditioning</h3>
            <p class="text-secondary mb-0">Cool down from the tropical heat with independent split-type air conditioners in every guest suite.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="bi bi-tv-fill"></i></div>
            <h3 class="h5 fw-semibold">Cable Entertainment</h3>
            <p class="text-secondary mb-0">Unwind and catch up on news, sports, and movies with flat screen TVs mounted in all rooms.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
          <div class="amenity-card">
            <div class="amenity-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <h3 class="h5 fw-semibold">Accessible Location</h3>
            <p class="text-secondary mb-0">Quick bridge access to Mactan Island and central Cebu, close to shopping malls and food districts.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== ROOMS ===================== -->
  <section id="rooms" style="background:var(--brand-soft);">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <span class="section-eyebrow">Accommodations</span>
        <h2 class="section-title mt-2">Our Rooms & Rates</h2>
        <hr class="divider mx-auto mt-3" />
        <p class="text-secondary mx-auto" style="max-width:620px;">Spacious queen-bed rooms perfect for families and groups. Rates are per night.</p>
      </div>
      <div class="row g-4 justify-content-center">

        <!-- Room 1 -->
        <div class="col-md-6 col-lg-5 reveal">
          <div class="room-card">
            <div class="room-img-wrap">
              <img src="assets/room_double.jpg" alt="Deluxe Family Room with two queen beds" class="room-img" />
              <span class="price-tag">₱2,400 <small>/ night</small></span>
            </div>
            <div class="card-body p-4">
              <h3 class="h4 fw-bold mb-1">Deluxe Family Room</h3>
              <p class="text-brand fw-semibold mb-3"><i class="bi bi-people-fill me-1"></i>Good for 4 pax</p>
              <div class="d-flex flex-wrap gap-3 mb-3">
                <span class="room-feature"><i class="bi bi-door-closed me-1"></i>2 Queen Beds</span>
                <span class="room-feature"><i class="bi bi-snow me-1"></i>Air Conditioned</span>
                <span class="room-feature"><i class="bi bi-wifi me-1"></i>Free Wi-Fi</span>
              </div>
              <p class="text-secondary small mb-4">A comfortable room with two queen-size beds — perfect for small families or a group of friends exploring Cebu.</p>
              <button class="btn btn-brand w-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#roomModal1">
                <i class="bi bi-images me-2"></i>View Details
              </button>
            </div>
          </div>
        </div>

        <!-- Room 2 -->
        <div class="col-md-6 col-lg-5 reveal">
          <div class="room-card">
            <div class="room-img-wrap">
              <img src="assets/room_triple.jpg" alt="Grand Family Suite with three queen beds" class="room-img" />
              <span class="price-tag">₱3,000 <small>/ night</small></span>
            </div>
            <div class="card-body p-4">
              <h3 class="h4 fw-bold mb-1">Grand Family Suite</h3>
              <p class="text-brand fw-semibold mb-3"><i class="bi bi-people-fill me-1"></i>Good for 6 pax</p>
              <div class="d-flex flex-wrap gap-3 mb-3">
                <span class="room-feature"><i class="bi bi-door-closed me-1"></i>3 Queen Beds</span>
                <span class="room-feature"><i class="bi bi-snow me-1"></i>Air Conditioned</span>
                <span class="room-feature"><i class="bi bi-tv me-1"></i>Cable TV</span>
              </div>
              <p class="text-secondary small mb-4">Our largest room with three queen-size beds — ideal for big families and barkada trips who want to stay together.</p>
              <button class="btn btn-brand w-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#roomModal2">
                <i class="bi bi-images me-2"></i>View Details
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===================== ROOM MODAL 1 ===================== -->
  <div class="modal fade" id="roomModal1" tabindex="-1" aria-labelledby="roomModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content border-0 rounded-4 overflow-hidden">
        <div class="modal-header text-white" style="background:var(--brand);">
          <h5 class="modal-title" id="roomModal1Label"><i class="bi bi-door-open me-2"></i>Deluxe Family Room — ₱2,400 / night</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <!-- Slideshow -->
          <div id="carouselRoom1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselRoom1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselRoom1" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselRoom1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/room_double.jpg" class="modal-room-img" alt="Deluxe room with two queen beds" />
              </div>
              <div class="carousel-item">
                <img src="assets/Family Room.jpg" class="modal-room-img" alt="Deluxe room cozy corner" />
              </div>
              <div class="carousel-item">
                <img src="assets/d93ef6db-775e-4c84-89c3-44d66b72a5af.jpg" class="modal-room-img" alt="Deluxe room bathroom" />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Details -->
          <div class="p-4">
            <p class="text-secondary">Relax in our Deluxe Family Room featuring two comfortable queen-size beds, perfect for a group of up to four guests. Each room is equipped with everything you need for a restful and convenient stay.</p>
            <div class="row g-3">
              <div class="col-6 col-md-4"><i class="bi bi-people-fill text-brand me-2"></i>Good for 4 pax</div>
              <div class="col-6 col-md-4"><i class="bi bi-door-closed text-brand me-2"></i>2 Queen Beds</div>
              <div class="col-6 col-md-4"><i class="bi bi-snow text-brand me-2"></i>Split-type AC</div>
              <div class="col-6 col-md-4"><i class="bi bi-wifi text-brand me-2"></i>Fiber Wi-Fi</div>
              <div class="col-6 col-md-4"><i class="bi bi-tv text-brand me-2"></i>Cable TV</div>
              <div class="col-6 col-md-4"><i class="bi bi-cup-hot-fill text-brand me-2"></i>Free Breakfast</div>
            </div>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-outline-brand rounded-pill" data-bs-dismiss="modal">Close</button>
          <a href="#contact" class="btn btn-brand rounded-pill" data-bs-dismiss="modal"><i class="bi bi-calendar-check me-2"></i>Book This Room</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== ROOM MODAL 2 ===================== -->
  <div class="modal fade" id="roomModal2" tabindex="-1" aria-labelledby="roomModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content border-0 rounded-4 overflow-hidden">
        <div class="modal-header text-white" style="background:var(--brand);">
          <h5 class="modal-title" id="roomModal2Label"><i class="bi bi-door-open me-2"></i>Grand Family Suite — ₱3,000 / night</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <!-- Slideshow -->
          <div id="carouselRoom2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselRoom2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselRoom2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselRoom2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/room_triple.jpg" class="modal-room-img" alt="Grand suite with multiple beds" />
              </div>
              <div class="carousel-item">
                <img src="assets/Family Room.jpg" class="modal-room-img" alt="Grand suite spacious interior" />
              </div>
              <div class="carousel-item">
                <img src="assets/67056bd0-546b-4113-bc72-e5ab1cbc5b45.jpg" class="modal-room-img" alt="Grand suite seating area" />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Details -->
          <div class="p-4">
            <p class="text-secondary">Our spacious Grand Family Suite comes with three queen-size beds, comfortably accommodating up to six guests. It's the perfect choice for large families and groups who want to enjoy Cebu together without compromising on comfort.</p>
            <div class="row g-3">
              <div class="col-6 col-md-4"><i class="bi bi-people-fill text-brand me-2"></i>Good for 6 pax</div>
              <div class="col-6 col-md-4"><i class="bi bi-door-closed text-brand me-2"></i>3 Queen Beds</div>
              <div class="col-6 col-md-4"><i class="bi bi-snow text-brand me-2"></i>Split-type AC</div>
              <div class="col-6 col-md-4"><i class="bi bi-wifi text-brand me-2"></i>Fiber Wi-Fi</div>
              <div class="col-6 col-md-4"><i class="bi bi-tv text-brand me-2"></i>Cable TV</div>
              <div class="col-6 col-md-4"><i class="bi bi-cup-hot-fill text-brand me-2"></i>Free Breakfast</div>
            </div>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-outline-brand rounded-pill" data-bs-dismiss="modal">Close</button>
          <a href="#contact" class="btn btn-brand rounded-pill" data-bs-dismiss="modal"><i class="bi bi-calendar-check me-2"></i>Book This Room</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================== CONTACT ===================== -->
  <section id="contact">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <span class="section-eyebrow">Get In Touch</span>
        <h2 class="section-title mt-2">Reserve Your Stay</h2>
        <hr class="divider mx-auto mt-3" />
        <p class="text-secondary mx-auto" style="max-width:620px;">Send us a message or reservation request and our team will get back to you as soon as possible.</p>
      </div>

      <div class="contact-wrap reveal">
        <div class="row g-0">
          <!-- Info -->
          <div class="col-lg-5 contact-info p-4 p-lg-5">
            <h3 class="h4 fw-bold mb-4">Contact Information</h3>
            <div class="d-flex gap-3 mb-4 contact-info-item">
              <i class="bi bi-geo-alt-fill"></i>
              <div>
                <div class="fw-semibold">Address</div>
                <p class="mb-0 opacity-75">C.M. Cabahug, Cambaro, Mandaue, 6014 Cebu</p>
              </div>
            </div>
            <div class="d-flex gap-3 mb-4 contact-info-item">
              <i class="bi bi-telephone-fill"></i>
              <div>
                <div class="fw-semibold">Phone</div>
                <a href="tel:+639176239188" class="opacity-75">0917 623 9188</a>
              </div>
            </div>
            <div class="d-flex gap-3 mb-4 contact-info-item">
              <i class="bi bi-facebook"></i>
              <div>
                <div class="fw-semibold">Facebook</div>
                <a href="https://www.facebook.com/cambridgeguesthouseph/" target="_blank" rel="noopener" class="opacity-75">@cambridgeguesthouseph</a>
              </div>
            </div>
            <div class="rounded-4 overflow-hidden mt-4" style="height:230px;">
              <iframe
                class="map-frame"
                title="Cambridge Guest House location map"
                src="https://www.google.com/maps?q=C.M.+Cabahug,+Cambaro,+Mandaue,+6014+Cebu&output=embed"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Form -->
          <div class="col-lg-7 p-4 p-lg-5">
            <div id="formAlert" class="alert alert-success d-none" role="alert">
              <i class="bi bi-check-circle-fill me-2"></i>Thank you! Your reservation request has been received. We'll contact you shortly.
            </div>
            <form id="contactForm" class="row g-3 needs-validation" novalidate>
              <div class="col-md-6">
                <label for="fullName" class="form-label fw-medium">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Juan Dela Cruz" required />
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label fw-medium">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label fw-medium">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="0917 000 0000" pattern="[0-9+\s\-()]{7,}" required />
                <div class="invalid-feedback">Please enter a valid phone number.</div>
              </div>
              <div class="col-md-6">
                <label for="roomType" class="form-label fw-medium">Room Type</label>
                <select class="form-select" id="roomType" required>
                  <option value="" selected disabled>Choose a room…</option>
                  <option>Deluxe Family Room — ₱2,400 (4 pax)</option>
                  <option>Grand Family Suite — ₱3,000 (6 pax)</option>
                  <option>Not sure yet</option>
                </select>
                <div class="invalid-feedback">Please select a room type.</div>
              </div>
              <div class="col-md-6">
                <label for="checkin" class="form-label fw-medium">Check-in Date</label>
                <input type="date" class="form-control" id="checkin" required />
                <div class="invalid-feedback">Please choose a check-in date.</div>
              </div>
              <div class="col-md-6">
                <label for="checkout" class="form-label fw-medium">Check-out Date</label>
                <input type="date" class="form-control" id="checkout" required />
                <div class="invalid-feedback">Please choose a check-out date.</div>
              </div>
              <div class="col-12">
                <label for="message" class="form-label fw-medium">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Number of guests, special requests, or questions…"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-brand btn-lg w-100 rounded-pill">
                  <i class="bi bi-send-fill me-2"></i>Send Reservation Request
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== FOOTER ===================== -->
  <footer class="pt-5 pb-4">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/logo.png" alt="Cambridge Guest House Logo" class="logo-circle-frame" />
            <span class="navbar-brand-text text-white" style="font-size:1.25rem;">
              Cambridge Guest House
            </span>
          </div>
          <p class="small opacity-75">Your comfortable home away from home in Mandaue, Cebu. Warm Cebuano hospitality, spacious rooms, and a location close to everything.</p>
          <a href="https://www.facebook.com/cambridgeguesthouseph/" target="_blank" rel="noopener" class="social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1">
          <h4 class="h6 fw-bold text-white mb-3">Explore</h4>
          <ul class="list-unstyled small d-flex flex-column gap-2">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#amenities">Amenities</a></li>
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <h4 class="h6 fw-bold text-white mb-3">Rooms</h4>
          <ul class="list-unstyled small d-flex flex-column gap-2">
            <li><a href="#rooms">Deluxe — ₱2,400</a></li>
            <li><a href="#rooms">Grand Suite — ₱3,000</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4 class="h6 fw-bold text-white mb-3">Reach Us</h4>
          <ul class="list-unstyled small d-flex flex-column gap-2">
            <li><i class="bi bi-geo-alt-fill text-brand me-2"></i>C.M. Cabahug, Cambaro, Mandaue, 6014 Cebu</li>
            <li><i class="bi bi-telephone-fill text-brand me-2"></i><a href="tel:+639176239188">0917 623 9188</a></li>
            <li><i class="bi bi-facebook text-brand me-2"></i><a href="https://www.facebook.com/cambridgeguesthouseph/" target="_blank" rel="noopener">cambridgeguesthouseph</a></li>
          </ul>
        </div>
      </div>
      <hr class="border-secondary my-4" />
      <div class="text-center small opacity-75">
        &copy; <span id="year"></span> Cambridge Guest House. All rights reserved.
      </div>
    </div>
  </footer>

  <button id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>
@endsection
