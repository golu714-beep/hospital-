<?php
// Dynamic page configuration
$pageTitle = "Sankalp Hospital | Best Multi-Specialty Hospital In Ambikapur";
$pageDesc = "Sankalp Hospital is a premier multi-specialist healthcare facility in Ambikapur. We provide advanced IVF treatments, Urology, Gynecology, 24/7 emergency care, and world-class medical infrastructure.";

include 'includes/header.php';
include 'includes/navbar.php';
?>
  <!-- HERO SECTION WITH QUICK APPOINTMENT WIDGET -->
  <section id="home" class="hero-slider">
    <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/hero1.png" alt="Hospital Lobby Banner">
        </div>
        <div class="carousel-item">
          <img src="images/hero2.png" alt="Advanced Operation Theatre">
        </div>
        <div class="carousel-item">
          <img src="images/hero3.png" alt="Healthcare Staff and Care">
        </div>
        <div class="carousel-item">
          <img src="images/hero4.png" alt="Modern Clinical Consult">
        </div>
        <div class="carousel-item">
          <img src="images/hero5.png" alt="Advanced Laboratory Setup">
        </div>
        <div class="carousel-item">
          <img src="images/hero6.png" alt="Modern Hospital Building Facade">
        </div>
      </div>
    </div>

    <!-- Floating Overlay Booker Widget -->
    <div class="hero-overlay-content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 hero-text-block">
            <h1>Advanced Medical Care, <span>Close to You</span></h1>
            <p>Sankalp Hospital is Ambikapur's leading multi-specialty healthcare provider, delivering world-class infrastructure, advanced surgical care, and expert medical treatments.</p>
            <div class="d-flex flex-wrap gap-3">
              <a href="#departments" class="btn btn-secondary py-3 px-4"><i class="fas fa-stethoscope"></i> OUR SERVICES</a>
              <a href="tel:+919584889068" class="btn btn-outline-light py-3 px-4 border-2"><i class="fas fa-headset"></i> INQUIRE NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWS TICKER -->
  <section class="news-ticker">
    <div class="container">
      <div class="ticker-wrap d-flex align-items-center">
        <span class="ticker-label"><i class="fas fa-bullhorn"></i> Announcement</span>
        <div class="ticker-content flex-grow-1">
          <ul>
            <li>24 Hours Emergency and Critical Care Trauma Services are operational 24x7.</li>
            <li>In-house Advanced Dialysis unit provides cashless support for CGHS and Ayushman patients.</li>
            <li>Sankalp Assisted Fertility IVF Center has hit a milestone of 1,500+ successful IVF babies.</li>
            <li>OPD bookings are open daily from 9:00 AM to 6:00 PM. Book online to reserve.</li>
          </ul>
        </div>
        <div class="ticker-controls d-none d-md-block">
          <button aria-label="prev"><i class="fas fa-chevron-left"></i></button>
          <button aria-label="pause"><i class="fas fa-pause"></i></button>
          <button aria-label="next"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section id="about" class="about-section">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <span class="about-badge">Welcome to Sankalp Hospital</span>
          <h2>A Heritage of Trust and <span>Advanced Healing</span></h2>
          <p class="lead text-muted mb-4">Located at the heart of Ambikapur, Sankalp Hospital has spent over 15 years providing top-tier clinical diagnostics, patient care, and cutting-edge treatments across diverse medical fields.</p>
          <p class="mb-4">We are dedicated to establishing patient-centered medical excellence. Our state-of-the-art diagnostic imaging, high-success IVF clinics, modular operation theatres, and dedicated pediatric divisions ensure you and your loved ones receive comprehensive clinical support.</p>
          
          <div class="about-features">
            <div class="about-feat-item">
              <i class="fas fa-shield-alt"></i>
              <div>
                <h5>Patient Safety First</h5>
                <p>Advanced sanitization, ICU monitoring, and expert trauma handling.</p>
              </div>
            </div>
            <div class="about-feat-item">
              <i class="fas fa-certificate"></i>
              <div>
                <h5>Awarded Clinicians</h5>
                <p>Our senior doctors carry decades of medical expertise in critical fields.</p>
              </div>
            </div>
            <div class="about-feat-item">
              <i class="fas fa-microscope"></i>
              <div>
                <h5>Advanced Diagnostics</h5>
                <p>High-resolution pathology labs and modular surgical suites.</p>
              </div>
            </div>
            <div class="about-feat-item">
              <i class="fas fa-heartbeat"></i>
              <div>
                <h5>Holistic Wellness</h5>
                <p>Personalized post-surgery protocols and dedicated support staff.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="about-image-wrapper">
            <img src="images/hero4.png" alt="Doctor consulting patient" class="about-img-1">
            <div class="about-img-experience">
              <h3>15+</h3>
              <p>Years of Caring</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DYNAMIC STATISTICS SECTION -->
  <section class="stats-section py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Left Side: Milestones info -->
        <div class="col-lg-5">
          <div class="section-title text-start mb-4">
            <span>Our Milestones</span>
            <h2 class="mb-3">Our Journey of Care in Numbers</h2>
            <p class="lead text-muted mb-4">Over a decade of dedicated clinical excellence, delivering reliable diagnostics, high-success treatments, and advanced surgical care to the community of Ambikapur.</p>
          </div>
          <div class="stats-badges d-flex flex-wrap gap-2">
            <span class="badge bg-light text-primary border px-3 py-2 rounded-pill"><i class="fas fa-award me-1"></i> CGHS Cashless</span>
            <span class="badge bg-light text-primary border px-3 py-2 rounded-pill"><i class="fas fa-check-circle me-1"></i> Ayushman Bharat</span>
            <span class="badge bg-light text-primary border px-3 py-2 rounded-pill"><i class="fas fa-shield-alt me-1"></i> ISO Accredited</span>
          </div>
        </div>
        
        <!-- Right Side: 2x2 Grid of Stat Cards -->
        <div class="col-lg-7">
          <div class="row g-4">
            <div class="col-sm-6">
              <div class="stat-card">
                <div class="stat-icon-wrapper"><i class="fas fa-procedures"></i></div>
                <div class="stat-number" data-count="15000">0</div>
                <div class="stat-label">Successful Surgeries</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="stat-card">
                <div class="stat-icon-wrapper"><i class="fas fa-tint"></i></div>
                <div class="stat-number" data-count="50000">0</div>
                <div class="stat-label">Dialysis Treatments</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="stat-card">
                <div class="stat-icon-wrapper"><i class="fas fa-baby"></i></div>
                <div class="stat-number" data-count="1500">0</div>
                <div class="stat-label">IVF Babies Born</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="stat-card">
                <div class="stat-icon-wrapper"><i class="fas fa-user-md"></i></div>
                <div class="stat-number" data-count="150">0</div>
                <div class="stat-label">Medical Specialists</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SPECIALTIES / DEPARTMENTS SECTION -->
  <section id="departments" class="specialties-section">
    <div class="container">
      <div class="section-title">
        <span>Our Departments</span>
        <h2>Comprehensive Medical Specialties</h2>
        <p>Providing specialized clinical expertise, modern equipment, and dedicated outpatient care across all crucial health sectors.</p>
      </div>

      <div class="row g-4">
        <!-- IVF -->
        <div class="col-lg-4 col-md-6">
          <div class="specialty-card">
            <div class="specialty-icon"><i class="fas fa-baby"></i></div>
            <h3>Assisted Fertility (IVF/ICSI/IUI)</h3>
            <p>Offering hopeful parents advanced fertility treatments, egg freezing, ICSI, and IUI setups under high-success rate guidelines led by specialists.</p>
            <a href="#appointment" class="specialty-link">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <!-- Obstetrics & Gynecology -->
        <div class="col-lg-4 col-md-6">
          <div class="specialty-card">
            <div class="specialty-icon"><i class="fas fa-female"></i></div>
            <h3>Obstetrics & Gynecology</h3>
            <p>Comprehensive women's health screening, high-risk pregnancy management, painless deliveries, laparoscopic gynecological surgeries, and routine checkups.</p>
            <a href="#appointment" class="specialty-link">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Urology -->
        <div class="col-lg-4 col-md-6">
          <div class="specialty-card">
            <div class="specialty-icon"><i class="fas fa-user-md"></i></div>
            <h3>Urology & Kidney Care</h3>
            <p>Diagnostic and clinical management of kidney stones, prostate disorders, bladder issues, and advanced minimally invasive urosurgery procedures.</p>
            <a href="#appointment" class="specialty-link">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Ophthalmology -->
        <div class="col-lg-4 col-md-6">
          <div class="specialty-card">
            <div class="specialty-icon"><i class="fas fa-eye"></i></div>
            <h3>Ophthalmology (Eye Care)</h3>
            <p>Modern cataract surgeries (phacoemulsification), refractive error corrections, glaucoma clinics, and pediatric vision screening with advanced equipment.</p>
            <a href="#appointment" class="specialty-link">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Pediatrics -->
        <div class="col-lg-4 col-md-6">
          <div class="specialty-card">
            <div class="specialty-icon"><i class="fas fa-child"></i></div>
            <h3>Pediatrics & Neonatology</h3>
            <p>Compassionate clinical care for infants, children, and adolescents. Backed by a high-grade Neonatal ICU (NICU) and pediatric vaccination centers.</p>
            <a href="#appointment" class="specialty-link">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- General Surgery -->
        <div class="col-lg-4 col-md-6">
          <div class="specialty-card">
            <div class="specialty-icon"><i class="fas fa-procedures"></i></div>
            <h3>General & Laparoscopic Surgery</h3>
            <p>Surgical handling of hernias, appendicitis, gallstones, and bowel issues with keyhole laparoscopy that guarantees minimal scarring and quick recovery.</p>
            <a href="#appointment" class="specialty-link">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MEET OUR EXPERTS SECTION -->
  <section id="doctors" class="doctors-section">
    <div class="container">
      <div class="section-title">
        <span>Our Specialists</span>
        <h2>Meet Our Medical Experts</h2>
        <p>Decades of collective experience, academic credentials, and dedication to patients' well-being.</p>
      </div>

      <!-- Custom Doctors Slider -->
      <div class="doctors-slider-container position-relative">
        <div class="doctors-track">
          
          <!-- Dr. Lata Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc1.png" alt="Dr. Lata Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Gynecology & IVF</span>
                <h4>Dr. Lata Goyal</h4>
                <p class="doc-degrees">MBBS, MS - Obs & Gynecology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>
          
          <!-- Dr. Usha Armo -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc2.png" alt="Dr. Usha Armo">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Gynecology</span>
                <h4>Dr. Usha Armo</h4>
                <p class="doc-degrees">MBBS, DGO - Gynecology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Rimsha Lakesh Sahu -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc1.png" alt="Dr. Rimsha Lakesh Sahu">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Gynecology & Obs</span>
                <h4>Dr. Rimsha Lakesh Sahu</h4>
                <p class="doc-degrees">MBBS, DNB - Obs & Gynecology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Tanay Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc3.png" alt="Dr. Tanay Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Orthopaedics & Trauma</span>
                <h4>Dr. Tanay Goyal</h4>
                <p class="doc-degrees">MBBS, MS - Orthopaedics</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Sanjay Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc4.png" alt="Dr. Sanjay Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Orthopaedics</span>
                <h4>Dr. Sanjay Goyal</h4>
                <p class="doc-degrees">MBBS, D.Ortho - Orthopaedic Surgeon</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Nilesh Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc3.png" alt="Dr. Nilesh Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Urology Specialist</span>
                <h4>Dr. Nilesh Goyal</h4>
                <p class="doc-degrees">MBBS, MS, MCh - Urology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Ankita Bansal Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc2.png" alt="Dr. Ankita Bansal Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Ophthalmology & IVF</span>
                <h4>Dr. Ankita Bansal Goyal</h4>
                <p class="doc-degrees">MBBS, MS - Ophthalmology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Megha Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc1.png" alt="Dr. Megha Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Ophthalmology</span>
                <h4>Dr. Megha Goyal</h4>
                <p class="doc-degrees">MBBS, DOMS - Eye Specialist</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Ankit Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc4.png" alt="Dr. Ankit Gupta">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Pediatrics</span>
                <h4>Dr. Ankit Gupta</h4>
                <p class="doc-degrees">MBBS, MD - Pediatrics</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Akshaya Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc2.png" alt="Dr. Akshaya Goyal">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Pediatrics</span>
                <h4>Dr. Akshaya Goyal</h4>
                <p class="doc-degrees">MBBS, DCH - Pediatrician</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Shailesh Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc3.png" alt="Dr. Shailesh Gupta">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Psychiatry</span>
                <h4>Dr. Shailesh Gupta</h4>
                <p class="doc-degrees">MBBS, MD - Psychiatry</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Suneedh Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc4.png" alt="Dr. Suneedh Gupta">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Oncology</span>
                <h4>Dr. Suneedh Gupta</h4>
                <p class="doc-degrees">MBBS, DNB - Medical Oncology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Ankit Sharma -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc3.png" alt="Dr. Ankit Sharma">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">General Surgery</span>
                <h4>Dr. Ankit Sharma</h4>
                <p class="doc-degrees">MBBS, MS - General Surgery</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Chandra Mukesh Dhawde -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <img src="images/doc4.png" alt="Dr. Chandra Mukesh Dhawde">
                <div class="doctor-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept">Laparoscopic Surgery</span>
                <h4>Dr. Chandra Mukesh Dhawde</h4>
                <p class="doc-degrees">MBBS, MS - Laparoscopic Surgeon</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

        </div>

        <!-- Slider Controls -->
        <button class="doc-control-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
        <button class="doc-control-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <!-- CLINICAL GALLERY SECTION (Facility Carousel Slider) -->
  <section id="gallery" class="py-5 bg-white border-top">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Left Side: Heading & Features -->
        <div class="col-lg-4">
          <div class="section-title text-start mb-4">
            <span>Our Facility</span>
            <h2 class="mb-3">World-Class Infrastructure</h2>
            <p>Sankalp Hospital is equipped with state-of-the-art medical technology, clean-air systems, and patient comfort designs.</p>
          </div>
          
          <div class="facility-features mb-4">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="facility-feat-icon"><i class="fas fa-wind"></i></div>
              <div>
                <h6 class="mb-0 fw-bold">Laminar Air Flow</h6>
                <small class="text-muted">Zero bacteria OT environments</small>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="facility-feat-icon"><i class="fas fa-bed"></i></div>
              <div>
                <h6 class="mb-0 fw-bold">Deluxe Private Wards</h6>
                <small class="text-muted">Designed for fast healing and privacy</small>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="facility-feat-icon"><i class="fas fa-shield-virus"></i></div>
              <div>
                <h6 class="mb-0 fw-bold">Strict Sterile Protocols</h6>
                <small class="text-muted">24/7 disinfection schedule</small>
              </div>
            </div>
          </div>

          <!-- Custom Slider Controls -->
          <div class="carousel-custom-controls d-flex gap-2">
            <button class="btn btn-slider-control" type="button" data-bs-target="#facilityCarousel" data-bs-slide="prev" aria-label="Previous">
              <i class="fas fa-arrow-left"></i>
            </button>
            <button class="btn btn-slider-control" type="button" data-bs-target="#facilityCarousel" data-bs-slide="next" aria-label="Next">
              <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>

        <!-- Right Side: The Slider -->
        <div class="col-lg-8">
          <div class="facility-slider-frame">
            <!-- Carousel Slider -->
            <div id="facilityCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" data-bs-interval="4000">
              <!-- Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
              </div>

              <!-- Inner Slides -->
              <div class="carousel-inner rounded-4 overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <img src="images/hero1.png" class="d-block w-100 facility-img" alt="Hospital Reception Lobby">
                  <div class="carousel-caption">
                    <h5>Hospital Reception & Waiting Lobby</h5>
                    <p>A spacious, fully-airconditioned, and sanitized lobby designed for patient comfort.</p>
                  </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                  <img src="images/hero2.png" class="d-block w-100 facility-img" alt="Advanced Operation Theatre">
                  <div class="carousel-caption">
                    <h5>Modular Operation Theatre</h5>
                    <p>Equipped with modern anesthesia and clean air-laminar flows.</p>
                  </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                  <img src="images/hero4.png" class="d-block w-100 facility-img" alt="Specialist Consultation Room">
                  <div class="carousel-caption">
                    <h5>Consultation Suites</h5>
                    <p>Private counseling chambers for in-depth clinical discussions.</p>
                  </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                  <img src="images/pediatric.png" class="d-block w-100 facility-img" alt="Pediatric Ward">
                  <div class="carousel-caption">
                    <h5>Pediatric Care Ward</h5>
                    <p>Child-friendly clinical ward settings designed to ensure pediatric patients feel safe.</p>
                  </div>
                </div>
                <!-- Slide 5 -->
                <div class="carousel-item">
                  <img src="images/hero5.png" class="d-block w-100 facility-img" alt="Pathology Lab">
                  <div class="carousel-caption">
                    <h5>High-Tech Pathology Laboratory</h5>
                    <p>Fully automated analyzer machines for delivering rapid, precise diagnostic test results.</p>
                  </div>
                </div>
                <!-- Slide 6 -->
                <div class="carousel-item">
                  <img src="images/ultrasound.png" class="d-block w-100 facility-img" alt="Diagnostic Ultrasound Room">
                  <div class="carousel-caption">
                    <h5>Advanced Ultrasound Diagnostic Room</h5>
                    <p>Armed with advanced ultrasound imaging machines for pregnancy scans.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- APPOINTMENT SECTION -->
  <section id="appointment" class="booking-section">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 booking-text">
          <h2>Schedule Your Consult Online</h2>
          <p>Book your outpatient consultations with our top medical experts. Fill out the details, and our front office will call you to secure a convenient timing.</p>
          
          <div class="features-list">
            <div class="feat-row">
              <div class="feat-row-icon"><i class="fas fa-clock"></i></div>
              <div>
                <h4>Saves Waiting Time</h4>
                <p>Get a priority consultation slot and minimize hospital lobby waiting.</p>
              </div>
            </div>
            <div class="feat-row">
              <div class="feat-row-icon"><i class="fas fa-shield-virus"></i></div>
              <div>
                <h4>Safe & Maintained Environment</h4>
                <p>Clinics are thoroughly sanitized under strict safety protocols.</p>
              </div>
            </div>
            <div class="feat-row">
              <div class="feat-row-icon"><i class="fas fa-phone-volume"></i></div>
              <div>
                <h4>24/7 Telephone Confirmation</h4>
                <p>Speak to our staff immediately if any schedule adjustments occur.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="booking-card-wrapper">
            <h3>Consultation Request</h3>
            <form id="detailed-booking-form" class="appointment-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="book-name">Patient Name</label>
                  <input type="text" id="book-name" placeholder="Full Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="book-phone">Contact Number</label>
                  <input type="tel" id="book-phone" placeholder="Mobile Number" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="book-dept">Select Specialty</label>
                  <select id="book-dept" required>
                    <option value="">Select Specialty</option>
                    <option value="gynecology">Obstetrics & Gynecology (IVF)</option>
                    <option value="orthopedics">Orthopedics & Trauma</option>
                    <option value="urology">Urology</option>
                    <option value="ophthalmology">Ophthalmology (Eye)</option>
                    <option value="pediatrics">Pediatrics</option>
                    <option value="psychiatry">Psychiatry</option>
                    <option value="oncology">Chemotherapy & Oncology</option>
                    <option value="surgery">General & Laparoscopic Surgery</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="book-doc">Consulting Doctor</label>
                  <select id="book-doc" disabled required>
                    <option value="">Select Specialist</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="book-date">Preferred Appointment Date</label>
                <input type="date" id="book-date" required>
              </div>
              <div class="form-group">
                <label for="book-msg">Brief Health Concerns (Optional)</label>
                <textarea id="book-msg" placeholder="Any details or symptoms you would like to mention..."></textarea>
              </div>
              <button type="submit" class="btn-book-submit"><i class="fas fa-check-circle"></i> REQUEST Slot NOW</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INSURANCE & TPAs (EMPANELMENTS) -->
  <section class="empanelments-section">
    <div class="container-fluid px-0">
      <h5 class="text-center text-uppercase text-muted fs-6 tracking-wide mb-4">Our Empanelments & Cashless Partners</h5>
      <div class="empanelments-slider">
        <div class="empanelments-track">
          <!-- First Set -->
          <div class="empanelment-logo"><i class="fas fa-heartbeat"></i> Ayushman Bharat (PMJAY)</div>
          <div class="empanelment-logo"><i class="fas fa-check-circle"></i> CGHS Cashless</div>
          <div class="empanelment-logo"><i class="fas fa-hospital"></i> ESIC Cashless</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Star Health Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-medkit"></i> HDFC ERGO TPA</div>
          <div class="empanelment-logo"><i class="fas fa-first-aid"></i> ICICI Lombard</div>
          <div class="empanelment-logo"><i class="fas fa-heart"></i> Bajaj Allianz</div>
          <div class="empanelment-logo"><i class="fas fa-plus-square"></i> SBI General</div>
          
          <!-- Second Set (Duplicate for Infinite Loop) -->
          <div class="empanelment-logo"><i class="fas fa-heartbeat"></i> Ayushman Bharat (PMJAY)</div>
          <div class="empanelment-logo"><i class="fas fa-check-circle"></i> CGHS Cashless</div>
          <div class="empanelment-logo"><i class="fas fa-hospital"></i> ESIC Cashless</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Star Health Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-medkit"></i> HDFC ERGO TPA</div>
          <div class="empanelment-logo"><i class="fas fa-first-aid"></i> ICICI Lombard</div>
          <div class="empanelment-logo"><i class="fas fa-heart"></i> Bajaj Allianz</div>
          <div class="empanelment-logo"><i class="fas fa-plus-square"></i> SBI General</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQS & MAP SECTION -->
  <section id="faq" class="faq-section">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6">
          <div class="section-title text-start mb-4">
            <span>Support & FAQs</span>
            <h2>Common Questions</h2>
          </div>
          <div class="accordion faq-accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                  What are the visiting hours for inpatients?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  To ensure our patients recover peacefully, visiting hours are from 4:00 PM to 6:00 PM daily. Only one visitor with an attendant pass is permitted at a time.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  Does the hospital offer cashless treatment options?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. Sankalp Hospital provides cashless hospitalisation services for Ayushman Bharat cardholders, CGHS, ESIC, and all major corporate insurance TPAs. Please connect with our TPA desk at reception during admission.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  How do I get emergency trauma care?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our emergency and trauma unit is fully staffed and operational 24/7. In case of emergency, immediately contact our helpline at <strong>+91 7774 223344</strong> or arrive directly at our trauma unit near the District Hospital.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" id="contact">
          <div class="map-card">
            <!-- Google Map Embed - Centered on Sankalp Hospital, Ambikapur in Satellite View -->
            <iframe class="map-iframe" src="https://maps.google.com/maps?q=Sankalp+Hospital+Ambikapur&amp;t=k&amp;z=18&amp;output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map-info">
              <h4>Sankalp Hospital Contact Info</h4>
              <p><i class="fas fa-map-marked-alt text-primary"></i> <span>Near District Hospital, Manipur, Ambikapur, Chhattisgarh - 497001</span></p>
              <p><i class="fas fa-phone-alt text-primary"></i> <span>Reception/OPD: +91 9584 889068</span></p>
              <p><i class="fas fa-ambulance text-danger"></i> <span>Emergency Support: +91 7774 223344</span></p>
              <p><i class="fas fa-envelope text-primary"></i> <span>info.sankalpslms@gmail.com</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
include 'includes/footer.php';
?>
