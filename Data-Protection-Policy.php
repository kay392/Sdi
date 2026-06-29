<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SDI Group - Data Protection Policy</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="Assets/SDI_Logo.svg">
    <link rel="icon" type="image/png" href="Assets/SDI%20LOGO%20BLACK.png">
    <link rel="apple-touch-icon" href="Assets/SDI%20LOGO%20BLACK.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: Arial, sans-serif;
      }

      body{
        background:#f4f7fb;
        color:#333;
        line-height:1.8;
        overflow-x:hidden;
      }

      .policy-hero{
        background:linear-gradient(135deg,#3a6230,#4a7c3f);
        color:#fff;
        padding:90px 20px;
        text-align:center;
      }

      .policy-hero h1{
        font-size:52px;
        margin-bottom:20px;
        font-weight:700;
      }

      .policy-hero p{
        max-width:860px;
        margin:auto;
        font-size:18px;
        opacity:0.92;
      }

      .download-cta{
        display:inline-block;
        margin-top:28px;
        background:#fff;
        color:#1d4ed8;
        padding:16px 32px;
        border-radius:999px;
        font-weight:700;
        text-decoration:none;
        transition:transform 0.25s ease, background 0.25s ease, color 0.25s ease;
      }

      .download-cta:hover{
        transform:translateY(-2px);
        background:#f3f4f6;
        color:#0f172a;
      }

      .policy-container{
        max-width:1200px;
        margin:60px auto;
        padding:0 20px;
      }

      .policy-card{
        background:#fff;
        border-radius:22px;
        padding:45px;
        margin-bottom:35px;
        box-shadow:0 10px 35px rgba(0,0,0,0.08);
        transition:0.3s ease;
        max-width:100%;
        overflow-wrap:anywhere;
        word-break:normal;
      }

      .policy-card:hover{
        transform:translateY(-5px);
      }

      .policy-card h2{
        font-size:32px;
        margin-bottom:25px;
        color:#0f172a;
      }

      .policy-card p{
        margin-bottom:18px;
        color:#555;
        font-size:16px;
      }

      .policy-card ul{
        margin-left:20px;
        margin-top:10px;
      }

      .policy-card ul li{
        margin-bottom:12px;
        color:#555;
      }

      .policy-card strong{
        color:#0f172a;
      }

      .definitions-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(min(280px,100%),1fr));
        gap:25px;
        margin-top:25px;
      }

      .definition-box{
        background:#f6fbf4;
        border:1px solid #d9ead4;
        border-radius:18px;
        padding:25px;
        transition:0.3s ease;
      }

      .definition-box:hover{
        background:#edf6ea;
        transform:translateY(-4px);
      }

      .definition-box h3{
        font-size:22px;
        color:#0f172a;
        margin-bottom:15px;
      }

      .definition-box p{
        font-size:15px;
        color:#555;
        margin:0;
      }

      .highlight-box{
        background:#edf6ea;
        border-left:5px solid #4a7c3f;
        padding:25px;
        border-radius:14px;
        margin-top:25px;
      }

      .highlight-box strong{
        color:#0f172a;
      }

      @media(max-width:768px){
        .policy-hero{
          padding:64px 16px;
        }

        .policy-hero h1{
          font-size:38px;
        }

        .policy-card{
          padding:32px;
        }
      }

      @media(max-width:420px){
        .policy-hero h1{
          font-size:32px;
        }

        .download-cta{
          width:100%;
          text-align:center;
        }
      }
    </style>
</head>
<body>

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
  <section class="policy-hero">
    <h1>Data Protection Policy</h1>
    <p>
      At SDI Group, your privacy and the security of your personal data are central to everything we do. This page explains how we collect, use, store and protect your information.
    </p>
    <a href="Assets/SDI%20-%20Data%20Privacy%20Policy.docx.pdf" download="SDI-Data-Protection-Policy.pdf" target="_blank" class="download-cta" aria-label="Download Data Protection Policy">Download Data Protection Policy</a>
  </section>
</main>

<section>
  <?php include 'includes/footer.php'; ?>
</section>

<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Scroll to top">↑</button>
<script src="script.js"></script>

<a href="https://wa.me/447551935869?text=Hello%2C%20I%20would%20like%20to%20book%20a%20consultation." 
target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp" 
style="position:fixed;right:1.5rem;bottom:5rem;z-index:9999;width:56px;height:56px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 24px rgba(37,211,102,0.5);text-decoration:none;" 
onmouseover="this.style.transform='scale(1.12)'" onmouseout="this.style.transform='scale(1)'">
  <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="fill:#ffffff;display:block;">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>

</body>
</html>
