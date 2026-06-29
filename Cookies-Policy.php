<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SDI Group - Synergy Data Investments</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="Assets/SDI_Logo.svg">
    <link rel="icon" type="image/png" href="Assets/SDI%20LOGO%20BLACK.png">
    <link rel="apple-touch-icon" href="Assets/SDI%20LOGO%20BLACK.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">

      <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    body{
      background:#f5f7fa;
      color:#333;
      line-height:1.8;

      overflow-x:hidden;
    }

    .cookie-banner{
      background: linear-gradient(135deg, #3a6230, #4a7c3f);

    }

    .cookie-banner{

      color:#fff;
      padding:80px 20px;
      text-align:center;
    }

    .cookie-banner h1{
      font-size:48px;
      margin-bottom:15px;
      font-weight:700;
    }

    .cookie-banner p{
      max-width:800px;
      margin:auto;
      font-size:18px;
      opacity:0.9;
    }

    .cookie-container{
      max-width:1200px;
      margin:60px auto;
      padding:0 20px;
    }

    .cookie-card{
      background:#fff;
      padding:40px;
      margin-bottom:30px;
      border-radius:20px;
      box-shadow:0 10px 30px rgba(0,0,0,0.08);
      transition:0.3s ease;

      max-width:100%;
      overflow-wrap:anywhere;
      word-break:normal;


    }

    .cookie-card:hover{
      transform:translateY(-5px);
    }

    .cookie-card h2{
      font-size:28px;
      margin-bottom:20px;
      color:#0f172a;
      position:relative;


      padding-left:0;
    }

    .cookie-card h2::before{
      display:none;


      padding-left:20px;
    }

    .cookie-card h2::before{
      content:'';
      position:absolute;
      left:0;
      top:5px;
      width:6px;
      height:32px;
      background:#2563eb;
      border-radius:10px;

    }

    .cookie-card p{
      margin-bottom:15px;
      color:#555;
      font-size:16px;
    }

    .cookie-card ul{
      margin-left:20px;
      margin-top:10px;
    }

    .cookie-card ul li{
      margin-bottom:10px;
    }

    .cookie-card a{
      color:#2563eb;
      text-decoration:none;
      font-weight:600;
    }

    .cookie-card a:hover{
      text-decoration:underline;
    }

    .info-grid{
      display:grid;

      grid-template-columns:repeat(auto-fit,minmax(min(280px,100%),1fr));

      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));

      gap:25px;
      margin-top:20px;
    }

    .info-box{

      background:#f6fbf4;
      border:1px solid #d9ead4;

      background:#f8fafc;
      border:1px solid #e2e8f0;

      padding:25px;
      border-radius:16px;
    }

    .info-box h3{
      margin-bottom:15px;
      color:#0f172a;
      font-size:22px;
    }

    .info-box p{
      font-size:15px;
    }

    .highlight{

      background:#edf6ea;
      border-left:5px solid #4a7c3f;

      background:#eff6ff;
      border-left:5px solid #2563eb;

      padding:20px;
      border-radius:12px;
      margin-top:20px;
    }

    .highlight strong{
      color:#0f172a;
    }

    @media(max-width:768px){

      .cookie-banner{


        padding:60px 16px;

        padding:60px 20px;


      }

      .cookie-banner h1{
        font-size:34px;

        line-height:1.2;
      }

      .cookie-banner p{
        font-size:16px;
      }

      .cookie-container{
        margin:36px auto;
        padding:0 14px;
      }

      .cookie-card{
        padding:22px;
        border-radius:16px;
        margin-bottom:24px;

      }

      .cookie-card{
        padding:25px;

      }

      .cookie-card h2{
        font-size:24px;

        line-height:1.25;
      }

      .info-grid{
        grid-template-columns:1fr;
        gap:16px;
      }

      .info-box,
      .highlight{
        padding:18px;
        border-radius:14px;
      }

      .info-box h3{
        font-size:20px;
        line-height:1.25;
      }

    }

    @media(max-width:420px){

      .cookie-card{
        padding:18px;
      }

      .cookie-card ul{
        margin-left:16px;
      }

      .cookie-card p,
      .cookie-card ul li{
        font-size:15px;

      }

    }
  </style>
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
      <li><button onclick="navigate('succession')" data-page="succession">Succession Planning</button></li>
    </li>
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
    <button onclick="navigate('succession'); closeMobile()">Succession Planning</button>
    <button class="nav-cta" onclick="closeMobile()">Book a Consultation →</button>
    <a class="nav-whatsapp mobile-whatsapp" href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." target="_blank" rel="noopener noreferrer" aria-label="Chat with SDI Group on WhatsApp">
      <i class="fab fa-whatsapp" aria-hidden="true"></i>
      <span>WhatsApp</span>
    </a>
  </div>
</nav>

<main>
    <section class="cookie-banner">
        <h1>Website Cookie Policy</h1>
        <p>
            Below is our cookie policy usage on this website.
        </p>
        <p>
        By accessing the Website, you agree that this Cookie Policy will apply whenever you access the Website on any device.
        Any changes to this policy will be posted here. 
        </p>
        <p>
        We reserve the right to vary this Cookie Policy from time to time and such changes shall become effective as soon as they are posted. Your continued use of the Website constitutes your agreement to all such changes.
        Further details about managing cookies on all types of devices can be found here: www.aboutcookies.org.
        </p>
    </section>

<div class="cookie-container">

  <div class="cookie-card">
    <h2>Introduction</h2>

    <p>
     Our website uses several cookies. A cookie is a small file of letters and numbers that we put on your device.
    </p>

    <p>
      These cookies allow us to distinguish you from other visitors of our website which helps us to provide the best user experience when browsing our site, and also allows us to improve our site.
        Our site uses the following types of cookie:
    </p>

    <!-- <p>
      Learn more about managing cookies here:
      <a href="https://www.aboutcookies.org" target="_blank">
        www.aboutcookies.org
      </a>
    </p> -->
  </div>

  <!-- <div class="cookie-card">
    <h2>What Are Cookies?</h2>

    <p>
      Cookies are small text files placed on your computer or mobile device when
      you browse websites. They help websites function efficiently and improve
      user experience.
    </p>

    <div class="highlight">
      <strong>Our cookies help us:</strong>
      <ul>
        <li>Understand website traffic</li>
        <li>Improve website performance</li>
        <li>Enhance security and functionality</li>
        <li>Provide a better browsing experience</li>
      </ul>
    </div>
  </div> -->

  <div class="cookie-card">
    <h2>Types of Cookies We Use</h2>

    <div class="info-grid">

      <div class="info-box">
        <h3>Analytics Cookies</h3>
        <p>
         Analytics cookies allow us to report on the number of people visiting our website, what pages they visit, 
         and how they arrived on our site. This information is collected anonymously and is only use to gather 
         feedback in order to make improvements to our site.

        </p>

        <p>
          We use Google Analytics for this functionality. 
        </p>

        <p>
            You can find out more about Google Analytics at the following 
            <br>
            page: https://policies.google.com/technologies/partner-sites

        </p>
      </div>

      <div class="info-box">
        <h3>Functional Cookies</h3>
        <p>
          Functional cookies are essential to allow our website to function correctly. We use them to distinguish you from other users of our site in order to provide you with the best possible user experience and to improve security
        </p>
      </div>

      <div class="info-box">
        <h3>Marketing Cookies</h3>
        <p>
          Marketing & Advertising Cookies
            We use remarketing cookies via Google to serve more relevant adverts on third-party sites to users that have visited our site in the past.
            You can opt out of remarketing by setting your ad preferences with Google at the following page:<br>
            <a> https://www.google.com/ads/preferences https://privacy.microsoft.com/en-gb/privacystatement</a><br>
            This website uses cookies, as almost all websites do, to help provide you with the best experience we can. Cookies are small text files that are placed on your computer or mobile when you browse websites.
            Our Cookies help:
            traffic logs to identify which pages are being used
            We do not use cookies to:
            collect any personal identifiable information(without your express permission);
            collect any sensitive information (without your express permission);
            pass data to advertising networks;
            pass personally identifiable data to third parties;
            pay sales commissions.
            You can learn more about all the cookies we use below.

        </p>

      
      </div>

    </div>
  </div>

  <div class="cookie-card">
    <h2>Allowing us to use cookies</h2>

    <p>
        If the settings on your software that you are using to view this website (your browser) are adjusted to accept cookies
         we take this, and your continued use of our website to mean that you are fine with this. 
         Should you wish to remove or not use cookies from our site you can learn how to do this below, 
         however doing so will likely mean that our site will not work, as you would expect.
        We use traffic log cookies to identify which pages are being used. This helps us analyse data 
        about web page traffic and improve our website in order to tailor it to customer needs. 
        We only use this information for statistical analysis purposes and then the data is removed from the system.

    </p>
  </div>

  <div class="cookie-card">
    <h2>Anonymous Visitor Statistics cookies</h2>

    <p>
      We use cookies to compile anonymous visitor statistics such as how many people have visited our website, what type of technology they are using (e.g Mac or Windows which help to identify when our site isn't working as it should for particular technologies), how long they spend on the site, what page they look at etc. This helps us to continuously improve our website. These so called analytic programs also tell us if, on an anonymous basis, how people reached this site (e.g from a search engine).
        To disable Google Analytics,
    </p>


    <p>
     visit this tool
      <a href=" https://tools.google.com/dlpage/gaoptout" target="_blank">
        
      </a>
    </p>
  </div>

  <div class="cookie-card">
    <h2>Turning cookies off</h2>

    <p>
      Most modern browsers allow you to control your cookie settings.
       You can disable them completely by editing your browser settings, 
       however in doing this you may be limiting the functionality that is displayed on our website and also a 
       large population of websites on the Internet that use cookies to serve their content.
    </p>

    <p>
      To learn how to disable cookies on browsers please click here
    
      <a href="https://support.google.com/accounts/bin/answer.py?hl=en&answer=61416" target="_blank">
        Cookie Settings Help
      </a>
    </p>
  </div>

</div>

</main>


<section>
  <?php include 'includes/footer.php'; ?>
</section>



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
