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
    gynecology: [
      { name: "Dr. Lata Goyal", degrees: "MBBS, MS - Obstetrics & Gynecology" },
      { name: "Dr. Usha Armo", degrees: "MBBS, DGO - Gynecology" },
      {
        name: "Dr. Rimsha Lakesh Sahu",
        degrees: "MBBS, DNB - Obstetrics & Gynecology",
      },
    ],
    orthopedics: [
      { name: "Dr. Tanay Goyal", degrees: "MBBS, MS - Orthopaedics" },
      {
        name: "Dr. Sanjay Goyal",
        degrees: "MBBS, D.Ortho - Orthopaedic Surgeon",
      },
    ],
    urology: [{ name: "Dr. Nilesh Goyal", degrees: "MBBS, MS, MCh - Urology" }],
    ophthalmology: [
      { name: "Dr. Ankita Bansal Goyal", degrees: "MBBS, MS - Ophthalmology" },
      { name: "Dr. Megha Goyal", degrees: "MBBS, DOMS - Eye Specialist" },
    ],
    pediatrics: [
      { name: "Dr. Ankit Gupta", degrees: "MBBS, MD - Pediatrics" },
      { name: "Dr. Akshaya Goyal", degrees: "MBBS, DCH - Pediatrician" },
    ],
    psychiatry: [
      { name: "Dr. Shailesh Gupta", degrees: "MBBS, MD - Psychiatry" },
    ],
    oncology: [
      { name: "Dr. Suneedh Gupta", degrees: "MBBS, DNB - Medical Oncology" },
    ],
    surgery: [
      { name: "Dr. Ankit Sharma", degrees: "MBBS, MS - General Surgery" },
      {
        name: "Dr. Chandra Mukesh Dhawde",
        degrees: "MBBS, MS - Laparoscopic Surgeon",
      },
    ],
    emergency: [
      {
        name: "Emergency Duty Medical Officer",
        degrees: "MBBS, MD - Trauma Care",
      },
    ],
    ent: [{ name: "On-Call ENT Specialist", degrees: "MBBS, MS - ENT" }],
    anesthesia: [
      { name: "On-Call Anesthesiologist", degrees: "MBBS, MD - Anaesthesia" },
    ],
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
          $("<option></option>")
            .val(doc.name)
            .text(doc.name + " (" + doc.degrees.split(" - ")[0] + ")"),
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
  $("a[href^='#']:not([data-bs-toggle='collapse'])").click(function (event) {
    if (this.hash !== "" && this.hash !== "#") {
      var hash = this.hash;
      var target = $(hash);

      if (target.length) {
        event.preventDefault();
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 80,
          },
          600,
          function () {
            window.location.hash = hash;
          },
        );
      } else {
        // If the hash target does not exist on this page, and it is a simple anchor, redirect to home page
        var href = $(this).attr("href");
        if (href && href.startsWith("#")) {
          event.preventDefault();
          window.location.href = "index.php" + hash;
        }
      }
    }
  });

  /* Close mobile menu drawer on click (specifically for hash anchors / current page links) */
  $(".mobile-menu a").click(function (e) {
    var href = $(this).attr("href");

    // Ignore dropdown / collapse toggles
    if (
      $(this).attr("data-bs-toggle") === "collapse" ||
      $(this).hasClass("dropdown-toggle")
    ) {
      return;
    }

    // Check if it's a hash link targeting the current page
    if (href && href.includes("#")) {
      var parts = href.split("#");
      var pagePart = parts[0];

      var currentPage =
        window.location.pathname.split("/").pop() || "index.php";
      if (
        pagePart === "" ||
        pagePart === currentPage ||
        (pagePart === "index.php" && currentPage === "")
      ) {
        var offcanvasEl = document.getElementById("mobileNav");
        if (offcanvasEl && typeof bootstrap !== "undefined") {
          var offcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
          if (offcanvas) {
            offcanvas.hide();
          }
        }
      }
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
            $this.text(Math.floor(this.countNum).toLocaleString() + "+");
          },
          complete: function () {
            $this.text(countTo.toLocaleString() + "+");
          },
        },
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
    submitBtn
      .prop("disabled", true)
      .html('<i class="fas fa-spinner fa-spin"></i> Processing Request...');

    setTimeout(function () {
      // Simulate success message alert
      alert(
        "Thank you! Your appointment request has been successfully registered.\n\nSankalp Hospital will contact you shortly on the provided number to confirm your schedule slot.",
      );

      // Reset form and UI buttons
      form[0].reset();
      submitBtn.prop("disabled", false).html(originalText);

      // If hero widget was selected, disable doctor selection again
      if (form.attr("id") === "hero-widget-form") {
        $("#widget-doc")
          .prop("disabled", true)
          .html('<option value="">Select Specialist</option>');
      } else {
        $("#book-doc")
          .prop("disabled", true)
          .html('<option value="">Select Specialist</option>');
      }
    }, 1500);
  });

  /* ==========================================
     6. Explicitly Initialize and Cycle the Carousels (Hero and Facility)
     ========================================== */
  if (typeof bootstrap !== "undefined") {
    var heroCarouselEl = document.querySelector("#heroCarousel");
    if (heroCarouselEl) {
      try {
        var heroCarousel = new bootstrap.Carousel(heroCarouselEl, {
          interval: 3000,
          ride: "carousel",
          wrap: true,
        });
        heroCarousel.cycle();
      } catch (e) {
        console.error("Hero carousel error:", e);
      }
    }

    var facilityCarouselEl = document.querySelector("#facilityCarousel");
    if (facilityCarouselEl) {
      try {
        var facilityCarousel = new bootstrap.Carousel(facilityCarouselEl, {
          interval: 4000,
          ride: "carousel",
          wrap: true,
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
  var docTrack = document.querySelector(".doctors-track");
  var docPrevBtn = document.querySelector(".doc-control-prev");
  var docNextBtn = document.querySelector(".doc-control-next");
  if (docTrack && docPrevBtn && docNextBtn) {
    var docCards = document.querySelectorAll(".doctor-card-wrapper");
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
      docTrack.style.transform = "translateX(" + -docIndex * cardWidth + "px)";
    }

    // Initial call after paint to ensure correct cardWidth calculations
    setTimeout(updateDocSlider, 300);

    docNextBtn.addEventListener("click", function () {
      docIndex++;
      updateDocSlider();
    });

    docPrevBtn.addEventListener("click", function () {
      docIndex--;
      updateDocSlider();
    });

    // Auto-scroll every 4 seconds
    var docTimer = setInterval(function () {
      docIndex++;
      updateDocSlider();
    }, 4000);

    // Pause auto-scroll on hover
    var docContainer = document.querySelector(".doctors-slider-container");
    if (docContainer) {
      docContainer.addEventListener("mouseenter", function () {
        clearInterval(docTimer);
      });
      docContainer.addEventListener("mouseleave", function () {
        docTimer = setInterval(function () {
          docIndex++;
          updateDocSlider();
        }, 4000);
      });
    }

    // Handle window resize dynamically
    window.addEventListener("resize", updateDocSlider);
  }

  /* ==========================================
     8. Specialty Booking CTA Integration
     ========================================== */
  $(".btn-book-specialty").click(function () {
    var deptVal = $(this).attr("data-dept");
    var appointmentSection = $("#appointment");

    if (appointmentSection.length) {
      if (deptVal) {
        $("#book-dept").val(deptVal).change();
      }
      $("html, body").animate(
        {
          scrollTop: appointmentSection.offset().top - 80,
        },
        600,
      );
    } else {
      window.location.href =
        "index.php?dept=" + (deptVal || "all") + "#appointment";
    }
  });

  /* ==========================================
     9. URL Parameter Handling & Auto-Selection
     ========================================== */
  function getUrlParameter(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
    var results = regex.exec(location.search);
    return results === null
      ? ""
      : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

  var deptParam = getUrlParameter("dept");
  if (deptParam) {
    // 1. Booking form dropdown pre-selection (Homepage)
    var bookDeptSelect = $("#book-dept");
    if (bookDeptSelect.length) {
      var selectVal = deptParam === "ivf" ? "gynecology" : deptParam;
      bookDeptSelect.val(selectVal).change();
    }

    // 2. Interactive Specialties Hub tab pre-selection (departments.php)
    var tabEl = document.getElementById("tab-" + deptParam);
    if (tabEl) {
      if (typeof bootstrap !== "undefined") {
        var tab = bootstrap.Tab.getOrCreateInstance(tabEl);
        tab.show();
      } else {
        tabEl.click();
      }
      var specialtiesSection = $("#departments");
      if (specialtiesSection.length) {
        $("html, body").animate(
          {
            scrollTop: specialtiesSection.offset().top - 80,
          },
          300,
        );
      }
    }

    // 3. Doctors filter pre-selection (doctors.php)
    var filterVal = deptParam;
    if (deptParam === "ivf") {
      filterVal = "gynecology";
    }
    var filterBtn = $('.filter-tab-btn[data-filter="' + filterVal + '"]');
    if (filterBtn.length) {
      filterBtn.click();
    }
  }

  /* ==========================================
     10. Doctor Directory Filtering (doctors.php)
     ========================================== */
  $(".filter-tabs-container .filter-tab-btn").click(function () {
    var filterValue = $(this).attr("data-filter");

    // Toggle active class on buttons
    $(".filter-tabs-container .filter-tab-btn").removeClass("active");
    $(this).addClass("active");

    if (filterValue === "all") {
      $(".doctor-item").fadeIn(400);
    } else {
      $(".doctor-item").hide();
      $(".doctor-item.filter-" + filterValue).fadeIn(400);
    }
  });

  /* ==========================================
     11. Myths & Facts Card Flipping & Filtering
     ========================================== */
  // Flip card on click
  $(".myth-card-container").click(function () {
    $(this).toggleClass("flipped");
  });

  // Myths & Facts Filter Tabs
  $(".myths-filter-wrap .filter-tab-btn").click(function () {
    var filterValue = $(this).attr("data-filter");

    $(".myths-filter-wrap .filter-tab-btn").removeClass("active");
    $(this).addClass("active");

    if (filterValue === "all") {
      $(".myth-item").fadeIn(400);
    } else {
      $(".myth-item").hide();
      $(".myth-item.filter-" + filterValue).fadeIn(400);
    }
    // Also reset flipped status on cards when filtering to avoid confusion
    $(".myth-card-container").removeClass("flipped");
  });

  /* ==========================================
     12. Medical Glossary Search & A-Z Jump
     ========================================== */
  var glossaryItems = $(".glossary-item");
  var searchInput = $("#glossary-search");
  var noResults = $("#glossary-no-results");

  function filterGlossary() {
    var searchText = searchInput.val().toLowerCase().trim();
    var activeLetter = $(".az-letter-btn.active").attr("data-letter");
    var visibleCount = 0;

    glossaryItems.each(function () {
      var item = $(this);
      var termText = item.find("h4").text().toLowerCase();
      var descText = item.find("p").text().toLowerCase();
      var itemLetter = item.attr("data-letter");

      var matchesSearch =
        termText.indexOf(searchText) !== -1 ||
        descText.indexOf(searchText) !== -1;
      var matchesLetter = activeLetter === "all" || itemLetter === activeLetter;

      if (matchesSearch && matchesLetter) {
        item.fadeIn(300);
        visibleCount++;
      } else {
        item.hide();
      }
    });

    if (visibleCount === 0) {
      noResults.removeClass("d-none");
    } else {
      noResults.addClass("d-none");
    }
  }

  // Bind A-Z letter buttons
  $(".az-letter-btn")
    .not("[disabled]")
    .click(function () {
      $(".az-letter-btn").removeClass("active");
      $(this).addClass("active");
      // Clear search input on clicking A-Z letters to let user view all terms for that letter
      searchInput.val("");
      filterGlossary();
    });

  // Bind keyup/input on search text box
  searchInput.on("input keyup", function () {
    // When typing, reset A-Z buttons to 'All'
    $(".az-letter-btn").removeClass("active");
    $('.az-letter-btn[data-letter="all"]').addClass("active");
    filterGlossary();
  });

  /* ==========================================
     13. Patient Care Section (about.php) Tab Switcher
     ========================================== */
  $(".care-tab-link").click(function () {
    $(".care-tab-link").removeClass("active");
    $(this).addClass("active");

    var target = $(this).attr("data-target");
    $(".care-details-pane").addClass("d-none");
    $("#pane-" + target)
      .removeClass("d-none")
      .hide()
      .fadeIn(300);
  });

  /* ==========================================
     14. FAQ Section Category Filter (faq.php)
     ========================================== */
  $("#faq-categories .filter-tab-btn").click(function () {
    var category = $(this).attr("data-category");

    $("#faq-categories .filter-tab-btn").removeClass("active");
    $(this).addClass("active");

    if (category === "all") {
      $(".faq-panel-node").fadeIn(300);
    } else {
      $(".faq-panel-node").hide();
      $(".faq-panel-node[data-category='" + category + "']").fadeIn(300);
    }
  });
});
