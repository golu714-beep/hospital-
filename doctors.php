<?php
$pageTitle = "Our Medical Experts | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Meet our team of highly qualified medical experts at Sankalp Hospital in Ambikapur, specializing in IVF, Orthopaedics, Pediatrics, Gynecology, Urology, Surgery, and more.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <!-- Background Visual -->
  <div class="subpage-hero-bg">
    <img src="images/hero3.png" alt="Sankalp Specialists and Staff">
  </div>
  <div class="subpage-hero-overlay"></div>

  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-user-md me-1"></i> Medical Specialists</span>
        <h1 class="text-white display-4 fw-bold">Our Medical Specialists</h1>
        <p class="lead text-white-50 mb-0">Decades of collective clinical experience, advanced academic credentials, and dedication to patients' well-being in Ambikapur.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- DOCTOR GRID SECTION WITH FILTERING -->
<section class="py-5 bg-light">
  <div class="container">
    
    <!-- Filter Tabs -->
    <div class="filter-tabs-container">
      <button class="filter-tab-btn active" data-filter="all">All Experts</button>
      <button class="filter-tab-btn" data-filter="gynecology">Gynecology & IVF</button>
      <button class="filter-tab-btn" data-filter="orthopedics">Orthopaedics</button>
      <button class="filter-tab-btn" data-filter="urology">Urology</button>
      <button class="filter-tab-btn" data-filter="ophthalmology">Ophthalmology</button>
      <button class="filter-tab-btn" data-filter="pediatrics">Pediatrics</button>
      <button class="filter-tab-btn" data-filter="psychiatry">Psychiatry</button>
      <button class="filter-tab-btn" data-filter="oncology">Oncology</button>
      <button class="filter-tab-btn" data-filter="surgery">General Surgery</button>
    </div>

    <!-- Doctor Directory Grid -->
    <div class="row g-4 doctor-directory-grid">
      
      <!-- Doctor 1: Dr. Lata Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-gynecology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc1.png" alt="Dr. Lata Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Gynecology & IVF</span>
            <h4>Dr. Lata Goyal</h4>
            <p class="doc-degrees">MBBS, MS - Obs & Gynecology</p>
            <p class="doc-bio">Specialist in advanced reproductive endocrinology, assisted fertility (IVF/IUI), and high-risk obstetric cases with 15+ years of care.</p>
            <a href="index.php?dept=gynecology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 2: Dr. Usha Armo -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-gynecology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc2.png" alt="Dr. Usha Armo">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Gynecology</span>
            <h4>Dr. Usha Armo</h4>
            <p class="doc-degrees">MBBS, DGO - Gynecology</p>
            <p class="doc-bio">Expert in outpatient gynecological diagnostics, routine prenatal screenings, normal deliveries, and general maternal wellness.</p>
            <a href="index.php?dept=gynecology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 3: Dr. Rimsha Lakesh Sahu -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-gynecology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc1.png" alt="Dr. Rimsha Lakesh Sahu">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Gynecology & Obs</span>
            <h4>Dr. Rimsha Lakesh Sahu</h4>
            <p class="doc-degrees">MBBS, DNB - Obs & Gynecology</p>
            <p class="doc-bio">Dedicated to maternal care, high-risk pregnancy monitoring, painless delivery protocols, and keyhole laparoscopic gynecological surgeries.</p>
            <a href="index.php?dept=gynecology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 4: Dr. Tanay Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-orthopedics">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc3.png" alt="Dr. Tanay Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Orthopaedics & Trauma</span>
            <h4>Dr. Tanay Goyal</h4>
            <p class="doc-degrees">MBBS, MS - Orthopaedics</p>
            <p class="doc-bio">Specializes in complex bone fractures, joint reconstructions, spinal surgeries, and athletic sports injuries.</p>
            <a href="index.php?dept=orthopedics#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 5: Dr. Sanjay Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-orthopedics">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc4.png" alt="Dr. Sanjay Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Orthopaedics</span>
            <h4>Dr. Sanjay Goyal</h4>
            <p class="doc-degrees">MBBS, D.Ortho - Orthopaedic Surgeon</p>
            <p class="doc-bio">Over 25 years of surgical expertise in total joint replacements (hip & knee) and specialized bone-sparing trauma interventions.</p>
            <a href="index.php?dept=orthopedics#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 6: Dr. Nilesh Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-urology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc3.png" alt="Dr. Nilesh Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Urology Specialist</span>
            <h4>Dr. Nilesh Goyal</h4>
            <p class="doc-degrees">MBBS, MS, MCh - Urology</p>
            <p class="doc-bio">Highly trained urosurgeon specializing in laser kidney stone removals, urinary tract reconstructions, and prostate conditions.</p>
            <a href="index.php?dept=urology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 7: Dr. Ankita Bansal Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-ophthalmology filter-gynecology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc2.png" alt="Dr. Ankita Bansal Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Ophthalmology & IVF</span>
            <h4>Dr. Ankita Bansal Goyal</h4>
            <p class="doc-degrees">MBBS, MS - Ophthalmology</p>
            <p class="doc-bio">Dedicated eye surgeon specializing in cataracts and refractive errors, working alongside our IVF lab as a clinical embryologist.</p>
            <a href="index.php?dept=ophthalmology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 8: Dr. Megha Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-ophthalmology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc1.png" alt="Dr. Megha Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Ophthalmology</span>
            <h4>Dr. Megha Goyal</h4>
            <p class="doc-degrees">MBBS, DOMS - Eye Specialist</p>
            <p class="doc-bio">Focuses on general vision care, glaucoma detection therapies, pediatric screening, and refraction error corrections.</p>
            <a href="index.php?dept=ophthalmology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 9: Dr. Ankit Gupta -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-pediatrics">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc4.png" alt="Dr. Ankit Gupta">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Pediatrics</span>
            <h4>Dr. Ankit Gupta</h4>
            <p class="doc-degrees">MBBS, MD - Pediatrics</p>
            <p class="doc-bio">Compassionate physician providing general child consultations and neonatal incubator support inside our level-III NICU.</p>
            <a href="index.php?dept=pediatrics#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 10: Dr. Akshaya Goyal -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-pediatrics">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc2.png" alt="Dr. Akshaya Goyal">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Pediatrics</span>
            <h4>Dr. Akshaya Goyal</h4>
            <p class="doc-degrees">MBBS, DCH - Pediatrician</p>
            <p class="doc-bio">Specializes in childhood immunization schedules, growth monitoring, infant nutrition, and childhood asthma care.</p>
            <a href="index.php?dept=pediatrics#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 11: Dr. Shailesh Gupta -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-psychiatry">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc3.png" alt="Dr. Shailesh Gupta">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Psychiatry</span>
            <h4>Dr. Shailesh Gupta</h4>
            <p class="doc-degrees">MBBS, MD - Psychiatry</p>
            <p class="doc-bio">Professional evaluations, counseling, and medical therapy for stress, anxiety, depression, and child behavioral conditions.</p>
            <a href="index.php?dept=psychiatry#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 12: Dr. Suneedh Gupta -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-oncology">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc4.png" alt="Dr. Suneedh Gupta">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Oncology</span>
            <h4>Dr. Suneedh Gupta</h4>
            <p class="doc-degrees">MBBS, DNB - Medical Oncology</p>
            <p class="doc-bio">Dedicated oncologist coordinating diagnostic cancer screens, solid tumor chemotherapies, and post-surgery rehabilitation.</p>
            <a href="index.php?dept=oncology#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 13: Dr. Ankit Sharma -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-surgery">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc3.png" alt="Dr. Ankit Sharma">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">General Surgery</span>
            <h4>Dr. Ankit Sharma</h4>
            <p class="doc-degrees">MBBS, MS - General Surgery</p>
            <p class="doc-bio">Specialist in soft tissue removals, hernias, acute appendicitis surgeries, and standard surgical trauma interventions.</p>
            <a href="index.php?dept=surgery#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- Doctor 14: Dr. Chandra Mukesh Dhawde -->
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item filter-surgery">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <img src="images/doc4.png" alt="Dr. Chandra Mukesh Dhawde">
            <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge">Laparoscopic Surgery</span>
            <h4>Dr. Chandra Mukesh Dhawde</h4>
            <p class="doc-degrees">MBBS, MS - Laparoscopic Surgeon</p>
            <p class="doc-bio">Expert in keyhole laparoscopic surgeries, hernias, and abdominal surgeries ensuring faster patient recovery.</p>
            <a href="index.php?dept=surgery#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
