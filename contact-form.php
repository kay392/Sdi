<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Consultation | SDI Group</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="contact-form-page">
  <div class="consultation-dialog" role="dialog" aria-modal="true" aria-labelledby="consultationTitle">
    <div class="consultation-panel">
      <div class="consultation-icon" aria-hidden="true">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="5" width="18" height="14" rx="2"/>
          <path d="m3 7 9 6 9-6"/>
        </svg>
      </div>
      <div>
        <h2>Smarter property investing starts here</h2>
        <p>Book a private consultation with SDI Group and explore a data-led route for growth, income, or exit planning.</p>
      </div>
      <ul class="consultation-benefits">
        <li><span>&check;</span><span>Personal strategy discussion</span></li>
        <li><span>&check;</span><span>Investment and succession guidance</span></li>
        <li><span>&check;</span><span>No pressure. Clear next steps.</span></li>
      </ul>
    </div>
    <div class="consultation-form-wrap">
      <button class="consultation-close" type="button" aria-label="Close consultation form" data-close-consultation>&times;</button>
      <h3 id="consultationTitle">Book a consultation</h3>
      <p class="consultation-subtitle">Tell us a little about you and we will come back to arrange a suitable time.</p>
       <form class="consultation-form" id="consultationForm">

        <!-- FULL NAME -->
        <input 
          name="full_name"
          type="text"
          placeholder="Your name *"
          minlength="3"
          maxlength="100"
          required
        >

        <!-- EMAIL -->
        <input 
          name="email"
          type="email"
          placeholder="Email address *"
          required
        >

        <!-- UK PHONE NUMBER -->
        <input 
          name="phone"
          type="tel"
          placeholder="UK phone number"
          pattern="^(?:\+44|0)7\d{9}$"
          title="Enter a valid UK mobile number (e.g. +447123456789)"
        >

        <!-- PROPERTY TYPE -->
        <select name="property_type" aria-label="Area of interest" required>
          <option value="">What would you like to discuss?</option>
          <option>Property investment</option>
          <option>Earn & Learn programme</option>
          <option>Joint venture partnership</option>
          <option>Succession & exit planning</option>
          <option>Others</option>
        </select>

        <!-- DETAILS -->
        <textarea 
          name="details"
          placeholder="Briefly tell us about your goals"
          minlength="10"
          maxlength="1000"
        ></textarea>

        <button class="consultation-submit" type="submit">
          Request consultation
        </button>

        <div id="formMessage"></div>

      </form>
      <p class="consultation-note">By submitting this form, you agree that SDI Group may contact you about your enquiry.</p>
      
    </div>
  </div>

  <script>
      document.getElementById("consultationForm").addEventListener("submit", function(e) {

          e.preventDefault();

          const form = this;
          let formData = new FormData(form);

          fetch("submit_form", {
              method: "POST",
              body: formData
          })

          .then(async response => {

                let text = await response.text(); // IMPORTANT FIX

                try {
                    return JSON.parse(text);
                } catch (e) {
                    console.log("Invalid JSON response:", text);
                    throw new Error("Server error");
                }

            })

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

                  // RESET FORM
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

              // AUTO REMOVE MESSAGE
              setTimeout(() => {
                  messageBox.innerHTML = "";
              }, 4000);

          })

          .catch(error => {
              console.log(error);
          });

      });
  </script>
</body>
</html>
