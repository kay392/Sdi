<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>SDI Group - Complaint Procedure</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

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
      background:#f4f7fb;
      color:#333;
      line-height:1.8;
    }

    /* HERO SECTION */

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


    /* MAIN CONTAINER */

    .policy-container{
      max-width:1200px;
      margin:60px auto;
      padding:0 20px;
    }

    /* CARD */

    .policy-card{
      background:#fff;
      border-radius:22px;
      padding:45px;
      margin-bottom:35px;
      box-shadow:0 10px 35px rgba(0,0,0,0.08);
      transition:0.3s ease;
    }

    .policy-card:hover{
      transform:translateY(-5px);
    }

    .policy-card h2{
      font-size:32px;
      margin-bottom:25px;
      color:#0f172a;
      position:relative;
      padding-left:22px;
    }

    .policy-card h2::before{
      content:'';
      position:absolute;
      left:0;
      top:6px;
      width:6px;
      height:36px;
      background:#2563eb;
      border-radius:10px;
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

    /* DEFINITIONS GRID */

    .definitions-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:25px;
      margin-top:25px;
    }

    .definition-box{
      background:#f8fafc;
      border:1px solid #e2e8f0;
      border-radius:18px;
      padding:25px;
      transition:0.3s ease;
    }

    .definition-box:hover{
      background:#eff6ff;
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

    /* HIGHLIGHT BOX */

    .highlight-box{
      background:#eff6ff;
      border-left:5px solid #2563eb;
      padding:25px;
      border-radius:14px;
      margin-top:25px;
    }

    .highlight-box strong{
      color:#0f172a;
    }

    /* STEPS */

    .step-box{
      background:#f8fafc;
      border-radius:18px;
      padding:30px;
      margin-top:25px;
      border:1px solid #e2e8f0;
    }

    .step-box h3{
      color:#1e3a8a;
      margin-bottom:15px;
      font-size:24px;
    }

    .step-box p{
      margin-bottom:15px;
    }

    /* CONTACT */

    .contact-box{
      text-align:center;
      background:linear-gradient(135deg,#2563eb,#1d4ed8);
      color:#fff;
      padding:50px 30px;
      border-radius:22px;
    }

    .contact-box h2{
      color:#fff;
      padding-left:0;
    }

    .contact-box h2::before{
      display:none;
    }

    .contact-box p{
      color:#e2e8f0;
    }

    .contact-box a{
      display:inline-block;
      margin-top:20px;
      background:#fff;
      color:#1d4ed8;
      padding:14px 30px;
      border-radius:50px;
      text-decoration:none;
      font-weight:600;
      transition:0.3s ease;
    }

    .contact-box a:hover{
      background:#dbeafe;
    }

    /* MOBILE */

    @media(max-width:768px){

      .policy-hero{
        padding:70px 20px;
      }

      .policy-hero h1{
        font-size:38px;
      }

      .policy-card{
        padding:28px;
      }

      .policy-card h2{
        font-size:26px;
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
    <section class="policy-hero">
    <h1>Complaints Policy</h1>

    <p>
      We value customer feedback and are committed to handling all complaints
      fairly, professionally, and as quickly as possible.
    </p>
  </section>

  <div class="policy-container">

    <!-- DEFINITIONS -->

    <div class="policy-card">

      <h2>Definitions</h2>

      <div class="definitions-grid">

        <div class="definition-box">
          <h3>Appeal</h3>
          <p>
            means your request to escalate a Complaint from Level One to Level Two 
            if you are not satisfied with the outcome at Level One
          </p>
        </div>

        <div class="definition-box">
          <h3>Appeal Handler</h3>
          <p>
            means an employee of Synergy Data Investments working at (insert level) who will handle Level Two Complaints
          </p>
        </div>

        <div class="definition-box">
          <h3>Business Day</h3>
          <p>
            means, any day (other than Saturday or Sunday) on which ordinary banks are open for their full range of normal business in (insert location)
          </p>
        </div>

        <div class="definition-box">
          <h3>Complaint</h3>
          <p>
            means a complaint about (insert goods) AND/OR (insert services) sold by Synergy Data Investments, about our customer service, or about our employees [agents] [subcontractors];
          </p>
        </div>

        <div class="definition-box">
          <h3>Complaints Form</h3>
          <p>
            [means our standard complaints form, available from (insert location(s))];]
          </p>
        </div>

        <div class="definition-box">
          <h3>Complaint Handler</h3>
          <p>
            means an employee of Synergy Data Investments working at (insert level) who will handle Level One Complaints;
          </p>
        </div>
        <div class="definition-box">
          <h3>Complaints Policy</h3>
          <p>
            means this document;
          </p>
        </div>
        <div class="definition-box">
          <h3>Complaints Procedure</h3>
          <p>
            means the internal complaints handling procedure of Synergy Data Investments which is followed when handling a Complaint and is available from (insert location(s)) for your reference;
          </p>
        </div>
        <div class="definition-box">
          <h3>Complaint Reference</h3>
          <p>
            means a unique code assigned to your Complaint that will be used to track your Complaint;
          </p>
        </div>
        <div class="definition-box">
          <h3>External Resolution</h3>
          <p>
            [means the referral of your Complaint to an external body or organisation for resolution if you are not satisfied with the outcome at Level Two;]
          </p>
        </div>
        <div class="definition-box">
          <h3>“Level One</h3>
          <p>
           means the first stage in our complaints handling procedure under which your Complaint will be handled by a Complaint Handler; and
          </p>
        </div>
          <div class="definition-box">
          <h3>“Level Two</h3>
          <p>
            means the second stage in our complaints handling procedure under which you may appeal the outcome of a Level One Complaint.  Your Complaint will be handled by an Appeal Handler.          </p>
        </div>

      </div>

    </div>

    <!-- PURPOSE -->

    <div class="policy-card">

      <h2>Purpose of This Policy</h2>

      

      <div class="highlight-box">



        <ul>
          <li>Synergy Data Investments welcomes and encourages feedback of all kinds from our customers.  If you have a Complaint about our (goods) AND/OR (services), our customer service, or about our employees [agents] [subcontractors], not only do we want to resolve it to your satisfaction but we also want to learn from it in order to improve our business and customer experience in the future.
            </li>
          <li>It is our policy to resolve Complaints quickly and fairly, where possible without recourse to formal investigations or external bodies.  In particular, the aims of this Complaints Policy are</li>
            <ul>
                <li>To provide a clear and fair procedure for any customers who wish to make a Complaint about Synergy Data Investments, our (goods) AND/OR (services), our customer service, or about our employees [agents] [subcontractors];</li>
                <li>To ensure that everyone working for or with Synergy Data Investments knows how to handle Complaints made by our customers;</li>
                <li>To ensure that all Complaints are handled equally and in a fair and timely fashion;</li>
                <li>To ensure that important information is gathered from Complaints and used in the future to avoid such a situation arising again.</li>
                
            </ul>  
          
        </ul>

      </div>

    </div>

    <!-- WHAT THIS POLICY COVERS -->

    <div class="policy-card">

      <h2>What This Policy Covers</h2>

      <ul>
        <li>This Complaints Policy applies to [the sale of goods] AND/OR [the provision of services] by Synergy Data Investments), to our customer service and to our employees [agents] [subcontractors].</li>
        <li>For the purposes of this Complaints Policy, any reference to Synergy Data Investments also includes our employees [agents] [subcontractors]</li>
        <li>Complaints may relate to any of our activities and may include (but not be limited to):</li>
        <ul>
          <li>The quality of customer service you have received from Synergy Data Investments;</li>
          <li>The behaviour and/or professional competence of our employees [agents] [subcontractors];</li>
          <li>[Delays, defects or other problems associated with the sale of goods by Synergy Data Investments;]</li>
          <li>[Delays, defects, poor workmanship or other problems associated with the provision of services by Synergy Data Investments;]</li>
          <li>(Insert additional examples or remove as appropriate).</li>
        </ul>
        <li>The following are not considered to be Complaints and should therefore be directed to the appropriate [person] OR [department]:</li>
        <ul>
          <li>General questions about our [goods] AND/OR [services];</li>
          <li>[Returns of damaged, faulty, incorrect or unwanted goods for exchange or refund in accordance with [my] OR [our] (insert document e.g. Sale of Goods Terms and Conditions) where there is no further complaint];</li>
          <li>Matters concerning contractual or other legal disputes;</li>
          <li>Formal requests for the disclosure of information, for example, under the Data Protection Act;</li>
          <li>(Insert additional examples or remove as appropriate).</li>
      </ul>

    </div>

    <!-- MAKING A COMPLAINT -->

    <div class="policy-card">

      <h2>Making a Complaint</h2>

     

      <ul>
        <li>All Complaints, whether they concern our [goods] AND/OR [services], our customer service, or our employees [agents] [subcontractors], should be made in one of the following ways:</li>
            <ul>
                <li>[In writing, addressed to (insert name and/or position)), (insert address));]</li>
                <li>[By email, addressed to (insert name and/or position)) at (insert email address));]</li>
                <li>[Using our Complaints Form, following the instructions included with the form;]</li>
                <li>[By contacting us by telephone on (insert telephone number)) [and choosing option (insert number)) when prompted.]]</li>
            </ul>
        <li>When making a Complaint, you will be required to provide the following information in as much detail as is reasonably possible:</li>
        
      </ul>

      <div class="highlight-box">

        <strong>Please include:</strong>

        <ul>
          <li>Your name, address, telephone number and email address (We will contact you using your preferred contact method as your Complaint is handled)</li>
          <li>If you are making a Complaint on behalf of someone else, that person’s name and contact details as well as your own;</li>
          <li>If you are making a Complaint about a particular transaction, the (insert reference number, e.g. order number, invoice number etc.</li>
          <li>If you are making a Complaint about a particular employee [agent] [subcontractor] of ours, the name and, where appropriate, position of that employee [agent] [subcontractor];</li>
          <li>Further details of your Complaint including, as appropriate, all times, dates, events, and people involved;</li>
          <li>Details of any documents or other evidence you wish to rely on in support of your Complaint;</li>
          <li>Details of what you would like Synergy Data Investments to do to resolve your Complaint and to put things right.  (Please note that whilst we will make every reasonable effort to accommodate such requests, we are not bound to take any action beyond that which we may be contractually or otherwise legally obliged to take.)</li>
          <li>(Insert additional examples or remove as appropriate).</li>
        </ul>

      </div>

    </div>

    <!-- LEVEL ONE -->

    <div class="policy-card">

      <h2>How We Handle Complaints</h2>

      <div class="step-box">

        

        <p>
          <<Insert business name>> operates a two-stage complaints handling procedure.  
            Following our Complaints Procedure, our aim is to always resolve Complaints to your satisfaction at Level One without
             further recourse to Level Two.  If you are not satisfied at the end of Level One, you may escalate your Complaint
              to Level Two.  [If you are still not satisfied at the end of Level Two, 
              Complaints may progress to External Resolution as detailed below.]

        </p>



      </div>

      <div class="step-box">


        
        <li>Level One:
            <ul>
                <li>
                    Upon receipt of your Complaint, the (insert position) identified above in Section 4.1 will log the Complaint in our (insert location, e.g. complaints log, complaints system etc.) and will acknowledge receipt of it in writing within (insert period), giving you a Complaint Reference
                </li>
                <li>
                    When we acknowledge receipt of your Complaint we will also provide details of your Complaint Handler.  This may be the (insert position) to whom your original Complaint was directed (as above) or your Complaint may be assigned to another appropriate member of our team.
                </li>
                <li>
                    If your Complaint relates to a specific employee [agent] [subcontractor], that person will be informed of your Complaint and given a fair and reasonable opportunity to respond.  Any communication between you and the employee [agent] [subcontractor] in question should take place only via the Complaint Handler and we respectfully ask that you do not contact the employee [agent] [subcontractor] in question directly concerning the Complaint while we are working to resolve it
                </li>
                <li>
                    If we require any further information or evidence from you, the Complaint Handler will contact you as quickly as is reasonably possible to ask for it.  We ask that you use reasonable efforts to supply any such information or evidence quickly in order to avoid delaying the complaints handling process.  If you are for any reason unable to provide such information or evidence we will use all reasonable efforts to proceed without it, however please be aware that we will not ask for further information or evidence unless we consider it important to the successful resolution of your Complaint.
                </li>
                <li>
                    We aim to resolve Level One Complaints within (insert period), however in some cases, particularly if your Complaint is of a complex nature, this may not be possible.  If this is not possible for any reason you will be informed of the delay, the likely length of the delay and the reasons for it.
                </li>
                <li>
                    At the conclusion of the Level One complaints procedure, regardless of the outcome, we will provide you with full details of our investigation, our conclusions from that investigation, and any action taken as a result.  You will also be reminded of your right to appeal our decision and escalate the complaint to Level Two in the form of an Appeal.
                </li>


            </ul>
        </li>
        <li>
            Level Two:
            <ul>
                <li>
                    If you are not satisfied with the resolution of your complaint at Level One, you may appeal the decision within (insert period)), and have the complaint escalated to Level Two.  Appeals are handled by (insert staff level, e.g. management)) level members of our team.

                </li>
                <li>
                    Appeals, quoting your original Complaint Reference, should be directed to your original Complaint Handler who will forward the request to an appropriate Appeal Handler.  Receipt of Appeals will be acknowledged in writing within (insert period)).  When we acknowledge receipt of your Appeal we will also provide details of your Appeal Handler.                </li>
                <li>
                    If your Complaint relates to a specific employee [agent] [subcontractor], that person will be informed of your Appeal and given a further opportunity to respond.  Any communication between you and the employee [agent] [subcontractor] in question should take place only via the Appeal Handler and we respectfully ask that you do not contact the employee [agent] [subcontractor] in question directly concerning the Complaint while we are working to resolve it.</li>
                <li>
                    If we require any further information or evidence from you, the Appeal Handler will contact you as quickly as is reasonably possible to ask for it.  We ask that you use reasonable efforts to supply any such information or evidence to us quickly in order to avoid delaying the complaints handling process.  If you are for any reason unable to provide such information or evidence we will use all reasonable efforts to proceed without it, however please be aware that we will not ask for further information or evidence unless we consider it important to the successful resolution of your Complaint.                </li>
                <li>
                    We aim to resolve Level Two Complaints within (insert period), however in some cases, particularly if your Complaint is of a complex nature, this may not be possible.  If this is not possible for any reason you will be informed of the delay, the likely length of the delay and the reasons for it.                </li>
                <li>
                    At the conclusion of the Level Two procedure, regardless of the outcome, we will provide you with full details of our investigation, our conclusions from that investigation, and any action taken as a result.  Our decision at this stage is final [, subject to your right to seek External Resolution of your Complaint].                </li>
                <li>
                    [[As we are a member of] OR [As we are regulated by] OR [(insert appropriate association or connection)] (insert name of organisation)) you, as our customer, have the right to seek External Resolution of your Complaint from that organisation if you are not satisfied with the outcome of your Level Two Complaint.]]
                </li>
            </ul>
        </li>
        <li>
            External Resolution:
            <ul>
                <li>
                    If you are not satisfied with the resolution of your Complaint at Level Two you may seek External Resolution of your Complaint from (insert name of organisation).  For details of complaint and conflict resolution mechanisms available from (insert name of organisation)), please contact them by post at (insert address)), by telephone on (insert telephone number)), by email at (insert email address)), or via their website at (insert URL)).

                </li>
            </ul>
        </li>

        </li>
            Confidentiality and Data Protection
            <ul>
                <li>
                    All Complaints and information relating thereto are treated with the utmost confidence.  Such information will only be shared with those employees [agents] [subcontractors] of Synergy Data Investments) who need to know in order to handle your Complaint.
                </li>
                <li>
                    We may ask for your permission to use details of your Complaint (with your personal details removed) for internal training and quality improvement purposes.  If you have given such permission, you may revoke it at any time by contacting (insert name and/or position)), whose details are provided above in Section 4.1.
                </li>
                <li>
                    All personal information that we may collect (including, but not limited to, your name and address) will be collected, used and held in accordance with the provisions of the Data Protection Act 1998 and your rights under that Act.
                </li>
            </ul>
        </li>

        <li>
            Questions and Further Information:
            <ul>
                <li>
                    If you have any questions or require further information about any aspect of this Complaints Policy or about our Complaints Procedure, please contact (insert name and position / department etc.)) by post at (insert address)), by telephone on (insert telephone number)), or by email at (insert email address)).
                </li>
            </ul>
        </li>

        <li>
            Policy Responsibility and Review:
            <ul>
                <li>
                    Overall responsibility for this Complaints Policy within Synergy Data Investments) and the implementation thereof lies with (insert name and position / department etc.)).                
                </li>
                <li>
                    This Complaints Policy is regularly reviewed and updated as required.
                </li>
                <li>
                    This Complaints Policy was adopted on (insert date)).
                </li>
                <li>
                    This Complaints Policy was last reviewed on (insert date)).

                </li>
            </ul>
        </li>
      </div>

    </div>

    <!-- DATA PROTECTION -->
<!-- 
    <div class="policy-card">

      <h2>Confidentiality & Data Protection</h2>

      <p>
        All complaints and related information are treated confidentially
        and handled in accordance with applicable data protection laws.
      </p>

      <p>
        Information will only be shared with authorised personnel who
        require access in order to resolve your complaint.
      </p>

    </div>

    <!-- REVIEW -->

    <!-- <div class="policy-card">

      <h2>Policy Review</h2>

      <p>
        This Complaints Policy is regularly reviewed and updated where necessary
        to ensure it remains effective and compliant.
      </p>

      <ul>
        <li>Policy Adoption Date: DD/MM/YYYY</li>
        <li>Last Reviewed Date: DD/MM/YYYY</li>
      </ul>

    </div> -->

    <!-- CONTACT -->

    <!-- <div class="contact-box">

      <h2>Need Further Assistance?</h2>

      <p>
        If you have any questions regarding this Complaints Policy,
        please contact our support team.
      </p>

      <a href="contact.php">Contact Us</a>

    </div> -->

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
 