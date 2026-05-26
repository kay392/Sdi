<!-- includes/footer.php -->

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

        <p class="footer-desc">
          At SDI Group, we protect and grow wealth through ethical, data-led investment in essential assets that create lasting value and meaningful impact.
        </p>

        <div class="social-links">
          <a class="social-btn" href="https://www.facebook.com/people/Synergy-Data-Investments/61574838262549/" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a class="social-btn" href="https://www.instagram.com/synergydatainvestments/" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>

          <a class="social-btn" href="https://www.linkedin.com/company/synergy-data-investments/" target="_blank">
            <i class="fab fa-linkedin-in"></i>
          </a>

          <a class="social-btn" href="https://wa.me/447551935869" target="_blank">
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
          <li><button onclick="navigate('succession')">&#8250; Succession Planning</button></li>
        </ul>
      </div>

      <div>
        <h4 class="footer-heading">Investment Services</h4>

        <ul class="footer-links">
         
          <!-- <li><button onclick="navigate('investments')">Investments</button></li> -->

           <li>
            <button onclick="window.location.href='investment.php#investment-01'">&#8250; 
              Fixed Return
            </button>
          </li>
          <li>
            <button onclick="window.location.href='investment.php#investment-02'">&#8250; 
              Earn & Learn
            </button>
          </li>

          <li>
            <button onclick="window.location.href='investment.php#investment-03'">&#8250; 
              Joint Venture Partnership
            </button>
          </li>

           <!-- <li><button onclick="navigate('investments')">&#8250; Strategy</button></li> -->

          <li>
            <button onclick="navigate('succession')">&#8250; 
              Succession & Exit Planning
            </button>
          </li>
        </ul>
      </div>

      <div>
        <h4 class="footer-heading">Contact Us</h4>

        <ul class="footer-contact-items">
          <li class="footer-contact-item">
            <span class="contact-icon">✉</span>

            <a href="mailto:hello@sdigroup.co.uk">
              hello@sdigroup.co.uk
            </a>
          </li>

          <li class="footer-contact-item">
            <span class="contact-icon">⊕</span>

            <a href="https://maps.app.goo.gl/p5NSSyDjDc6p8G9QA" target="_blank">
              1 Moorlane, Bolton, BL1 4TA
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-bottom-inner">
      <span>
        © 2025 SDI Group (Synergy Data Investments). All rights reserved.
      </span>

      <div class="footer-bottom-links">
<<<<<<< HEAD
          <?php $current = basename($_SERVER['PHP_SELF']); ?>
          <a href="Complaint-Procedure.php" class="<?php echo ($current === 'Complaint-Procedure.php') ? 'active' : ''; ?>">Complaint Procedure</a>
          <span>|</span>

          <a href="Data-Protection-Policy.php" class="<?php echo ($current === 'Data-Protection-Policy.php') ? 'active' : ''; ?>" data-page="data-protection">Data Protection Policy</a>
          <span>|</span>

          <a href="Cookies-Policy.php" class="<?php echo ($current === 'Cookies-Policy.php') ? 'active' : ''; ?>" data-page="cookies">Cookies Policy</a>
=======
        <a onclick="window.location.href='Complaint-Procedure.php'">Complaint Procedure</a>
        <span>|</span>

        <a onclick="window.location.href='Data-Protection-Policy.php'" class="active" data-page="data-protection">Data Protection Policy</a>
        <span>|</span>

        <a onclick="window.location.href='Cookies-Policy.php'" class="active" data-page="cookies">Cookies Policy</a>
>>>>>>> 96ae41ae086b25fda9813c87f31192c1d84b4255
      </div>
    </div>
  </div>

</footer>
