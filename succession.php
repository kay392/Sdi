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
 
<!-- ==================== SUCCESSION PAGE ==================== -->
<div class="page" id="page-succession">
 
  <!-- Hero -->
  <section class="succ-hero">
    <div class="succ-hero-bg"></div>
    <div class="succ-hero-overlay"></div>
    <div class="succ-hero-content">
      <div class="succ-hero-inner">
        <h1 class="succ-hero-title">SUCCESSION<br/><span>& EXIT PLANNING</span></h1>
        <p style="color:#d1d5db;font-size:0.875rem;line-height:1.7;margin-bottom:0.75rem;">We understand that navigating today’s financial landscape can feel complex particularly when considering whether to restructure, release, transfer or fully exit part of your investment portfolio. 
</p>
        <div style="display:flex;flex-wrap:wrap;gap:0.75rem;">
          <button class="btn-primary" onclick="scrollToSection('valuationSection')">Request Free Valuation →</button>
          <button class="btn-outline" onclick="navigate('home')">Book a Consultation</button>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Our Commitment -->
  <section class="commitment-section">
    <div>
      <p class="section-label">OUR COMMITMENT TO YOU</p>
      <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(1.6rem,3vw,2.2rem);color:var(--navy);margin-bottom:0.25rem;">Your goals. Our priority.</h2>
      <div class="accent-bar"></div>
      <p class="who-text">We understand that navigating today's financial landscape can feel complex — particularly when considering whether to restructure, release, transfer or fully exit part of your investment portfolio.</p>
      <p class="who-text">Selling or reshaping part of your assets is more than just a transaction — it's a strategic decision about protecting and advancing your long-term wealth.</p>
      <p class="who-text">Our client-first approach ensures that your goals are the priority. Whether you're looking to free up capital, reallocate funds, or exit entirely, we provide expert guidance, professional oversight, and complete peace of mind at every stage of the journey.</p>
    </div>
    <div class="commitment-photo">
      <img src="Assets/About_Page/bEN.jpg" alt="Ben"/>
      <div class="commitment-photo-overlay"></div>
      <div class="commitment-quote">
        <div class="quote-mark">"</div>
        <div class="quote-text">Our role is to protect your wealth today and create options for tomorrow.</div>
        <div class="quote-author">
          <div class="quote-name">Ben</div>
          <div class="quote-role">Founder & Managing Director</div>
          <div class="quote-org">SDI Group</div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Challenges -->
  <section class="challenges-section">
    <div class="container">
 
      <h2 class="text-center mb-10" style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);">TODAY'S MARKET</h2>
       <p class="today market">We understand that navigating today's financial landscape can feel complex particularly when considering whether to restructure, release, transfer or fully exit part of your investment portfolio.</p>
      <div class="challenges-grid">
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div class="challenge-title">Increased Taxation & Regulatory Pressure</div><div class="challenge-desc">Ongoing fiscal tightening and revised tax treatment on investment income have eroded net returns, making efficient portfolio structuring more critical than ever.</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="challenge-title">Upcoming Regulatory Shifts</div><div class="challenge-desc">Widespread reforms across financial and asset classes are expected to reshape how, when, and where investors can deploy or withdraw capital — demanding proactive planning.</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg></div><div class="challenge-title">Interest Rate Volatility</div><div class="challenge-desc">With central banks reacting to inflationary pressures, interest rate fluctuations have complicated yield expectations and introduced new stress points into capital allocation strategies.</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div><div class="challenge-title">Rising Operating & Holding Costs</div><div class="challenge-desc">From insurance premiums to maintenance and administrative overheads, inflation continues to drive up the cost of holding assets squeezing margins and clarity.</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="challenge-title">Liquidity Barriers & Exit Chain Risk</div><div class="challenge-desc">Lengthy and fragmented exit processes can lead to opportunity costs, time delays, or even last-minute breakdowns in deal execution.</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></div><div class="challenge-title">Tighter Lending Conditions</div><div class="challenge-desc">Increased lender caution and stricter approval criteria have made traditional financing routes slower, more complex, and less predictable.
</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><div class="challenge-title">Misaligned Advice & Sale Pressure</div><div class="challenge-desc">Investors often face pressure from intermediaries or agents to act against their long-term interests, especially when under time or liquidity constraints making transparent, values-aligned guidance more important than ever.</div></div>
        <div class="challenge-card"><div class="challenge-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg></div><div class="challenge-title">Inaccurate Valuation Methodologies</div><div class="challenge-desc">Applying the wrong valuation approach can drastically misrepresent the actual worth of an asset or portfolio. Whether using commercial yield calculations, sales comparables, discounted cash flow, or sales multipliers each has its place. </div></div>
      </div>
    </div>
  </section>
 
  <!-- Stay in Market -->
  <section class="stay-section">
    <div class="container">
      <div class="stay-grid">
        <div>
          <p class="section-label"></p>
          <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(1.4rem,2.5vw,1.8rem);color:var(--navy);line-height:1.2;margin-bottom:1rem;">A BETTER WAY TO STAY IN THE MARKET</h2>
          <p class="who-text">Many of the families we work with are fourth to sixth generation property owners and developers. In many cases, they initially come to us believing that a sale or full market exit is the simplest way to solve an immediate pressure point. However, once we sit down, assess the wider position, and build a strategy around their actual objectives, the outcome is often very different.
Our approach is entirely client-focused. We do not push unnecessary sales, forced exits, or reactive decisions. Instead, we work to understand the true issue behind the pressure — whether it is liquidity, yield, operational burden, valuation, succession, or risk exposure — and then structure the most suitable solution around it.
In reality, nine out of ten clients we work with do not need to sell. They simply need a more strategic route forward. By carefully repositioning assets, unlocking value, increasing income security, or improving access to capital, we help many investors remain in the UK market with greater confidence, stronger performance, and less stress.
</p>
 
          <img src="https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Property" style="border-radius:14px;width:100%;height:192px;object-fit:cover;margin-top:1.5rem;box-shadow:0 6px 20px rgba(0,0,0,0.1);"/>
        </div>
        <div>
          <p class="section-label">HOW WE TYPICALLY ACHIEVE THIS</p>
          <div class="stay-item"><div class="stay-num">01</div><div><div class="stay-title">Increasing GDV & Equitable Value</div><div class="stay-desc"> Through our understanding of valuation at every level — from Red Book RICS bricks-and-mortar assessments through to investment and commercial valuation methodologies — we identify where value is being overlooked. This allows us to reposition ordinary assets more strategically and, in some cases, unlock materially higher equitable value through experience, structuring, and the right specialist network.</div></div></div>
          <div class="stay-item"><div class="stay-num">02</div><div><div class="stay-title">Increasing Net Yield & Reducing Exposure</div><div class="stay-desc">By moving away from reliance on the open market and into more secure operational models, we help clients improve net yield while reducing day-to-day pressure. This can include routes that offer greater income security, reduced maintenance exposure, structured monitoring, and stronger protection from wider market instability.</div></div></div>
          <div class="stay-item"><div class="stay-num">03</div><div><div class="stay-title">Increasing Liquidity & Available Funds</div><div class="stay-desc">With access to FCA-regulated lending routes, flexible capital solutions, specialist structuring knowledge, and in some cases upfront payments, we help clients access liquidity that may not have appeared available at first glance. This often removes the perceived need for a sale altogether.</div></div></div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Exit Features -->
  <section class="exit-section">
    <div class="container">
 
      <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);margin-bottom:1rem;line-height:1.2;">A BETTER WAY TO EXIT</h2>
      <p style="color:#4b5563;font-size:0.875rem;line-height:1.7;margin-bottom:2rem;max-width:620px;">If circumstances do require you to exit the market, whether across an entire portfolio or a single asset, what if you could avoid the usual inefficiencies, delays, and risks that often come with asset sales or portfolio reallocation? At SDI Group, we have developed a proven, professionally managed process that allows you to release or reposition capital with greater confidence, speed, and control</p>
      <div class="exit-grid">
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="exit-card-title">Evidence-Based Valuations</div><div class="exit-card-desc">We provide comprehensive, data-backed valuations using a combination of automated valuation modelling (AVM), market comparables, performance benchmarking, and advanced financial analysis — ensuring decisions are based on real-world metrics, not assumptions.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div><div class="exit-card-title">End-to-End Professional Network</div><div class="exit-card-desc">From FCA-regulated brokers and solicitors to valuation specialists and compliance advisors, we coordinate all parties involved — reducing overheads, streamlining execution, and protecting your time.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div><div class="exit-card-title">Guaranteed Initial Commitment</div><div class="exit-card-desc">We offer a 10% upfront capital commitment on eligible deals, providing early certainty and reducing deal risk from day one.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg></div><div class="exit-card-title">Zero Disruption to Existing Revenue Streams</div><div class="exit-card-desc">Income continuity is key. We ensure your capital continues to perform and generate income throughout the transition right up to final settlement.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="exit-card-title">Confidential & Compliant Execution</div><div class="exit-card-desc">We operate with full discretion and regulatory oversight, ensuring that sensitive portfolio adjustments are handled with privacy and professionalism.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div><div class="exit-card-title">Access to Exclusive Capital Partners</div><div class="exit-card-desc">Leverage our network of HNW and institutional investors via our closed investment platform giving you access to pre-qualified buyers seeking off-market opportunities.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></div><div class="exit-card-title">Fully Managed Exit Workflow</div><div class="exit-card-desc">We manage the entire process, from valuation and documentation to settlement and reinvestment planning allowing you to focus on your broader financial strategy.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></div><div class="exit-card-title">No Disposition Fees</div><div class="exit-card-desc">For qualifying assets, we offer a full-cycle exit service with no disposition fees reflecting our commitment to investor-first outcomes.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></div><div class="exit-card-title">Expedited Completion</div><div class="exit-card-desc">With the right preparation and partner network, we routinely facilitate completions within 4 to 12 weeks eliminating unnecessary delays.</div></div>
        <div class="exit-card"><div class="exit-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></div><div class="exit-card-title">Transparent & Timely Agreements</div><div class="exit-card-desc">No ambiguity, no hidden terms just clearly defined agreements, mutually agreed timelines, and outcomes you can rely on.</div></div>
       
      </div>
    </div>
  </section>
 
  <!-- Valuation Form -->

 
 
  <section class="valuation-section"  id="valuationSection">
  <div class="container">
    <div class="valuation-grid">
      <div>
        <p class="section-label">Ready to explore your options?</p>
        <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);margin-bottom:1rem;">Take the next step today.</h2>
        <p class="who-text">Complete the form below to tell us more about your property or portfolio. We will prepare a free, no-obligation assessment within 24 hours, followed by a strategic meeting to develop a tailored plan aligned with your immediate priorities and future goals.</p>
        <ul class="check-list mt-4">
          <li><span style="color:var(--green);font-size:1rem;">✓</span> Free Assessment within 24 Hours</li>
          <li><span style="color:var(--green);font-size:1rem;">✓</span> No Obligation — No Pressure</li>
          <li><span style="color:var(--green);font-size:1rem;">✓</span> Tailored Strategy Just for You</li>
        </ul>
      </div>
      <div class="form-box">
        <form id="valuationForm"">
          <div class="form-grid">
            <input class="form-input" name="full_name" placeholder="Full Name" placeholder="Your name *"
                minlength="3"
                maxlength="100"
                required/>
            <input class="form-input" name="email" placeholder="Email Address" type="email" required/>
            <input class="form-input" name="phone" placeholder="Phone Number" placeholder="UK phone number"
              pattern="^(?:\+44|0)7\d{9}$"
              title="Enter a valid UK mobile number (e.g. +447123456789)" required/>
            <select class="form-select" name="property_type" required>
              <option value="">Property Type</option>
              <option>Residential</option>
              <option>Commercial</option>
              <option>HMO</option>
              <option>Portfolio</option>
            </select>
            <input class="form-input form-full" name="location" placeholder="Property Location" type="text" required/>
            <textarea class="form-textarea form-full" name="details" placeholder="Brief Details" required  minlength="10"
              maxlength="1000"></textarea>
          </div>
          <button class="form-submit" type="submit">Get My Free Valuation →</button>
          <div id="formMessage"></div>
        </form>
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
        <p class="cta-advisor-desc">Discover how SDI Group can help you build a resilient, high-performing investment portfolio through ethical, data-led opportunities across essential real assets and necessity-led sectors.</p>
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
        <p class="footer-desc">At SDI Group, we protect and grow wealth through ethical, data-led investment in essential assets that create lasting value and meaningful impact. </p>
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


    <script>
     
    //   document.getElementById("valuationForm").addEventListener("submit", function(e) {

    //       e.preventDefault();

    //       let form = this;
    //       let formData = new FormData(form);

    //       fetch("submit_form", {
    //           method: "POST",
    //           body: formData
    //       })

    //       .then(response => response.json())

    //       .then(data => {

    //           let messageBox = document.getElementById("formMessage");

    //           if(data.status === "success") {
    //             console.log("Form submitted successfully:", data.status);

    //               messageBox.innerHTML = `
    //                   <div style="
    //                       margin-top:20px;
    //                       padding:15px;
    //                       background:#d4edda;
    //                       color:#155724;
    //                       border-radius:8px;
    //                       font-weight:600;
    //                   ">
    //                       ${data.message}
    //                   </div>
    //               `;

    //               // RESET FORM
    //               form.reset();

    //           } else {

    //               messageBox.innerHTML = `
    //                   <div style="
    //                       margin-top:20px;
    //                       padding:15px;
    //                       background:#f8d7da;
    //                       color:#721c24;
    //                       border-radius:8px;
    //                       font-weight:600;
    //                   ">
    //                       ${data.message}
    //                   </div>
    //               `;
    //           }

    //           // AUTO REMOVE MESSAGE
    //           setTimeout(() => {
    //               messageBox.innerHTML = "";
    //           }, 4000);

    //       })

    //       .catch(error => {
    //           console.log(error);
    //       });

    //   });

    document.getElementById("valuationForm").addEventListener("submit", function(e) {

    e.preventDefault();

    let form = this;
    let formData = new FormData(form);

    fetch("submit_form", {
        method: "POST",
        body: formData
    })

    .then(response => response.json())

    .then(data => {

        let messageBox = document.getElementById("formMessage");

        if(data.status === "success") {

            console.log("Form submitted successfully:", data.status);

            messageBox.innerHTML = `
                <div style="
                    margin-top:20px;
                    padding:15px;
                    background:#d4edda;
                    color:#155724;
                    border-radius:8px;
                    font-weight:600;
                ">
                    ${data.message}
                </div>
            `;

            form.reset();

        } else {

            messageBox.innerHTML = `
                <div style="
                    margin-top:20px;
                    padding:15px;
                    background:#f8d7da;
                    color:#721c24;
                    border-radius:8px;
                    font-weight:600;
                ">
                    ${data.message}
                </div>
            `;
        }

        setTimeout(() => {
            messageBox.innerHTML = "";
        }, 4000);

    })

    .catch(error => {
        console.error("AJAX Error:", error);
    });

});
    </script>
  </body>
</html>
