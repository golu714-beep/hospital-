$(document).ready(function () {
  
  /* ==========================================
     1. Sticky Navbar Transition
     ========================================== */
  $(window).scroll(function () {
    var scrollPos = $(window).scrollTop();
    if (scrollPos > 50) {
      $(".floating-nav").addClass("scrolled");
      $(".scrollTop").addClass("show-button");
    } else {
      $(".floating-nav").removeClass("scrolled");
      $(".scrollTop").removeClass("show-button");
    }
  });

  /* ==========================================
     2. Doctor-Department Dynamic Filters
     ========================================== */
  var doctorsData = {
    "gynecology": [
      { name: "Dr. Lata Goyal", degrees: "MBBS, MS - Obstetrics & Gynecology" },
      { name: "Dr. Usha Armo", degrees: "MBBS, DGO - Gynecology" },
      { name: "Dr. Rimsha Lakesh Sahu", degrees: "MBBS, DNB - Obstetrics & Gynecology" }
    ],
    "orthopedics": [
      { name: "Dr. Tanay Goyal", degrees: "MBBS, MS - Orthopaedics" },
      { name: "Dr. Sanjay Goyal", degrees: "MBBS, D.Ortho - Orthopaedic Surgeon" }
    ],
    "urology": [
      { name: "Dr. Nilesh Goyal", degrees: "MBBS, MS, MCh - Urology" }
    ],
    "ophthalmology": [
      { name: "Dr. Ankita Bansal Goyal", degrees: "MBBS, MS - Ophthalmology" },
      { name: "Dr. Megha Goyal", degrees: "MBBS, DOMS - Eye Specialist" }
    ],
    "pediatrics": [
      { name: "Dr. Ankit Gupta", degrees: "MBBS, MD - Pediatrics" },
      { name: "Dr. Akshaya Goyal", degrees: "MBBS, DCH - Pediatrician" }
    ],
    "psychiatry": [
      { name: "Dr. Shailesh Gupta", degrees: "MBBS, MD - Psychiatry" }
    ],
    "oncology": [
      { name: "Dr. Suneedh Gupta", degrees: "MBBS, DNB - Medical Oncology" }
    ],
    "surgery": [
      { name: "Dr. Ankit Sharma", degrees: "MBBS, MS - General Surgery" },
      { name: "Dr. Chandra Mukesh Dhawde", degrees: "MBBS, MS - Laparoscopic Surgeon" }
    ]
  };

  // Bind dropdown changing logic for both forms
  $("#widget-dept, #book-dept").change(function () {
    var deptId = $(this).val();
    var isHeroWidget = $(this).attr("id") === "widget-dept";
    var doctorSelect = isHeroWidget ? $("#widget-doc") : $("#book-doc");
    
    // Clear current options
    doctorSelect.html('<option value="">Select Specialist</option>');
    
    if (deptId && doctorsData[deptId]) {
      // Populate specialists
      $.each(doctorsData[deptId], function (idx, doc) {
        doctorSelect.append(
          $("<option></option>").val(doc.name).text(doc.name + " (" + doc.degrees.split(" - ")[0] + ")")
        );
      });
      doctorSelect.prop("disabled", false);
    } else {
      doctorSelect.prop("disabled", true);
    }
  });

  /* ==========================================
     3. Smooth Scroll to Anchors & Focus Effects
     ========================================== */
  $("a[href^='#']").click(function (event) {
    if (this.hash !== "" && this.hash !== "#") {
      event.preventDefault();
      var hash = this.hash;

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top - 80
        },
        600,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });

  /* ==========================================
     4. Animated Statistics Counter
     ========================================== */
  var countersStarted = false;
  
  function startCounters() {
    $(".stat-number").each(function () {
      var $this = $(this);
      var countTo = parseInt($this.attr("data-count"), 10);
      
      $({ countNum: 0 }).animate(
        { countNum: countTo },
        {
          duration: 2000,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum).toLocaleString());
          },
          complete: function () {
            $this.text(countTo.toLocaleString() + "+");
          }
        }
      );
    });
  }

  // Trigger counters when section enters screen
  $(window).scroll(function () {
    if ($(".stats-section").length) {
      var oTop = $(".stats-section").offset().top - window.innerHeight;
      if (!countersStarted && $(window).scrollTop() > oTop) {
        startCounters();
        countersStarted = true;
      }
    }
  });

  /* ==========================================
     5. Interactive Form Submissions (Demo success)
     ========================================== */
  $("#hero-widget-form, #detailed-booking-form").submit(function (event) {
    event.preventDefault();
    var form = $(this);
    var submitBtn = form.find('button[type="submit"]');
    var originalText = submitBtn.html();
    
    // Simple UI state change during validation/sending simulation
    submitBtn.prop("disabled", true).html('<i class="fas fa-spinner fa-spin"></i> Processing Request...');
    
    setTimeout(function () {
      // Simulate success message alert
      alert("Thank you! Your appointment request has been successfully registered.\n\nSankalp Hospital will contact you shortly on the provided number to confirm your schedule slot.");
      
      // Reset form and UI buttons
      form[0].reset();
      submitBtn.prop("disabled", false).html(originalText);
      
      // If hero widget was selected, disable doctor selection again
      if (form.attr("id") === "hero-widget-form") {
        $("#widget-doc").prop("disabled", true).html('<option value="">Select Specialist</option>');
      } else {
        $("#book-doc").prop("disabled", true).html('<option value="">Select Specialist</option>');
      }
    }, 1500);
  });

  /* ==========================================
     6. Explicitly Initialize and Cycle the Carousels (Hero and Facility)
     ========================================== */
  if (typeof bootstrap !== 'undefined') {
    var heroCarouselEl = document.querySelector('#heroCarousel');
    if (heroCarouselEl) {
      try {
        var heroCarousel = new bootstrap.Carousel(heroCarouselEl, {
          interval: 3000,
          ride: 'carousel',
          wrap: true
        });
        heroCarousel.cycle();
      } catch (e) {
        console.error("Hero carousel error:", e);
      }
    }

    var facilityCarouselEl = document.querySelector('#facilityCarousel');
    if (facilityCarouselEl) {
      try {
        var facilityCarousel = new bootstrap.Carousel(facilityCarouselEl, {
          interval: 4000,
          ride: 'carousel',
          wrap: true
        });
        facilityCarousel.cycle();
      } catch (e) {
        console.error("Facility carousel error:", e);
      }
    }
  }

  /* ==========================================
     7. Custom Auto-scrolling Doctor Slider
     ========================================== */
  var docTrack = document.querySelector('.doctors-track');
  var docPrevBtn = document.querySelector('.doc-control-prev');
  var docNextBtn = document.querySelector('.doc-control-next');
  if (docTrack && docPrevBtn && docNextBtn) {
    var docCards = document.querySelectorAll('.doctor-card-wrapper');
    var docIndex = 0;
    
    function getVisibleDocCount() {
      var w = window.innerWidth;
      if (w >= 1200) return 4;
      if (w >= 992) return 3;
      if (w >= 576) return 2;
      return 1;
    }
    
    function updateDocSlider() {
      if (docCards.length === 0) return;
      var cardWidth = docCards[0].offsetWidth;
      var maxIndex = docCards.length - getVisibleDocCount();
      
      if (docIndex > maxIndex) {
        docIndex = 0; // Loop back to the start
      } else if (docIndex < 0) {
        docIndex = maxIndex;
      }
      docTrack.style.transform = 'translateX(' + (-docIndex * cardWidth) + 'px)';
    }
    
    // Initial call after paint to ensure correct cardWidth calculations
    setTimeout(updateDocSlider, 300);
    
    docNextBtn.addEventListener('click', function() {
      docIndex++;
      updateDocSlider();
    });
    
    docPrevBtn.addEventListener('click', function() {
      docIndex--;
      updateDocSlider();
    });
    
    // Auto-scroll every 4 seconds
    var docTimer = setInterval(function() {
      docIndex++;
      updateDocSlider();
    }, 4000);
    
    // Pause auto-scroll on hover
    var docContainer = document.querySelector('.doctors-slider-container');
    if (docContainer) {
      docContainer.addEventListener('mouseenter', function() {
        clearInterval(docTimer);
      });
      docContainer.addEventListener('mouseleave', function() {
        docTimer = setInterval(function() {
          docIndex++;
          updateDocSlider();
        }, 4000);
      });
    }
    
    // Handle window resize dynamically
    window.addEventListener('resize', updateDocSlider);
  }
});
