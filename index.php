<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SDI Group - Synergy Data Investments</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-inner">
    <button class="nav-logo" onclick="navigate('home')">
      <div class="logo-icon-container">
        <img src="Assets/SDI LOGO WHITE.png" alt="SDI Group Logo" class="logo-svg">
      </div>
      <div class="logo-text-container">
        <div class="logo-text-sub">SYNERGY DATA INVESTMENTS</div>
      </div>
    </button>

    <ul class="nav-links" id="navLinks">
      <li><button onclick="navigate('home')" class="active" data-page="home">Home</button></li>
      <li><button onclick="navigate('about')" data-page="about">About Us</button></li>
      <li><button onclick="navigate('investments')" data-page="investments">Investments</button></li>
      <li><button onclick="navigate('succession')" data-page="succession">Succession</button></li>
    </ul>
    

    <div class="nav-actions">
      <button class="nav-cta" onclick="navigate('home')">Book a Consultation</button>
      <a class="nav-whatsapp" href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." target="_blank" rel="noopener noreferrer" aria-label="Chat with SDI Group on WhatsApp">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
      </a>
    </div>
    <button class="mobile-toggle" onclick="toggleMobile()" aria-label="Menu">
      <span id="mobileIcon">☰</span>
    </button>
  </div>

  <div class="mobile-menu" id="mobileMenu">
    <button onclick="navigate('home'); closeMobile()">Home</button>
    <button onclick="navigate('about'); closeMobile()">About Us</button>
    <button onclick="navigate('investments'); closeMobile()">Investments</button>
    <button onclick="navigate('succession'); closeMobile()">Succession</button>
    <button class="nav-cta" onclick="closeMobile()">Book a Consultation →</button>
    <a class="nav-whatsapp mobile-whatsapp" href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." target="_blank" rel="noopener noreferrer" aria-label="Chat with SDI Group on WhatsApp">
      <i class="fab fa-whatsapp" aria-hidden="true"></i>
      <span>WhatsApp</span>
    </a>
  </div>
</nav>

<main>

<!-- ==================== HOME PAGE ==================== -->
<div class="page active" id="page-home">

  <!-- Hero -->
  <section class="home-hero">
    <div class="hero-bg" >
        <video autoplay muted loop playsinline>
            <source src="Assets/Hero_vid_2.mp4" type="video/mp4">
        </video>
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="hero-inner">
        <h1 class="hero-title">
          <span class="hero-title-line">ETHICALLY ALIGNED.</span><br/>
          <span>DATA DRIVEN.</span>
        </h1>
        <p class="hero-sub">
          At SDI Group, we deploy capital as a force for good—using data-driven strategy to regenerate unloved properties into safe, compliant homes for specialist supported housing and Ofsted/CQC-aligned welfare provision.
        </p>
        <div class="hero-btns">
          <button class="btn-primary" onclick="navigate('investments')">
            Explore Investments
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </button>
          <button class="btn-outline">Book a Consultation</button>
        </div>
        <!-- <button class="play-btn">
          <div class="play-circle">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="white"><polygon points="5 3 19 12 5 21 5 3"/></svg>
          </div>
          Watch Our Story
        </button> -->
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats-section">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <div>
            <div class="stat-value">246+</div>
            <div class="stat-label">Projects Completed</div>
            <div class="stat-sub">Across the UK</div>
          </div>
        </div>
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div>
            <div class="stat-value">£24M</div>
            <div class="stat-label">Capital Deployed</div>
            <div class="stat-sub">To date</div>
          </div>
        </div>
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div>
            <div class="stat-value">584+</div>
            <div class="stat-label">Beds Created</div>
            <div class="stat-sub">Transforming lives</div>
          </div>
        </div>
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div>
            <div class="stat-value">18</div>
            <div class="stat-label">Years Experience</div>
            <div class="stat-sub">Industry expertise</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Who We Are -->
  <section class="who-section">
    <div>
      <p class="section-label">WHO WE ARE</p>
      <h2 class="who-title">Our Approch</h2>
      <div class="accent-bar"></div>
      <p class="who-text">At SDI Group (Synergy Data Investments), we specialise in structured, data-led property investment across the UK—deploying capital as a force for good.</p>
      <p class="who-text">With 18 years' experience and up to £24M deployed, we help investors build resilient, high-performing portfolios through disciplined underwriting, ethical acquisition, and end-to-end delivery—from purchase and refurbishment to long-term asset management.</p>
      <p class="who-text">Our mission is simple: protect and grow wealth with real data, while regenerating unloved properties into safe, compliant homes that support specialist supported housing and Ofsted/CQC-aligned welfare provision.</p>
    </div>
    <div class="who-photos">
      <div class="photo-main">
        <img src="Assets/Grid.png" alt="Property"/>
      </div>
      <div class="photo-sm">
        <img src="Assets/Grid1.png" alt="Interior" style="width:100%;height:100%;object-fit:cover;border-radius:10px;"/>
      </div>
      <div class="photo-sm photo-bottom">
        <img src="Assets/Grid2.jpg" alt="Residential property"/>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="services-section">
    <div class="container">
      <p class="section-label text-center">Our Service Commitment</p>
      <h2 class="text-center mb-10" style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);">Delivering Unmatched Performance, Driven by Expert Insight.</h2>
      <div class="services-grid">
        <div class="service-card">
          <div class="green-circle-icon" style="margin-bottom:1rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
          </div>
          <h3 class="service-title">Strategy</h3>
          <p class="service-sub">At SDI Group, strategy comes before capital. We help investors, developers, and property owners build clear, data-led plans aligned with their goals, risk profile, and time horizon.</p>
             <p class="service-sub">Whether the focus is growth, income, restructuring, or legacy planning, we create strategies that reduce guesswork, protect downside, and provide a clearer route forward
            <p class="service-sub">
          <ul class="service-items">
            <li class="service-item"><span class="check-icon">✓</span> Portfolio Health Assessments</li>
            <li class="service-item"><span class="check-icon">✓</span> Investment Roadmaps</li>
            <li class="service-item"><span class="check-icon">✓</span> Acquisition & Structuring</li>
            <li class="service-item"><span class="check-icon">✓</span> Risk Management & Oversight</li>
            <li class="service-item"><span class="check-icon">✓</span> Asset Enhancement Planning</li>
            <li class="service-item"><span class="check-icon">✓</span> Exit Planning</li>
          </ul>
          <!-- <button class="btn-primary" style="width:100%;justify-content:center;" onclick="navigate('about')">Learn More →</button> -->
        </div>
        <div class="service-card">
          <div class="green-circle-icon" style="margin-bottom:1rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          </div>
          <h3 class="service-title">Investments</h3>
          <p class="service-sub">Our investment approach is built for those who want more than speculation. We support fixed-return opportunities, strategic joint ventures, and investment routes backed by real market analysis.
        </p>
        <p class="service-sub">Each opportunity is carefully selected, stress-tested, and end-to-end managed. We focus on protecting capital, improving performance, and deploying funds into real assets that create financial value and wider social impact.
        </p>
      
          <ul class="service-items">
            <li class="service-item"><span class="check-icon">✓</span> Fixed-Return Opportunities</li>
            <li class="service-item"><span class="check-icon">✓</span> Joint Venture Partnerships</li>
            <li class="service-item"><span class="check-icon">✓</span> Asset-Backed Investments</li>
            <li class="service-item"><span class="check-icon">✓</span> Earn & Learn Solutions</li>
          </ul>
          <!-- <button class="btn-primary" style="width:100%;justify-content:center;" onclick="navigate('investments')">View Opportunities →</button> -->
        </div>
        <div class="service-card">
          <div class="green-circle-icon" style="margin-bottom:1rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-4"/></svg>
          </div>
          <h3 class="service-title">Succession & Exit Planning</h3>
          <p class="service-sub">Succession and exit planning should never be reactive. We help investors, landlords, and multi-generational property owners assess whether to hold, restructure, refinance, transfer, or exit.
        </p>
          <p class="service-sub">Our approach is client-led and evidence-based. We identify pressure points such as liquidity needs, yield compression, operational burden, valuation gaps, and legacy planning concerns.
        </p>
  
          <ul class="service-items">
            <li class="service-item"><span class="check-icon">✓</span> Succession & Legacy Planning</li>
            <li class="service-item"><span class="check-icon">✓</span> Portfolio Restructuring</li>
            <li class="service-item"><span class="check-icon">✓</span> Liquidity & Capital Release</li>
            <li class="service-item"><span class="check-icon">✓</span> Evidence-Based Valuations</li>
            <li class="service-item"><span class="check-icon">✓</span> Managed Asset Disposals</li>
            <li class="service-item"><span class="check-icon">✓</span> Reinvestment Strategy</li>
          </ul>
          <!-- <button class="btn-primary" style="width:100%;justify-content:center;" onclick="navigate('succession')">Explore Options →</button> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Projects -->
  <section class="projects-section">
    <div class="container">
      <p class="section-label text-center">ETHICAL Investments</p>
      <h2 class="projects-title">Exclusive, risk-vetted opportunities to build and protect ethical generational 
        wealth with capital deployed as a force for good.</h2>
      <div class="projects-grid">
        <div class="project-card">
          <div class="project-img">
            <img src="Assets/Live _Projects_1.webp" alt="Supported Living Development"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img">
             <img src="Assets/Live_Projects_2.webp" alt="Specialist Care Homes"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img">
           <img src="Assets/Live_Projects_3.webp" alt="HMO Portfolio Acquisition"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img">
           <img src="Assets/Live _Projects_4.webp" alt="Supported Living Apartments"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img">
           <img src="Assets/Live _Projects_5.webp" alt="Specialist Housing Scheme"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img">
           <img src="Assets/Live _Projects_6.webp" alt="Supported Housing Portfolio"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img">
           <img src="Assets/Live _Projects_7.webp" alt="Care Ready Accommodation"/>
            <span class="project-badge" style="background:#dc2626;">SOLD</span>
          </div>
        </div>
      </div>
      <div class="carousel-btns">
        <button class="carousel-btn" type="button" aria-label="Previous project">&#8249;</button>
        <button class="carousel-btn" type="button" aria-label="Next project">&#8250;</button>
      </div>
      <div class="text-center mt-6">
        <button class="btn-outline" onclick="navigate('investments')">View All Projects →</button>
      </div>
    </div>
  </section>

  <!-- Testimonials & Partners -->
 <section class="testimonial-section">
    <div class="container">
      <!-- <div class="testimonial-grid">  -->
      <div>
        <div id="testimonial-container">
          <div class="testimonial-slider">
            <p class="partner-label">WHAT OUR CLIENTS SAY</p>
              <div class="stars" id="stars"></div>
                <blockquote id="testimonial-text"></blockquote>
                  <div class="reviewer">
                    <div class="reviewer-avatar" id="reviewer-avatar">
                    </div>
                    <div>
                      <div class="reviewer-name" id="reviewer-name"></div>
                      <div class="reviewer-role" id="reviewer-role"></div>
                  </div>
              </div>
              <!-- ARROWS -->
              <div class="testimonial-nav">
                <button class="arrow-btn left" onclick="prevTestimonial()">
                  &#10094;
                </button>

                <button class="arrow-btn right" onclick="nextTestimonial()">
                  &#10095;
                </button>
              </div>
          </div>
        </div>
        

        

        
      
      </div>
    </div>
  </section>

</div>
<section class="testimonial-section">
  <div class="container">
    <div class="testimonial-grid">
      
      <div class="standard-column">
        <p class="partner-label">Trusted By Partners</p>
        <div class="logo-flex-grid">
          <div class="logo-item"><img src="Assets/Our_partner/SALFORD-1.webp" alt="Salford" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/REALYSE-1.webp" alt="Realyse" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/Ministry-of-Justice.webp" alt="MoJ" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/MANCHESTER-1.webp" alt="Manchester" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/LIVERPOOL-1.webp" alt="Liverpool" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/DNA-1.webp" alt="DNA" class="clean-logo"></div>
        </div>
      </div>

      <div class="partners-column">
        <p class="partner-label">Our Standard</p>
        <div class="logo-flex-grid">
          <div class="logo-item"><img src="Assets/Our_partner/NAPSA-2.webp" alt="NAPSA" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/PRS-2.webp" alt="PRS" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/ICO-2.webp" alt="ICO" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/HMRC-2.webp" alt="HMRC" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/PSC-2.webp" alt="PSC" class="clean-logo"></div>
          <div class="logo-item"><img src="Assets/Our_partner/QBE-2.webp" alt="QBE" class="clean-logo"></div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Newsletter Section -->
<section class="newsletter-section">
  <div class="newsletter-container">
    <h2 class="newsletter-title">Subscribe to Our Newsletter</h2>
    <p class="newsletter-subtitle">Get the latest updates, insights, and property opportunities delivered straight to your inbox.</p>
    <form id="newsletterForm" class="newsletter-form" novalidate>
      <div class="input-group">
        <input name="email"
          type="email"
          id="emailInput"
          placeholder="sample@mail.com"
          required
        >
        <button type="submit" class="subscribe-btn">Subscribe</button>
      </div>
      <p id="formMessage" class="form-message"></p>
    </form>
  </div>
</section>

</main>
<!-- CTA Section -->
<section class="cta-advisor-section">
  <div class="cta-advisor-inner">
    <div class="cta-advisor-left">
      <div class="cta-advisor-avatar">
        <img src="Assets/About_Page/bEN.jpg" alt="Ben Read">
      </div>
      <div class="cta-advisor-text">
        <h2 class="cta-advisor-title">Speak With Our Investment Advisors</h2>
        <p class="cta-advisor-desc">Discover how SDI Group can help you build a resilient, high performing property portfolio through ethical and data-driven investment opportunities.</p>
      </div>
    </div>
    <a class="cta-advisor-btn" href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." target="_blank" rel="noopener noreferrer" aria-label="Make an enquiry with SDI Group on WhatsApp">Make An Enquiry</a>
  </div>
</section>
<!-- FOOTER -->
<footer>
  <div class="footer-main">
    <div class="footer-grid">
      <div>
        <button class="nav-logo" onclick="navigate('home')">
          <div class="logo-icon-container">
            <img src="Assets/SDI LOGO WHITE.png" alt="SDI Group Logo" class="logo-svg">
          </div>
          <div class="logo-text-container">
            <div class="logo-text-main">SDI GROUP</div>
            <div class="logo-text-sub">SYNERGY DATA INVESTMENTS</div>
          </div>
        </button>
        <p class="footer-desc">At SDI Group, we build and protect generational wealth through data-driven property investment, 
            creating safe, compliant homes for supported housing.</p>
        <!-- <div class="social-links">
          <a class="social-btn" href="#" aria-label="LinkedIn">in</a>
          <a class="social-btn" href="#" aria-label="Instagram">ig</a>
          <a class="social-btn" href="#" aria-label="LinkedIn">in</a>
          <a class="social-btn" href="#" aria-label="Instagram">ig</a>
        </div> -->

        <div class="social-links">
            <a class="social-btn" href="https://www.facebook.com/people/Synergy-Data-Investments/61574838262549/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a class="social-btn" href="https://www.instagram.com/synergydatainvestments/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>

            <a class="social-btn" href="https://www.linkedin.com/company/synergy-data-investments/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <a class="social-btn" href="https://wa.me/447551935869" target="_blank" aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
      </div>
      <div>
        <h4 class="footer-heading">Quick Links</h4>
        <ul class="footer-links">
          <li><button onclick="navigate('home')">&#8250; Home</button></li>
          <li><button onclick="navigate('about')">&#8250; About Us</button></li>
          <li><button onclick="navigate('investments')">&#8250; Investments</button></li>
          <li><button onclick="navigate('succession')">&#8250; Succession</button></li>
        </ul>
      </div>
      <div>
        <h4 class="footer-heading">Services</h4>
        <ul class="footer-links">
          <li><button onclick="navigate('investments')">Strategy</button></li>
          <li><button onclick="navigate('investments')">Investments</button></li>
          <li><button onclick="navigate('investments')">Earn & Learn</button></li>
            <li><button onclick="navigate('investments')">Joint Venture Partnership</button></li>
            <li><button onclick="navigate('investments')">Bespoke Investment Plan</button></li>
        </ul>
      </div>
      

      
      <div>
        <h4 class="footer-heading">Contact Us</h4>
        <ul class="footer-contact-items">
          <li class="footer-contact-item">
            <span class="contact-icon">✉</span>
            <a href="mailto:hello@sdigroup.co.uk">hello@sdigroup.co.uk</a>
          </li>
          <li class="footer-contact-item">
            <span class="contact-icon">⊕</span>
            <a href="https://maps.app.goo.gl/p5NSSyDjDc6p8G9QA" target="_blank" rel="noopener noreferrer">
              1 Moorlane, Bolton, BL1 4TA
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-bottom-inner">
      <span>© 2025 SDI Group (Synergy Data Investments). All rights reserved.</span>
      <div class="footer-bottom-links">
        <a href="#">Complaint Procedure</a>
        <span>|</span>
        <a href="#">Data Protection Policy</a>
        <span>|</span>
        <a href="#">Cookies Policy</a>
      </div>
    </div>
  </div>
</footer>
<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Scroll to top">↑</button>
    <!-- JS Link -->
    <script src="script.js"></script>


   <script>

let testimonials = [];
let currentIndex = 0;

// LOAD JSON
fetch("./reviews.json")
  .then(res => res.json())
  .then(data => {

    testimonials = data.testimonials;

    showTestimonial(currentIndex);



  });


// SHOW TESTIMONIAL
function showTestimonial(index) {

  const t = testimonials[index];

  document.getElementById("testimonial-text").innerText = t.text;

  document.getElementById("reviewer-name").innerText = t.name;

  document.getElementById("reviewer-role").innerText = t.role;

  // Use first letter as avatar placeholder
  const firstLetter = t.name.charAt(0).toUpperCase();
  document.getElementById("reviewer-avatar").innerHTML = `<div class="avatar-placeholder">${firstLetter}</div>`;

  document.getElementById("stars").innerHTML =
    "★".repeat(t.rating);
}


// NEXT BUTTON
function nextTestimonial() {

  currentIndex++;

  if(currentIndex >= testimonials.length){
    currentIndex = 0;
  }

  showTestimonial(currentIndex);
}


// PREVIOUS BUTTON
function prevTestimonial() {

  currentIndex--;

  if(currentIndex < 0){
    currentIndex = testimonials.length - 1;
  }

  showTestimonial(currentIndex);
}

</script>
  

<script>
// document.getElementById("newsletterForm").addEventListener("submit", function(e){

//     e.preventDefault();

//     let email = document.getElementById("emailInput").value;

//     let formData = new FormData();
//     formData.append("email", email);

//     fetch("subscribe", {
//         method: "POST",
//         body: formData
//     })

//     .then(res => res.json())
//     .then(data => {

//         let box = document.getElementById("formMessage");

//         if(data.status === "success") {

//             box.innerHTML = `
//                 <div style="padding:10px;background:#d4edda;color:#155724;margin-top:10px;border-radius:6px;">
//                     ${data.message}
//                 </div>
//             `;

//             form.reset();

//         } else {

//             box.innerHTML = `
//                 <div style="padding:10px;background:#f8d7da;color:#721c24;margin-top:10px;border-radius:6px;">
//                     ${data.message}
//                 </div>
//             `;
//         }

//         setTimeout(() => box.innerHTML = "", 4000);

//     });

// });

document.getElementById("newsletterForm").addEventListener("submit", function(e){

    e.preventDefault();

    let form = document.getElementById("newsletterForm");
    let email = document.getElementById("emailInput").value;

    let formData = new FormData();
    formData.append("email", email);

    fetch("subscribe", {
        method: "POST",
        body: formData
    })

    .then(res => res.json())
    .then(data => {

        let box = document.getElementById("formMessage");

        if(data.status === "success") {

            box.innerHTML = `
                <div style="padding:10px;background:#d4edda;color:#155724;margin-top:10px;border-radius:6px;">
                    ${data.message}
                </div>
            `;

            form.reset();

        } else {

            box.innerHTML = `
                <div style="padding:10px;background:#f8d7da;color:#721c24;margin-top:10px;border-radius:6px;">
                    ${data.message}
                </div>
            `;
        }

        setTimeout(() => box.innerHTML = "", 4000);

    });

});
</script>

    <!-- WhatsApp Floating Button -->

<a href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." 
target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp" 
style="position:fixed;right:1.5rem;bottom:5rem;z-index:9999;width:56px;height:56px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 24px rgba(37,211,102,0.5);text-decoration:none;" 
onmouseover="this.style.transform='scale(1.12)'" onmouseout="this.style.transform='scale(1)'">
  <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="fill:#ffffff;display:block;">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>

</body>

</html>
