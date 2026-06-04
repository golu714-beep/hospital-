  <!-- FLOATING CAPSULE NAVIGATION -->
  <nav class="navbar navbar-expand-lg floating-nav">
    <div class="container-fluid px-lg-4 d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a class="navbar-brand d-flex align-items-center me-0" href="#home">
        <img src="logo.png" alt="Sankalp Hospital Logo" class="brand-logo">
      </a>
      
      <!-- Centerized Menu Links (Desktop) -->
      <div class="collapse navbar-collapse justify-content-center" id="desktopNavbarMenu">
        <ul class="navbar-nav gap-1">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#departments" role="button">Departments</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-baby me-2 text-primary"></i> Assisted Fertility (IVF)</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-female me-2 text-primary"></i> Obstetrics & Gynecology</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-user-md me-2 text-primary"></i> Urology Services</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-eye me-2 text-primary"></i> Ophthalmology (Eye)</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-child me-2 text-primary"></i> Pediatrics</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-brain me-2 text-primary"></i> Psychiatry</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-tint me-2 text-primary"></i> Dialysis Unit</a></li>
              <li><a class="dropdown-item" href="#departments"><i class="fas fa-procedures me-2 text-primary"></i> Laparoscopic Surgery</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#doctors">Experts</a></li>
          <li class="nav-item"><a class="nav-link" href="#faq">FAQs</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>

      <!-- Action Buttons (Right) -->
      <div class="d-flex align-items-center gap-2">
        <a href="tel:+917774223344" class="btn btn-emergency-nav d-none d-xl-inline-flex"><i class="fas fa-ambulance"></i> Emergency</a>
        <a href="#appointment" class="btn btn-primary-nav"><i class="far fa-calendar-check"></i> Book Now</a>
        <button class="navbar-toggler d-lg-none py-1 px-2 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav">
          <i class="fas fa-bars text-primary fs-4"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- MOBILE NAVIGATION DRAWER (OFFCANVAS) -->
  <div class="offcanvas offcanvas-start" id="mobileNav">
    <div class="offcanvas-header border-bottom">
      <img src="logo.png" alt="Sankalp Logo" class="mobile-brand-logo">
      <button class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="mobile-menu d-flex flex-column gap-3 fs-5">
        <li><a href="#home" data-bs-dismiss="offcanvas">Home</a></li>
        <li><a href="#about" data-bs-dismiss="offcanvas">About Us</a></li>
        <li><a href="#departments" data-bs-dismiss="offcanvas">Departments</a></li>
        <li><a href="#doctors" data-bs-dismiss="offcanvas">Our Experts</a></li>
        <li><a href="#faq" data-bs-dismiss="offcanvas">FAQs</a></li>
        <li><a href="#contact" data-bs-dismiss="offcanvas">Contact Us</a></li>
      </ul>
      <div class="mt-5 pt-4 border-top">
        <h6 class="text-uppercase text-muted mb-3">Emergency Support</h6>
        <a href="tel:+917774223344" class="btn btn-emergency w-100 py-3"><i class="fas fa-ambulance"></i> +91 7774 223344</a>
      </div>
    </div>
  </div>
