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



<!-- ==================== ABOUT PAGE ==================== -->
<div class="page" id="page-about">

  <!-- Hero -->
  <section class="about-hero">
    <div class="about-hero-bg">

    <video autoplay muted loop playsinline>
      <source src="Assets/About_Page/SDI_intro_hero.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    </div>
    <div class="about-hero-overlay"></div>
    <div class="about-hero-content">
      <div>
        <h1 class="hero-title">
  <span class="green-letter" style="color:green !important; margin-right:6px; -webkit-text-stroke: 1px #1a2332; text-stroke: 1px #1a2332; text-shadow: 2px 2px 4px rgba(0,0,0,0.8), -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">S</span>TRATEGIC<br>

  <span class="green-letter" style="color:green !important; margin-right:6px; -webkit-text-stroke: 1px #1a2332; text-stroke: 1px #1a2332; text-shadow: 2px 2px 4px rgba(0,0,0,0.8), -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">D</span>ATA-LED<br>

  <span class="green-letter" style="color:green !important; margin-right:6px; -webkit-text-stroke: 1px #1a2332; text-stroke: 1px #1a2332; text-shadow: 2px 2px 4px rgba(0,0,0,0.8), -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">I</span>MPACTFUL
</h1>
        <!-- <p style="color:#d1d5db;font-size:0.875rem;line-height:1.7;margin-top:1rem;">At SDI Group (Synergy Data Investments), we specialise in structured, data-led property investment across the UK—deploying capital as a force for good.</p>
        <p style="color:#d1d5db;font-size:0.875rem;line-height:1.7;margin-top:0.75rem;">With up to 20 years' experience and £23M deployed, we help investors build resilient, high-performing portfolios through disciplined underwriting, ethical acquisition, and end-to-end delivery.</p> -->
        <p class="hero-text" style="color:#d1d5db;font-size:0.875rem;line-height:1.7;margin-top:1rem;">
          At <strong>SDI Group</strong> — Synergy Data Investments — we align capital, intelligence, and social impact through structured investment in essential real assets.
        </p>

        <p class="hero-text" style="color:#d1d5db;font-size:0.875rem;line-height:1.7;margin-top:1rem;">
          We focus on necessity-led sectors including housing, healthcare, energy, food, and social infrastructure — markets where long-term demand is driven by real-world need rather than speculation.
        </p>

        <p class="hero-text" style="color:#d1d5db;font-size:0.875rem;line-height:1.7;margin-top:1rem;">
          Through disciplined underwriting, ethical acquisition, and strategic execution, we help preserve investor wealth while directing private capital into assets that deliver meaningful outcomes for communities, providers, stakeholders, and future generations.
        </p>
      </div>
      <div class="about-founder-card">
        <img src="Assets/About_Page/About_Ben.jpg" alt="Ben, Founder and Managing Director of SDI Group"/>
        <div class="founder-highlight">Founder-led expertise</div>
        <div class="founder-caption">
          <div class="name">Ben</div>
          <div class="role">Founder & Managing Director</div>
          <div class="org">SDI Group</div>
        </div>
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
            <div class="stat-value">246</div>
            <div class="stat-label">Projects Completed</div>
  
          </div>
        </div>
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div>
            <div class="stat-value">£24.6M</div>
            <div class="stat-label">Capital Deployed</div>
          </div>
        </div>
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <div>
            <div class="stat-value">1384+</div>
            <div class="stat-label">Beds Created</div>
      
          </div>
        </div>
        <div class="stat-card">
          <div class="green-circle-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div>
            <div class="stat-value">18</div>
            <div class="stat-label">Years Experience</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Mission -->
  <section class="mission-section">
    <div>
      <p class="section-label">OUR MISSION</p>
      <h2 class="mission-title">STRUCTURED CAPITAL.<br/>DATA-LED STRATEGY.<br/><span>IMPACTFUL CHANGE.</span></h2>
      <div class="accent-bar"></div>
      <p class="who-text">At SDI Group, we recognise that the global financial system is undergoing significant change. From central banks and international institutions to broader geopolitical forces, today’s economy is increasingly shaped by debt cycles, currency devaluation, rising instability, and a growing need for individuals to take greater control of their financial future.</p>
      <p class="who-text">As governments and institutions face increasing pressure in a volatile and evolving landscape, private capital has a greater role to play. The demand for essential services continues to rise, while public-sector capacity remains stretched. Through structured, data-led investment strategies, we help direct capital into assets and services that support real-world need, improve delivery, and create measurable impact.</p>
      <p class="who-text">
        Our core mission is defined by three principles:
        <strong>Structured Capital.</strong>
        <strong>Data-Led Strategy.</strong>
        <strong>Impactful Change.</strong>
      </p>
      <p class="who-text">We focus on the intrinsic value of investments connected to the necessities and staples of life — including housing, healthcare, energy, food, and essential infrastructure. These are sectors where demand is real, long-term, and socially meaningful. They are not driven by speculation alone, but by fundamental human need, making them powerful foundations for resilient investment and purposeful capital deployment.</p>
      <p class="who-text">Our belief is that ethical equity should do more than generate financial return. Capital should improve outcomes, strengthen communities, support essential providers, and create better access to the assets and services people rely on every day. Every investment should be structured around a genuine win-win outcome, where investors, providers, communities, and end users all benefit from sustainable long-term value.</p>
      <p class="who-text">Our approach combines our service and brand promises with disciplined underwriting, ethical acquisition, strategic asset improvement, compliance-led delivery, and long-term value creation. With up to 18 years of experience across financial analysis, compliance, property strategy, and strategic capital deployment, we assess every opportunity through data, risk, demand, social use, and stakeholder benefit — ensuring capital is deployed with clarity, responsibility, and purpose.</p>
      <p class="who-text">We provide more than investment opportunities. We provide the structure, clarity, and control required to deploy capital with confidence and purpose. Our end-to-end process is built to help individuals protect wealth, build financial independence, and participate in investments that improve outcomes for people, providers, communities, and every stakeholder involved. This is capital with discipline, strategy with purpose, and impact designed to last.
</p>
      
    </div>
    <div class="mission-visual">
      <img src="Assets/About_Page/Mission.jpg" alt="Properties" class="mission-image"/>
      <div class="mission-image-caption">
        <span>Data-led decisions</span>
        <strong>Purposeful property investment</strong>
      </div>
    </div>
  </section>

  <!-- Our Approach -->
  <section class="process-section">
    <div class="container">
      <p class="section-label text-center">OUR APPROACH</p>
      <h2 class="text-center mb-10" style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);">An end-to-end, data-led process.</h2>
        <div class="process-grid">
            <div class="process-card"><div class="process-num">01</div><div class="process-label">Investment Roadmap</div>
            <div class="process-desc">Personalised investment strategy begins here. We design and execute a tailored investment roadmap focused on achieving your target returns and net yield objectives, with structured milestones, defined performance benchmarks, and ongoing strategic reviews to maintain clarity, discipline, and confidence throughout..</div>
        </div>
        <div class="process-card">
            <div class="process-num">02</div>
            <div class="process-label">Secure Opportunities</div>
        <div class="process-desc">Gain exclusive access to high-performing, off-market investment opportunities, often secured below intrinsic value and positioned to enhance target returns and net yield. We manage the full acquisition process — from opportunity appraisal and heads of terms to compliance review and investor onboarding — coordinating a trusted network of specialists to support disciplined execution throughout.</div></div>
        <div class="process-card">
            <div class="process-num">03</div>
            <div class="process-label">Feasibility Planning</div>
            <div class="process-desc">Every investment is rigorously modelled, reviewed, and stress-tested against current and forecast market conditions. We evaluate feasibility, refine entry points, and ensure each opportunity is aligned with your return targets, net yield requirements, portfolio objectives, and the wider economic landscape.</div>
        </div>
        <div class="process-card"><div class="process-num">04</div><div class="process-label">Execution & Deployment</div>
        <div class="process-desc">Our team oversees the full deployment phase with a focus on precision, compliance, and cost efficiency. We manage contracts, capital allocation, and programme timelines strategically to protect performance and maximise target returns and net yield.</div></div>
        <div class="process-card"><div class="process-num">05</div>
        <div class="process-label">Portfolio Oversight & Risk Management</div>
        <div class="process-desc">We provide 24/7 visibility through your dedicated investor dashboard, giving real-time insight, progress tracking, and full operational transparency. From due diligence to active risk management, we continually monitor, protect, and optimise each investment to keep performance aligned with target returns and net yield objectives.

</div>
    </div>
        <div class="process-card"><div class="process-num">06</div><div class="process-label">Asset Enhancement & Value Optimisation</div>
        <div class="process-desc">We apply targeted enhancement strategies where appropriate to increase asset value through operational efficiency, stronger market positioning, and disciplined capital improvements. Every decision is driven by return optimisation, with tailored inputs designed to strengthen long-term net yield performance and overall investment value.</div></div>
        <div class="process-card"><div class="process-num">07</div><div class="process-label">Exit Strategy & Liquidity Planning</div>
        <div class="process-desc">With a minimum of four exit routes built into every investment, we maintain flexibility, downside protection, and clear liquidity options throughout the investment lifecycle. Our valuation team provides detailed reporting, performance reviews, and access to FCA-regulated lending partners to help maximise target returns and support well-timed exits.</div></div>
        <div class="process-card"><div class="process-num">08</div>
        <div class="process-label">Ongoing Growth & Legacy Planning</div>
        <div class="process-desc">Beyond immediate returns, we focus on long-term capital growth and the preservation of generational wealth. Through reinvestment strategies, succession planning, and structured legacy frameworks, we help build lasting financial resilience and enduring portfolio value.</div></div>
      </div>
      <!-- <div class="text-center">
        <button class="btn-primary">Discover Our Approach →</button>
      </div>
    </div> -->
  </section>

  <!-- Brand & Service Promises -->
  <section class="promises-section">
    <div class="container">
      <div class="promises-grid">
        <div class="promise-box promise-box-green">
          <p class="section-label">OUR BRAND PROMISES</p>
          <h2 class="promise-box-title">It takes years to build trust and moments to lose it. That’s why we’ve built our business on 12 key promises. These principles underpin everything we do, ensuring you can rely on us as your long-term investment partner, wherever you are in the world.</h2>
          <!-- <p class="promise-box-sub">Trust is earned, and we protect it every day.</p> -->
          <div class="brand-promise-item"><div class="promise-num">01</div><div>
            <div class="promise-item-title">Serving, Not Selling</div>
            <div class="promise-item-desc">We serve, we do not sell. As a data-driven firm, the facts speak for themselves. We are your strategic partner delivering tailored, data-led investment options. No pushy tactics, just trust, security, and alignment with your financial goals.</div></div></div>
          <div class="brand-promise-item"><div class="promise-num">02</div>
          <div><div class="promise-item-title">Service Agreements That Deliver</div>
          <div class="promise-item-desc">Accountability drives exceptional service. We set clear agreements focused on your investment goals. We uphold the highest standards, constantly reviewing our performance to exceed expectations as your trusted partner.</div></div></div>
          <div class="brand-promise-item"><div class="promise-num">03</div><div><div class="promise-item-title">Fully Certified & Compliant</div><div class="promise-item-desc">We adhere strictly to ICO, PRS, AML, PSC, and NAPSA standards, ensuring full transparency and accuracy. As a certified provider, we safeguard your interests with no hidden agendas, securing your financial future..</div></div></div>
          <div class="brand-promise-item"><div class="promise-num">04</div><div><div class="promise-item-title">Formulas Not Feelings</div><div class="promise-item-desc">We rely on empirical data rather than speculation, applying proven intrinsic valuation principles to guide every investment. Each investment option is meticulously calculated to ensure unbiased, data-driven success.</div></div></div>
          <!-- <button class="btn-primary mt-4">View All 11 Promises →</button> -->
        </div>
        <div class="promise-box promise-box-cream">
          <p class="section-label">OUR SERVICE PROMISES</p>
          <h2 class="promise-box-title">Excellence in every commitment.</h2>
          <p class="promise-box-sub">Our 8 service promises keep your capital protected.</p>
          <div class="service-promise-item"><div class="sp-num">1</div>
          <div class="sp-text"><b>Off Market Projects —</b> All of our opportunities are off- market and directly negotiated		
                with stakeholders, allowing us to provide tailored portfolio assessments and exit strategies.
                This streamlined approach minimises risks, costs, and delays, ensuring efficient acquisitions with minimal disruption.
                </div></div>
          <div class="service-promise-item"><div class="sp-num">2</div>
          <div class="sp-text"><b>Below Market Value —</b> Exclusive below-market investment opportunities that maximise returns through
            high-yield assets in prime sectors. Our expertise lies in securing undervalued opportunities, ensuring compliance, and delivering strong cash flow for sustainable portfolio growth.
            </div></div>
          <div class="service-promise-item"><div class="sp-num">3</div>
          <div class="sp-text"><b>Full Risk Mitigation & Due Diligence —</b> We thoroughly review every investment opportunity with a detailed 42-point checklist, covering financial metrics, compliance, historical performance, and economic factors. This ensures each asset is optimised for current conditions and safeguarded for long-term stability in a dynamic market.
        </div></div>
          <div class="service-promise-item"><div class="sp-num">4</div>
          
          <div class="sp-text"><b>Minimum Four Exits —</b> Every investment is structured with multiple exit strategies to safeguard your
            capital. Leveraging our extensive expertise, we create diversified options, ranging from high-yield assets to government partnerships, ensuring flexibility and long-term security.
            </div></div>
          <div class="service-promise-item"><div class="sp-num">5</div>
          <div class="sp-text"><b>Safe Entry & Exits —</b> Building a trusted brand takes years, but losing it takes moments—so we never compromise for short-term gains. Every investment undergoes a final stress test with our FCA-regulated partners, ensuring optimal entry and exit strategies. If it doesn’t meet our criteria, it doesn’t proceed.
        </div></div>
          <div class="service-promise-item"><div class="sp-num">6</div>
          <div class="sp-text"><b>5-Year Market Pulse —</b> We base our investments on present conditions and future forecasts, using Tier 1 bank-approved methodologies to analyse historical data, CAGR, volatility, and growth for robust 3-5 year projections and sustainable success.</div></div>
          <div class="service-promise-item">
            <div class="sp-num">7</div>
            <div class="sp-text"><b>Investment Oversight -</b> We oversee every stage of each investment, providing seamless management from start to finish. From initial analysis and regulatory compliance to strategic execution and ongoing monitoring, we handle the detail with structure, discipline, and accountability. This gives you clarity, confidence, and peace of mind throughout the process.
            </div></div>
          <div class="service-promise-item"><div class="sp-num">8</div>
          <div class="sp-text"><b>Full Disclosure & Learning —</b> Partnering with us is designed to be transparent, practical, and transformational. You learn at your own pace through a structured process covering key principles, safeguards, legal methods, and investment strategy. Most importantly, our experience is not hidden behind paywalls, coaching fees, or training academies. It is shared through a simple principle: learn by doing. 
            </div>
        </div>
          <!-- <button class="btn-primary mt-4" style="background:transparent;color:var(--green);border:2px solid var(--green);" onmouseover="this.style.background='var(--green)';this.style.color='white';" onmouseout="this.style.background='transparent';this.style.color='var(--green)';">View All Service Promises →</button> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="team-section">
    <div class="container">
      <p class="section-label">OUR TEAM</p>
      <div style="display:grid;margin-bottom:2.5rem;">
        <div>
          <h2 style="font-family:'Poppins',sans-serif;font-size:clamp(1.5rem,3vw,2rem);color:var(--navy);line-height:1.2;">Experience. Expertise. Execution.</h2>
          <p style="color:#4b5563;font-size:0.875rem;line-height:1.7;margin-top:1rem;">We are a family-run investment group supported by a core team of 10, with access to a wider professional network of over 50 skilled delivery and advisory partners. This includes RICS surveyors, valuers, M&A specialists, forensic accountants, legal advisors, tax and succession planning experts, compliance specialists, and other technical partners — allowing us to assess, structure, and deliver investment opportunities with the right expertise at every stage.</p>
        </div>
      </div>
       <div class="team-grid">
        <div class="team-card"><div class="team-photo"><img src="Assets/About_Page/bEN.jpg" alt="Ben"/></div><div class="team-name">Ben </div><div class="team-role">Managing Director</div></div>
        <div class="team-card"><div class="team-photo"><img src="Assets/About_Page/jAKE.jpg" alt="Jake "/></div><div class="team-name">Jake </div><div class="team-role">head of architecture</div></div>
        <div class="team-card"><div class="team-photo"><img src="Assets/About_Page/cLARA.jpg" alt="Clara "/></div><div class="team-name">Clara</div><div class="team-role"> head of operations</div></div>
      
       
      
      </div>
    </div>
  </section>
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


</div>



</main>

<!-- FOOTER -->
<footer>
  <div class="footer-main">
    <div class="footer-grid">
      <div>
        <button class="nav-logo" onclick="navigate('home')">
          <div class="logo-icon-container">
            <img src="Assets/SDI_Logo.svg" alt="SDI Group Logo" class="logo-svg">
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
