<?php
$pageTitle = "Clinical Departments | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Explore Sankalp Hospital's clinical departments including Assisted Fertility (IVF), Urology, Gynecology, Pediatrics, Orthopaedics, Ophthalmology, General Surgery, and more.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-hand-holding-medical me-1"></i> Sankalp Specialities</span>
        <h1 class="text-white display-4 fw-bold">Clinical Departments</h1>
        <p class="lead text-white-50 mb-0">Providing specialized clinical expertise, modern medical equipment, and dedicated patient care across 12 crucial health sectors.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- INTERACTIVE DEPARTMENTS SECTION -->
<section class="py-5 bg-light" id="departments">
  <div class="container">
    <div class="row g-4">
      <!-- Sidebar Navigation (12 cols on mobile, 4 cols on desktop) -->
      <div class="col-lg-4">
        <div class="specialty-sidebar-card">
          <h5 class="sidebar-title"><i class="fas fa-hand-holding-medical"></i> Select Department</h5>
          <div class="nav flex-column nav-pills specialty-nav-list" id="specialty-tabs" role="tablist" aria-orientation="vertical">
            <!-- Item 1: Ophthalmology -->
            <button class="nav-link active specialty-tab-btn" id="tab-ophthalmology" data-bs-toggle="pill" data-bs-target="#panel-ophthalmology" type="button" role="tab" aria-controls="panel-ophthalmology" aria-selected="true">
              <span class="btn-icon-title">
                <i class="fas fa-eye"></i>
                <span>Ophthalmology</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 2: Emergency & Trauma -->
            <button class="nav-link specialty-tab-btn" id="tab-emergency" data-bs-toggle="pill" data-bs-target="#panel-emergency" type="button" role="tab" aria-controls="panel-emergency" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-ambulance"></i>
                <span>Emergency & Trauma</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 3: Obstetrics & Gynecology -->
            <button class="nav-link specialty-tab-btn" id="tab-gynecology" data-bs-toggle="pill" data-bs-target="#panel-gynecology" type="button" role="tab" aria-controls="panel-gynecology" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-female"></i>
                <span>Obstetrics & Gynecology</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 4: Assisted Fertility (IVF) -->
            <button class="nav-link specialty-tab-btn" id="tab-ivf" data-bs-toggle="pill" data-bs-target="#panel-ivf" type="button" role="tab" aria-controls="panel-ivf" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-baby"></i>
                <span>Assisted Fertility (IVF)</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 5: General & Laparoscopic Surgery -->
            <button class="nav-link specialty-tab-btn" id="tab-surgery" data-bs-toggle="pill" data-bs-target="#panel-surgery" type="button" role="tab" aria-controls="panel-surgery" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-procedures"></i>
                <span>General & Laparoscopic</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 6: Pediatrics -->
            <button class="nav-link specialty-tab-btn" id="tab-pediatrics" data-bs-toggle="pill" data-bs-target="#panel-pediatrics" type="button" role="tab" aria-controls="panel-pediatrics" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-child"></i>
                <span>Pediatrics</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 7: Orthopaedics Surgery -->
            <button class="nav-link specialty-tab-btn" id="tab-orthopedics" data-bs-toggle="pill" data-bs-target="#panel-orthopedics" type="button" role="tab" aria-controls="panel-orthopedics" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-bone"></i>
                <span>Orthopaedics Surgery</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 8: Urology -->
            <button class="nav-link specialty-tab-btn" id="tab-urology" data-bs-toggle="pill" data-bs-target="#panel-urology" type="button" role="tab" aria-controls="panel-urology" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-user-md"></i>
                <span>Urology</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 9: Psychiatry -->
            <button class="nav-link specialty-tab-btn" id="tab-psychiatry" data-bs-toggle="pill" data-bs-target="#panel-psychiatry" type="button" role="tab" aria-controls="panel-psychiatry" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-brain"></i>
                <span>Psychiatry</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 10: ENT -->
            <button class="nav-link specialty-tab-btn" id="tab-ent" data-bs-toggle="pill" data-bs-target="#panel-ent" type="button" role="tab" aria-controls="panel-ent" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-head-side-cough"></i>
                <span>ENT</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 11: Department of Anesthesia -->
            <button class="nav-link specialty-tab-btn" id="tab-anesthesia" data-bs-toggle="pill" data-bs-target="#panel-anesthesia" type="button" role="tab" aria-controls="panel-anesthesia" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-syringe"></i>
                <span>Anesthesia</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>

            <!-- Item 12: Onco Surgery -->
            <button class="nav-link specialty-tab-btn" id="tab-oncology" data-bs-toggle="pill" data-bs-target="#panel-oncology" type="button" role="tab" aria-controls="panel-oncology" aria-selected="false">
              <span class="btn-icon-title">
                <i class="fas fa-hand-holding-medical"></i>
                <span>Onco Surgery</span>
              </span>
              <i class="fas fa-chevron-right arrow-indicator"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Detail Display Card (12 cols on mobile, 8 cols on desktop) -->
      <div class="col-lg-8">
        <div class="tab-content specialty-details-container" id="specialty-panels">
          
          <!-- Panel 1: Ophthalmology -->
          <div class="tab-pane fade show active specialty-detail-panel" id="panel-ophthalmology" role="tabpanel" aria-labelledby="tab-ophthalmology">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-eye"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Specialized Consultation</span>
                <h3 class="panel-title">Ophthalmology (Eye Care)</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Sankalp Hospital's Ophthalmology Department provides comprehensive diagnostic, surgical, and therapeutic eye care. Our advanced clinical wing handles vision impairments, cataract surgeries, and specialized ocular conditions with precision.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Phacoemulsification for Cataracts</li>
                    <li><i class="fas fa-check-circle"></i> Computerized Eye Testing</li>
                    <li><i class="fas fa-check-circle"></i> Glaucoma Detection & Therapy</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Pediatric Vision Screening</li>
                    <li><i class="fas fa-check-circle"></i> Dry Eye Diagnostic Clinics</li>
                    <li><i class="fas fa-check-circle"></i> Diabetic Retinopathy Management</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc2.png" alt="Dr. Ankita Bansal Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Ankita Bansal Goyal</h6>
                      <small class="text-muted">MBBS, MS - Ophthalmology</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc1.png" alt="Dr. Megha Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Megha Goyal</h6>
                      <small class="text-muted">MBBS, DOMS - Eye Specialist</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="ophthalmology" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="ophthalmology"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 2: Emergency & Trauma -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-emergency" role="tabpanel" aria-labelledby="tab-emergency">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon bg-danger-subtle text-danger"><i class="fas fa-ambulance"></i></div>
              <div>
                <span class="panel-tag text-uppercase text-danger">Surgical & Critical Care</span>
                <h3 class="panel-title">24 Hours Emergency & Trauma</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Our emergency department is operational 24/7, providing immediate triage, life-saving resuscitation, and surgical interventions. Backed by dedicated trauma surgeons and advanced imaging, we handle acute medical crises round-the-clock.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Advanced Cardiac Life Support (ACLS)</li>
                    <li><i class="fas fa-check-circle"></i> Trauma & Accident Resuscitation</li>
                    <li><i class="fas fa-check-circle"></i> Acute Poisoning & Burn Care</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Ventilator & ICU Critical Stabilization</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 Ambulance & Retrieval Services</li>
                    <li><i class="fas fa-check-circle"></i> Bedside Emergency Ultrasound</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <div class="mini-doc-avatar-placeholder"><i class="fas fa-hospital-user"></i></div>
                    <div>
                      <h6>On-Duty Trauma Team</h6>
                      <small class="text-muted">Emergency Medical Officers</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="emergency" class="btn btn-outline-danger rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-emergency btn-book-specialty" data-dept="emergency"><i class="fas fa-ambulance"></i> Contact Emergency</button>
            </div>
          </div>

          <!-- Panel 3: Obstetrics & Gynecology -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-gynecology" role="tabpanel" aria-labelledby="tab-gynecology">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-female"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Reproductive & Family Health</span>
                <h3 class="panel-title">Obstetrics & Gynecology</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Dedicated to women's health through all stages of life. We provide comprehensive maternal care, high-risk pregnancy monitoring, painless labor suites, and advanced keyhole surgeries for gynecological disorders.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> High-Risk Pregnancy Management</li>
                    <li><i class="fas fa-check-circle"></i> Painless Delivery (Epidural Analgesia)</li>
                    <li><i class="fas fa-check-circle"></i> Laparoscopic Hysterectomy</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Ovarian Cyst & Fibroid Surgeries</li>
                    <li><i class="fas fa-check-circle"></i> Menopause Clinic & Hormonal Testing</li>
                    <li><i class="fas fa-check-circle"></i> Adolescent Gynecology Consultations</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc1.png" alt="Dr. Lata Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Lata Goyal</h6>
                      <small class="text-muted">MBBS, MS - Obs & Gynecology</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc2.png" alt="Dr. Usha Armo" class="mini-doc-img">
                    <div>
                      <h6>Dr. Usha Armo</h6>
                      <small class="text-muted">MBBS, DGO - Gynecology</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc1.png" alt="Dr. Rimsha Lakesh Sahu" class="mini-doc-img">
                    <div>
                      <h6>Dr. Rimsha Lakesh Sahu</h6>
                      <small class="text-muted">MBBS, DNB - Obs & Gynecology</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="gynecology" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="gynecology"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 4: Assisted Fertility (IVF) -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-ivf" role="tabpanel" aria-labelledby="tab-ivf">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-baby"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Reproductive & Family Health</span>
                <h3 class="panel-title">Assisted Fertility (IVF/ICSI/IUI)</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Sankalp Assisted Fertility (IVF) Center is a premier center of reproductive medicine. With state-of-the-art embryology labs and advanced incubation systems, we support couples on their journey to parenthood with empathy and high success rates.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> In Vitro Fertilization (IVF)</li>
                    <li><i class="fas fa-check-circle"></i> Intracytoplasmic Sperm Injection (ICSI)</li>
                    <li><i class="fas fa-check-circle"></i> Intrauterine Insemination (IUI)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Egg & Sperm Cryopreservation</li>
                    <li><i class="fas fa-check-circle"></i> Blastocyst Culture & Embryo Transfer</li>
                    <li><i class="fas fa-check-circle"></i> Male Infertility Diagnostics</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc1.png" alt="Dr. Lata Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Lata Goyal</h6>
                      <small class="text-muted">MBBS, MS - Obs & Gynecology</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc2.png" alt="Dr. Ankita Bansal Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Ankita Bansal Goyal</h6>
                      <small class="text-muted">MBBS, MS - IVF Specialist</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="ivf" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="gynecology"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 5: General & Laparoscopic Surgery -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-surgery" role="tabpanel" aria-labelledby="tab-surgery">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-procedures"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                <h3 class="panel-title">General & Laparoscopic Surgery</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Our surgical unit specializes in minimally invasive laparoscopic procedures. By utilizing keyhole entries, patients benefit from smaller incisions, reduced post-operative pain, shorter hospital stays, and quicker recovery times.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Laparoscopic Gallbladder Removal</li>
                    <li><i class="fas fa-check-circle"></i> Hernia Repair (Inguinal/Umbilical)</li>
                    <li><i class="fas fa-check-circle"></i> Laparoscopic Appendectomy</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Diabetic Foot Wound Management</li>
                    <li><i class="fas fa-check-circle"></i> Laser Surgery for Piles & Fissures</li>
                    <li><i class="fas fa-check-circle"></i> Major & Minor Soft Tissue Excisions</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc3.png" alt="Dr. Ankit Sharma" class="mini-doc-img">
                    <div>
                      <h6>Dr. Ankit Sharma</h6>
                      <small class="text-muted">MBBS, MS - General Surgery</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc4.png" alt="Dr. Chandra Mukesh Dhawde" class="mini-doc-img">
                    <div>
                      <h6>Dr. Chandra Mukesh Dhawde</h6>
                      <small class="text-muted">MBBS, MS - Laparoscopic Surgeon</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="surgery" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="surgery"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 6: Pediatrics -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-pediatrics" role="tabpanel" aria-labelledby="tab-pediatrics">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-child"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Reproductive & Family Health</span>
                <h3 class="panel-title">Pediatrics & Neonatology</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Comprehensive healthcare for infants, toddlers, and adolescents. Our state-of-the-art Neonatal ICU (NICU) provides critical incubator care for premature babies, managed by expert pediatricians.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Level-III Neonatal ICU (NICU)</li>
                    <li><i class="fas fa-check-circle"></i> Pediatric Vaccination & Immunization</li>
                    <li><i class="fas fa-check-circle"></i> Growth & Development Assessment</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Pediatric Asthma & Allergy Care</li>
                    <li><i class="fas fa-check-circle"></i> Pediatric Emergency Stabilization</li>
                    <li><i class="fas fa-check-circle"></i> Childhood Nutrition & Diet Counseling</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc4.png" alt="Dr. Ankit Gupta" class="mini-doc-img">
                    <div>
                      <h6>Dr. Ankit Gupta</h6>
                      <small class="text-muted">MBBS, MD - Pediatrics</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc2.png" alt="Dr. Akshaya Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Akshaya Goyal</h6>
                      <small class="text-muted">MBBS, DCH - Pediatrician</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="pediatrics" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="pediatrics"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 7: Orthopaedics Surgery -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-orthopedics" role="tabpanel" aria-labelledby="tab-orthopedics">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-bone"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                <h3 class="panel-title">Orthopaedics & Joint Surgery</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Providing advanced orthopedic care for joint, bone, and muscular conditions. From complex joint replacements to sport trauma management and fracture healing, our surgeons employ the latest techniques.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Total Hip & Knee Joint Replacements</li>
                    <li><i class="fas fa-check-circle"></i> Arthroscopic Ligament Repairs (ACL/MCL)</li>
                    <li><i class="fas fa-check-circle"></i> Complex Fracture & Trauma Fixations</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Spine Decompression & Fusions</li>
                    <li><i class="fas fa-check-circle"></i> Osteoporosis & Arthritis Management</li>
                    <li><i class="fas fa-check-circle"></i> Specialized Post-Surgical Rehab</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc3.png" alt="Dr. Tanay Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Tanay Goyal</h6>
                      <small class="text-muted">MBBS, MS - Orthopaedics</small>
                    </div>
                  </div>
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc4.png" alt="Dr. Sanjay Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Sanjay Goyal</h6>
                      <small class="text-muted">MBBS, D.Ortho - Orthopaedic Surgeon</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="orthopedics" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="orthopedics"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 8: Urology -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-urology" role="tabpanel" aria-labelledby="tab-urology">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-user-md"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Specialized Consultation</span>
                <h3 class="panel-title">Urology & Kidney Care</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Advanced kidney, bladder, and prostate care. The urology department offers minimally invasive keyhole laser options for kidney stones and comprehensive treatments for urogenital conditions.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Laser Kidney Stone Removal (PCNL/URSL)</li>
                    <li><i class="fas fa-check-circle"></i> Laser Surgery for Prostate (TURP)</li>
                    <li><i class="fas fa-check-circle"></i> Urinary Incontinence Treatments</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Pediatric Urology Conditions</li>
                    <li><i class="fas fa-check-circle"></i> Recurrent UTI Diagnostic Management</li>
                    <li><i class="fas fa-check-circle"></i> Urogenital Reconstruction Surgery</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc3.png" alt="Dr. Nilesh Goyal" class="mini-doc-img">
                    <div>
                      <h6>Dr. Nilesh Goyal</h6>
                      <small class="text-muted">MBBS, MS, MCh - Urology</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="urology" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="urology"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 9: Psychiatry -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-psychiatry" role="tabpanel" aria-labelledby="tab-psychiatry">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-brain"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Specialized Consultation</span>
                <h3 class="panel-title">Psychiatry & Mental Health</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Compassionate mental wellness care designed to restore balance and emotional health. We provide clinical evaluations, cognitive therapies, and counseling for stress, anxiety, and neuro-behavioral disorders.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Cognitive Behavioral Therapy (CBT)</li>
                    <li><i class="fas fa-check-circle"></i> Anxiety & Depression Counseling</li>
                    <li><i class="fas fa-check-circle"></i> Clinical Mood Disorder Management</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Pediatric Behavior Evaluations</li>
                    <li><i class="fas fa-check-circle"></i> Sleep & Stress Management Plans</li>
                    <li><i class="fas fa-check-circle"></i> Family & Marriage Counseling Sessions</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc3.png" alt="Dr. Shailesh Gupta" class="mini-doc-img">
                    <div>
                      <h6>Dr. Shailesh Gupta</h6>
                      <small class="text-muted">MBBS, MD - Psychiatry</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="psychiatry" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="psychiatry"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 10: ENT -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-ent" role="tabpanel" aria-labelledby="tab-ent">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-head-side-cough"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Specialized Consultation</span>
                <h3 class="panel-title">ENT (Ear, Nose, Throat)</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Comprehensive diagnostic and surgical solutions for ear, nose, throat, head, and neck conditions. Our specialists provide pediatric hearing screens, sinus treatments, and tonsillectomies using modern endoscopic equipment.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Endoscopic Sinus Surgery (FESS)</li>
                    <li><i class="fas fa-check-circle"></i> Tonsillectomy & Adenoidectomy</li>
                    <li><i class="fas fa-check-circle"></i> Tympanoplasty (Eardrum Repair)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Hearing Impairment Diagnostics</li>
                    <li><i class="fas fa-check-circle"></i> Snoring & Sleep Apnea Care</li>
                    <li><i class="fas fa-check-circle"></i> Salivary Gland & Thyroid Consults</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <div class="mini-doc-avatar-placeholder"><i class="fas fa-hospital-user"></i></div>
                    <div>
                      <h6>On-Call ENT Specialists</h6>
                      <small class="text-muted">ENT Surgeons</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="ent" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="ent"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 11: Department of Anesthesia -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-anesthesia" role="tabpanel" aria-labelledby="tab-anesthesia">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-syringe"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                <h3 class="panel-title">Department of Anesthesia</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Playing a critical role in patient safety during surgeries. Our anesthesiologists deliver customized general, regional, and local anesthesia, along with comprehensive post-operative pain relief protocols.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> General & Regional Anesthesia</li>
                    <li><i class="fas fa-check-circle"></i> Epidural & Painless Labor Support</li>
                    <li><i class="fas fa-check-circle"></i> Pre-Anesthetic Health Profiling</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Chronic & Acute Pain Relief Plans</li>
                    <li><i class="fas fa-check-circle"></i> ICU Life Support Management</li>
                    <li><i class="fas fa-check-circle"></i> Post-Surgical Sedation Protocols</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <div class="mini-doc-avatar-placeholder"><i class="fas fa-hospital-user"></i></div>
                    <div>
                      <h6>On-Call Anesthesiologists</h6>
                      <small class="text-muted">Surgical Pain Experts</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="anesthesiology" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="anesthesia"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

          <!-- Panel 12: Onco Surgery -->
          <div class="tab-pane fade specialty-detail-panel" id="panel-oncology" role="tabpanel" aria-labelledby="tab-oncology">
            <div class="panel-header d-flex align-items-center gap-3">
              <div class="panel-icon"><i class="fas fa-hand-holding-medical"></i></div>
              <div>
                <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                <h3 class="panel-title">Onco Surgery (Cancer Care)</h3>
              </div>
            </div>
            <div class="panel-body mt-4">
              <p class="panel-desc">Providing high-precision surgical treatment for cancer. Our oncological surgeons specialize in tumor resections, biopsies, and organ-preserving surgeries, working closely with medical oncology for comprehensive cancer therapies.</p>
              
              <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Solid Tumor Resection & Biopsy</li>
                    <li><i class="fas fa-check-circle"></i> Breast Cancer Sparing Surgeries</li>
                    <li><i class="fas fa-check-circle"></i> Gastrointestinal Oncology Surgeries</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="procedure-list">
                    <li><i class="fas fa-check-circle"></i> Sentinel Lymph Node Evaluation</li>
                    <li><i class="fas fa-check-circle"></i> Cancer Screening & Diagnostics</li>
                    <li><i class="fas fa-check-circle"></i> Chemotherapy Port Placements</li>
                  </ul>
                </div>
              </div>

              <div class="specialist-box mt-4 pt-3 border-top">
                <h5 class="specialists-title"><i class="fas fa-user-md"></i> Department Specialists</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                  <div class="mini-doc-card d-flex align-items-center gap-3">
                    <img src="images/doc4.png" alt="Dr. Suneedh Gupta" class="mini-doc-img">
                    <div>
                      <h6>Dr. Suneedh Gupta</h6>
                      <small class="text-muted">MBBS, DNB - Medical Oncology</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer mt-4 pt-3 d-flex justify-content-end gap-2">
              <a href="oncology" class="btn btn-outline-primary rounded-pill px-4"><i class="fas fa-info-circle"></i> Learn More</a>
              <button class="btn btn-primary btn-book-specialty" data-dept="oncology"><i class="far fa-calendar-check"></i> Book Consultation</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
