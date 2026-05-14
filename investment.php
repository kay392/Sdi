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
        <div class="logo-text-sub">Synergy Data Investments</div>
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
 
 
<!-- ==================== INVESTMENTS PAGE ==================== -->
<div class="page" id="page-investments">
 
  <!-- Hero -->
  <section class="invest-hero">
    <div class="invest-hero-bg"></div>
    <div class="invest-hero-overlay"></div>
    <div class="invest-hero-content">
      <div class="invest-hero-inner">
        <h1 class="invest-hero-title">Your wealth,<br/><span>your way.</span></h1>
        <p class="invest-hero-text">Regardless of your level of experience, location, or investment objectives, we tailor bespoke strategies designed to align with your goals and deliver consistent, risk-adjusted returns. Whether you’re seeking a passive, fixed-income solution or a more hands-on strategic partnership, SDI Group offers structured, fully managed pathways that empower you to grow and protect your capital. Our role is to provide the insight, compliance oversight, and end-to-end execution needed to help you build a secure and profitable financial future — with confidence from day one.</p>
       
        <div style="display:flex;flex-wrap:wrap;gap:0.75rem;">
          <button class="btn-primary" onclick="scrollToSection('investment-overview')">Explore Investment Options →</button>
          <button class="btn-outline-navy" onclick="navigate('home')">Book a Consultation</button>
        </div>
      </div>
      <div class="invest-badge">
        <div class="invest-badge-top">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4a7c3f" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <span class="invest-badge-title">Ethically aligned.</span>
        </div>
        <p class="invest-badge-sub">Data driven. Impact focused.</p>
      </div>
    </div>
  </section>
 
  <!-- Investment Pathways -->
  <section class="pathways-section" id="investment-overview">
    <div class="container">
      <h2 class="text-center" style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);margin-bottom:0.5rem;">Our Investment Pathways</h2>
      <div class="accent-bar" style="margin:0.75rem auto 2.5rem;"></div>
      <div class="pathways-grid">
        <div class="pathway-card">
          <div class="green-circle-icon" style="margin-bottom:1rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <h3 class="pathway-title">Angel Investor: Fixed Return</h3>
          <p class="pathway-desc">Fixed-return solution for passive, reliable income with no active management.</p>
          <button class="pathway-cta" onclick="scrollToSection('investment-01')">Learn More →</button>
        </div>
        <div class="pathway-card">
          <div class="green-circle-icon" style="margin-bottom:1rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          </div>
          <h3 class="pathway-title">Earn & Learn Programme</h3>
          <p class="pathway-desc">We offering secured returns while building investment knowledge and decision-making skills.</p>
          <button class="pathway-cta" onclick="scrollToSection('investment-02')">Learn More →</button>
        </div>
        <div class="pathway-card">
          <div class="green-circle-icon" style="margin-bottom:1rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="pathway-title">Joint Venture Partnership</h3>
          <p class="pathway-desc">This model offering secure fixed-income returns through a strategic, hands-off capital partnership.</p>
          <button class="pathway-cta" onclick="scrollToSection('investment-03')">Learn More →</button>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Angel Investor Block -->
  <section class="invest-block invest-block-01" id="investment-01">
    <div class="container">
      <div class="invest-block-inner">
        <div>
          <div class="invest-block-num invest-block-num-navy">01</div>
          <h2 class="invest-block-title">Angel Investor: Fixed Return</h2>
          <p class="invest-block-text">Our Fixed Return solution is designed for time conscious professionals seeking reliable, passive income without the demands of active portfolio management. Offering returns of up to 15%, this fully managed option allows you to allocate capital confidently, while we oversee every aspect from due diligence and structuring to compliance and performance monitoring. Whether your objective is long-term wealth creation or efficient capital deployment, we provide a low-effort, hands off, ethical data driven approach, backed by brand and service promises, that ultimately delivers predictable outcomes and complete peace of mind — so your capital works harder while you stay focused on what matters most.</p>
         
        </div>
        <div class="features-mini-grid">
          <div class="feature-mini feature-mini-01"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="feature-mini-title">Secure Returns</div><div class="feature-mini-desc">Your capital is safeguarded by security charges and our trusted brand and service guarantees. Every investment undergoes thorough due diligence and stress testing, ensuring peace of mind and capital preservation.</div></div>
          <div class="feature-mini feature-mini-01"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg></div><div class="feature-mini-title">Guaranteed Returns</div><div class="feature-mini-desc">Earn fixed returns of up to 20% over your investment term, with flexible payout structures. This is a reliable, risk-mitigated vehicle designed to support income stability and long-term planning.</div></div>
          <div class="feature-mini feature-mini-01"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93A10 10 0 0 1 21 12a10 10 0 0 1-2.93 7.07"/><path d="M4.93 19.07A10 10 0 0 1 3 12a10 10 0 0 1 1.93-5.93"/></svg></div><div class="feature-mini-title">Fully Managed Solution</div><div class="feature-mini-desc">From onboarding to maturity, we manage every aspect of your investment with complete transparency. You receive regular updates and live visibility, without the need for day-to-day involvement.</div></div>
          <div class="feature-mini feature-mini-01"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="feature-mini-title">Zero Time Commitment</div><div class="feature-mini-desc">This is a fully passive solution — no learning curves, no operational tasks. We handle compliance, execution, and oversight, so you can stay focused on your professional and personal priorities.</div></div>
          <div class="feature-mini feature-mini-01"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div class="feature-mini-title">For Busy Professionals</div><div class="feature-mini-desc">Whether you’re building long-term wealth or diversifying capital across low-effort vehicles, this programme is tailored for those who value time, security, and results without operational complexity.</div></div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Earn & Learn Block -->
  <section class="invest-block invest-block-02" id="investment-02">
    <div class="container">
      <div class="invest-block-inner">
        <div>
          <div class="invest-block-num invest-block-num-green">02</div>
          <h2 class="invest-block-title">Earn & Learn Programme</h2>
          <p class="invest-block-text">Our Earn & Learn programme is designed for individuals who want to grow their capital through fixed, secured returns — while also gaining the knowledge and strategic insight needed to manage their own future investment decisions.
Over the course of one year, you’ll receive guided access to a proven 26-step investment framework, including real-time walkthroughs, expert-led sessions, and complete access to the tools, systems, and documentation we use to operate within today’s financial markets. It’s designed for those ready to take ownership of their financial future — without sacrificing performance along the way.
</p>
 
         
        </div>
        <div class="features-mini-grid">
          <div class="feature-mini feature-mini-02"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="feature-mini-title">Secure Capital Placement</div><div class="feature-mini-desc">Your investment is fully protected with registered charges and oversight from a trusted, compliance-led investment team. Our due diligence framework ensures peace of mind from day one.</div></div>
          <div class="feature-mini feature-mini-02"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg></div><div class="feature-mini-title">Fixed Return Performance</div><div class="feature-mini-desc">Enjoy consistent, fixed returns of 12–15% across your investment term, with the flexibility of monthly distributions. This creates predictable, passive income while you build your knowledge.</div></div>
          <div class="feature-mini feature-mini-02"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div><div class="feature-mini-title">Full Transparency</div><div class="feature-mini-desc">We provide full access to our investment systems and deal frameworks offering complete transparency, not surface-level “training.” No withheld information, no sales funnel content just real insight into how wealth is structured and preserved.</div></div>
          <div class="feature-mini feature-mini-02"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div><div class="feature-mini-title">Real-World Application</div><div class="feature-mini-desc">Our fortnightly sessions are led by real operators with current market experience not theorists. You’ll engage in live walkthroughs of existing capital strategies, funding structures, and acquisition models.</div></div>
          <div class="feature-mini feature-mini-02"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></div><div class="feature-mini-title">Onsite Exposure</div><div class="feature-mini-desc">Through optional site-based sessions and working examples, you'll observe how different investment models perform in real time. These visits provide practical exposure to what success and risk looks like when capital is deployed in the real economy.</div></div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Joint Venture Block -->
  <section class="invest-block invest-block-03" id="investment-03">
    <div class="container">
      <div class="invest-block-inner">
        <div>
          <div class="invest-block-num invest-block-num-navy">03</div>
          <h2 class="invest-block-title">Joint Venture Partnership</h2>
          <p class="invest-block-text">Our Joint Venture model is designed for individuals who want secure, fixed-income returns through a strategic, hands-off capital partnership. Ideal for those without the time or inclination to manage assets directly, this fully managed solution gives you access to high-performing, off-market investment opportunities — all delivered by SDI Group’s experienced investment management team.
We act as your strategic partner, overseeing the full lifecycle of each investment: from structuring and risk mitigation to reporting and long-term planning. With every decision grounded in compliance, due diligence, and macroeconomic awareness, this model offers the confidence of complete capital stewardship and long-term performance alignment.
</p>
         
        </div>
        <div class="features-mini-grid">
          <div class="feature-mini feature-mini-03"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="feature-mini-title">Secure Returns</div><div class="feature-mini-desc"> Your investment is safeguarded with registered legal charges and managed through SDI Group’s rigorous due diligence and oversight protocols. We prioritise capital preservation and performance integrity from the outset.
</div></div>
          <div class="feature-mini feature-mini-03"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg></div><div class="feature-mini-title">Fixed-Yield Income</div><div class="feature-mini-desc">Our Joint Venture allocations generate fixed returns of 12–20%, depending on the opportunity. Each investment is structured with clear milestones and strategic objectives aligned to 1-, 3-, and 5-year targets.</div></div>
          <div class="feature-mini feature-mini-03"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93A10 10 0 0 1 21 12"/></svg></div><div class="feature-mini-title">Regulated Partnership</div><div class="feature-mini-desc">Each partnership is supported by institutional-grade stress testing, compliance controls, and formal service agreements ensuring transparency, accountability, and mutual confidence throughout the term.</div></div>
          <div class="feature-mini feature-mini-03"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="feature-mini-title">Fully Managed</div><div class="feature-mini-desc">We manage the end-to-end process, including opportunity selection, legal structuring, capital deployment, reporting, and exit planning. Whether you’re based in the UK or internationally, our approach is fully remote-accessible and designed for time-conscious investors.</div></div>
          <div class="feature-mini feature-mini-03"><div class="feature-navy-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div class="feature-mini-title">Long-Term Wealth</div><div class="feature-mini-desc">The Joint Venture model is not just about returns — it’s about building a durable financial foundation. We structure each investment to support long-term value creation, wealth preservation, and legacy planning in line with your broader financial strategy.</div></div>
        </div>
      </div>
    </div>
  </section>
 
</div>

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
 
 
</main>
 
<!-- FOOTER -->
<footer>
  <div class="footer-main">
    <div class="footer-grid">
      <div>
        <button class="nav-logo" onclick="navigate('home')">
          <div class="logo-icon-container">
            <img src="Assets/SDI LOGO BLACK.png" alt="SDI Group Logo" class="logo-svg">
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
            <span class="contact-icon">☎</span>
            <a href="tel:+447551935869">+447551935869</a>
          </li>
          <li class="footer-contact-item">
            <span class="contact-icon">✉</span>
            <a href="mailto:hello@sdigroup.co.uk">hello@sdigroup.co.uk</a>
          </li>
          <li class="footer-contact-item">
            <span class="contact-icon">⊕</span>
            <a href="https://maps.app.goo.gl/p5NSSyDjDc6p8G9QA" target="_blank" rel="noopener noreferrer">
              7-17 S Shelton Street, Covent Garden, London WC2H 9JQ, UK
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
    <!-- WhatsApp Floating Button -->

<a href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." 
target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp" 
style="position:fixed;right:1.5rem;bottom:5rem;z-index:9999;width:56px;height:56px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 24px rgba(37,211,102,0.5);text-decoration:none;" 
onmouseover="this.style.transform='scale(1.12)'" onmouseout="this.style.transform='scale(1)'">
  <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="fill:#ffffff;display:block;">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
</body>
</html>
