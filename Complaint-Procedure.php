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
    <style>
      *{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif;}
      body{background:#f4f7fb;color:#333;line-height:1.8;overflow-x:hidden;}
      .policy-hero{background:linear-gradient(135deg,#3a6230,#4a7c3f);color:#fff;padding:90px 20px;text-align:center;}
      .policy-hero h1{font-size:52px;margin-bottom:20px;font-weight:700;}
      .policy-hero p{max-width:860px;margin:auto;font-size:18px;opacity:0.92;}
      .policy-container{max-width:1200px;margin:60px auto;padding:0 20px;}
      .policy-card{background:#fff;border-radius:22px;padding:45px;margin-bottom:35px;box-shadow:0 10px 35px rgba(0,0,0,0.08);transition:0.3s ease;max-width:100%;overflow-wrap:anywhere;word-break:normal;}
      .policy-card h2{font-size:32px;margin-bottom:25px;color:#0f172a;}
      .policy-card p{margin-bottom:18px;color:#555;font-size:16px;}
      .policy-card ul{margin-left:20px;margin-top:10px;}
      .policy-card ul li{margin-bottom:12px;color:#555;}
      .policy-card strong{color:#0f172a;}
      .highlight-box{background:#edf6ea;border-left:5px solid #4a7c3f;padding:25px;border-radius:14px;margin-top:25px;}
      @media(max-width:768px){.policy-hero{padding:64px 16px;}.policy-hero h1{font-size:38px;}.policy-card{padding:32px;}}
      @media(max-width:420px){.policy-hero h1{font-size:32px;}}    
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
    <h1>COMPLAINTS POLICY</h1>
    <p>At SDI Group, we welcome and encourage feedback of all kinds. If you have a Complaint about our services, our customer service, or our team, we aim to resolve it fairly and learn from it.</p>
  </section>

  <div class="policy-container">
    <div class="policy-card">
      <h2>Definitions</h2>
      <p>In this Complaints Policy the following expressions have the following meanings:</p>
      <dl>
        <dt>“Appeal”</dt>
        <dd>means your request to escalate a Complaint from Level One to Level Two if you are not satisfied with the outcome at Level One;</dd>

        <dt>“Appeal Handler”</dt>
        <dd>means an employee of &lt;&lt;insert business name&gt;&gt; working at &lt;&lt;insert level&gt;&gt; who will handle Level Two Complaints;</dd>

        <dt>“Business Day”</dt>
        <dd>means, any day (other than Saturday or Sunday) on which ordinary banks are open for their full range of normal business in &lt;&lt;insert location&gt;&gt;;</dd>

        <dt>“Complaint”</dt>
        <dd>means a complaint about [goods] AND/OR [services] sold by &lt;&lt;insert business name&gt;&gt;, about our customer service, or about our employees [agents] [subcontractors];</dd>

        <dt>[“Complaints Form”]</dt>
        <dd>[means our standard complaints form, available from &lt;&lt;insert location(s)&gt;&gt;;]</dd>

        <dt>“Complaint Handler”</dt>
        <dd>means an employee of &lt;&lt;insert business name&gt;&gt; working at &lt;&lt;insert level&gt;&gt; who will handle Level One Complaints;</dd>

        <dt>“Complaints Policy”</dt>
        <dd>means this document;</dd>

        <dt>“Complaints Procedure”</dt>
        <dd>means the internal complaints handling procedure of &lt;&lt;insert business name&gt;&gt; which is followed when handling a Complaint and is available from &lt;&lt;insert location(s)&gt;&gt; for your reference;</dd>

        <dt>“Complaint Reference”</dt>
        <dd>means a unique code assigned to your Complaint that will be used to track your Complaint;</dd>

        <dt>[“External Resolution”]</dt>
        <dd>[means the referral of your Complaint to an external body or organisation for resolution if you are not satisfied with the outcome at Level Two;]</dd>

        <dt>“Level One”</dt>
        <dd>means the first stage in our complaints handling procedure under which your Complaint will be handled by a Complaint Handler; and</dd>

        <dt>“Level Two”</dt>
        <dd>means the second stage in our complaints handling procedure under which you may appeal the outcome of a Level One Complaint. Your Complaint will be handled by an Appeal Handler.</dd>
      </dl>
    </div>

    <div class="policy-card">
      <h2>Purpose of this Complaints Policy</h2>
      <p>&lt;&lt;Insert business name&gt;&gt; welcomes and encourages feedback of all kinds from our customers. If you have a Complaint about our [goods] AND/OR [services], our customer service, or about our employees [agents] [subcontractors], not only do we want to resolve it to your satisfaction but we also want to learn from it in order to improve our business and customer experience in the future.</p>
      <p>It is our policy to resolve Complaints quickly and fairly, where possible without recourse to formal investigations or external bodies. In particular, the aims of this Complaints Policy are:</p>
      <ul>
        <li>To provide a clear and fair procedure for any customers who wish to make a Complaint about &lt;&lt;insert business name&gt;&gt;, our [goods] AND/OR [services], our customer service, or about our employees [agents] [subcontractors];</li>
        <li>To ensure that everyone working for or with &lt;&lt;insert business name&gt;&gt; knows how to handle Complaints made by our customers;</li>
        <li>To ensure that all Complaints are handled equally and in a fair and timely fashion;</li>
        <li>To ensure that important information is gathered from Complaints and used in the future to avoid such a situation arising again.</li>
      </ul>
    </div>

    <div class="policy-card">
      <h2>What this Complaints Policy Covers</h2>
      <p>This Complaints Policy applies to [the sale of goods] AND/OR [the provision of services] by &lt;&lt;insert business name&gt;&gt;, to our customer service and to our employees [agents] [subcontractors].</p>
      <p>For the purposes of this Complaints Policy, any reference to &lt;&lt;insert business name&gt;&gt; also includes our employees [agents] [subcontractors].</p>
      <p>Complaints may relate to any of our activities and may include (but not be limited to):</p>
      <ul>
        <li>The quality of customer service you have received from &lt;&lt;insert business name&gt;&gt;;</li>
        <li>The behaviour and/or professional competence of our employees [agents] [subcontractors];</li>
        <li>[Delays, defects or other problems associated with the sale of goods by &lt;&lt;insert business name&gt;&gt;;]</li>
        <li>[Delays, defects, poor workmanship or other problems associated with the provision of services by &lt;&lt;insert business name&gt;&gt;;]</li>
        <li>&lt;&lt;Insert additional examples or remove as appropriate&gt;&gt;.</li>
      </ul>
      <p>The following are not considered to be Complaints and should therefore be directed to the appropriate [person] OR [department]:</p>
      <ul>
        <li>General questions about our [goods] AND/OR [services];</li>
        <li>[Returns of damaged, faulty, incorrect or unwanted goods for exchange or refund in accordance with [my] OR [our] &lt;&lt;insert document e.g. Sale of Goods Terms and Conditions&gt;&gt; where there is no further complaint];</li>
        <li>Matters concerning contractual or other legal disputes;</li>
        <li>Formal requests for the disclosure of information, for example, under the Data Protection Act;</li>
        <li>&lt;&lt;Insert additional examples or remove as appropriate&gt;&gt;.</li>
      </ul>
    </div>

    <div class="policy-card">
      <h2>Making a Complaint</h2>
      <p>All Complaints, whether they concern our [goods] AND/OR [services], our customer service, or our employees [agents] [subcontractors], should be made in one of the following ways:</p>
      <ul>
        <li>[In writing, addressed to &lt;&lt;insert name and/or position&gt;&gt;, &lt;&lt;insert address&gt;&gt;;]</li>
        <li>[By email, addressed to &lt;&lt;insert name and/or position&gt;&gt; at &lt;&lt;insert email address&gt;&gt;;]</li>
        <li>[Using our Complaints Form, following the instructions included with the form;]</li>
        <li>[By contacting us by telephone on &lt;&lt;insert telephone number&gt;&gt; [and choosing option &lt;&lt;insert number&gt;&gt; when prompted.]]</li>
      </ul>
      <p>When making a Complaint, you will be required to provide the following information in as much detail as is reasonably possible:</p>
      <ul>
        <li>Your name, address, telephone number and email address (We will contact you using your preferred contact method as your Complaint is handled);</li>
        <li>If you are making a Complaint on behalf of someone else, that person’s name and contact details as well as your own;</li>
        <li>If you are making a Complaint about a particular transaction, the &lt;&lt;insert reference number, e.g. order number, invoice number etc.&gt;&gt;;</li>
        <li>If you are making a Complaint about a particular employee [agent] [subcontractor] of ours, the name and, where appropriate, position of that employee [agent] [subcontractor];</li>
        <li>Further details of your Complaint including, as appropriate, all times, dates, events, and people involved;</li>
        <li>Details of any documents or other evidence you wish to rely on in support of your Complaint;</li>
        <li>Details of what you would like &lt;&lt;insert business name&gt;&gt; to do to resolve your Complaint and to put things right. (Please note that whilst we will make every reasonable effort to accommodate such requests, we are not bound to take any action beyond that which we may be contractually or otherwise legally obliged to take.)</li>
        <li>&lt;&lt;Insert additional information or remove as appropriate&gt;&gt;.</li>
      </ul>
    </div>

    <div class="policy-card">
      <h2>How We Handle Your Complaint</h2>
      <p>&lt;&lt;Insert business name&gt;&gt; operates a two-stage complaints handling procedure. Following our Complaints Procedure, our aim is to always resolve Complaints to your satisfaction at Level One without further recourse to Level Two. If you are not satisfied at the end of Level One, you may escalate your Complaint to Level Two. [If you are still not satisfied at the end of Level Two, Complaints may progress to External Resolution as detailed below.]</p>
      <h3>Level One</h3>
      <p>Upon receipt of your Complaint, the &lt;&lt;insert position&gt;&gt; identified above in Section 4.1 will log the Complaint in our &lt;&lt;insert location, e.g. complaints log, complaints system etc.&gt;&gt; and will acknowledge receipt of it in writing within &lt;&lt;insert period&gt;&gt;, giving you a Complaint Reference.</p>
      <p>When we acknowledge receipt of your Complaint we will also provide details of your Complaint Handler. This may be the &lt;&lt;insert position&gt;&gt; to whom your original Complaint was directed (as above) or your Complaint may be assigned to another appropriate member of our team.</p>
      <p>If your Complaint relates to a specific employee [agent] [subcontractor], that person will be informed of your Complaint and given a fair and reasonable opportunity to respond. Any communication between you and the employee [agent] [subcontractor] in question should take place only via the Complaint Handler and we respectfully ask that you do not contact the employee [agent] [subcontractor] in question directly concerning the Complaint while we are working to resolve it.</p>
      <p>If we require any further information or evidence from you, the Complaint Handler will contact you as quickly as is reasonably possible to ask for it. We ask that you use reasonable efforts to supply any such information or evidence quickly in order to avoid delaying the complaints handling process. If you are for any reason unable to provide such information or evidence we will use all reasonable efforts to proceed without it, however please be aware that we will not ask for further information or evidence unless we consider it important to the successful resolution of your Complaint.</p>
      <p>We aim to resolve Level One Complaints within &lt;&lt;insert period&gt;&gt;, however in some cases, particularly if your Complaint is of a complex nature, this may not be possible. If this is not possible for any reason you will be informed of the delay, the likely length of the delay and the reasons for it.</p>
      <p>At the conclusion of the Level One complaints procedure, regardless of the outcome, we will provide you with full details of our investigation, our conclusions from that investigation, and any action taken as a result. You will also be reminded of your right to appeal our decision and escalate the complaint to Level Two in the form of an Appeal.</p>
      <h3>Level Two</h3>
      <p>If you are not satisfied with the resolution of your complaint at Level One, you may appeal the decision within &lt;&lt;insert period&gt;&gt;, and have the complaint escalated to Level Two. Appeals are handled by &lt;&lt;insert staff level, e.g. management&gt;&gt; level members of our team.</p>
      <p>Appeals, quoting your original Complaint Reference, should be directed to your original Complaint Handler who will forward the request to an appropriate Appeal Handler. Receipt of Appeals will be acknowledged in writing within &lt;&lt;insert period&gt;&gt;. When we acknowledge receipt of your Appeal we will also provide details of your Appeal Handler.</p>
      <p>If your Complaint relates to a specific employee [agent] [subcontractor], that person will be informed of your Appeal and given a further opportunity to respond. Any communication between you and the employee [agent] [subcontractor] in question should take place only via the Appeal Handler and we respectfully ask that you do not contact the employee [agent] [subcontractor] in question directly concerning the Complaint while we are working to resolve it.</p>
      <p>If we require any further information or evidence from you, the Appeal Handler will contact you as quickly as is reasonably possible to ask for it. We ask that you use reasonable efforts to supply any such information or evidence to us quickly in order to avoid delaying the complaints handling process. If you are for any reason unable to provide such information or evidence we will use all reasonable efforts to proceed without it, however please be aware that we will not ask for further information or evidence unless we consider it important to the successful resolution of your Complaint.</p>
      <p>We aim to resolve Level Two Complaints within &lt;&lt;insert period&gt;&gt;, however in some cases, particularly if your Complaint is of a complex nature, this may not be possible. If this is not possible for any reason you will be informed of the delay, the likely length of the delay and the reasons for it.</p>
      <p>At the conclusion of the Level Two procedure, regardless of the outcome, we will provide you with full details of our investigation, our conclusions from that investigation, and any action taken as a result. Our decision at this stage is final [, subject to your right to seek External Resolution of your Complaint].</p>
      <p>[[As we are a member of] OR [As we are regulated by] OR [&lt;&lt;insert appropriate association or connection&gt;&gt;] &lt;&lt;insert name of organisation&gt;&gt; you, as our customer, have the right to seek External Resolution of your Complaint from that organisation if you are not satisfied with the outcome of your Level Two Complaint.]]</p>
      <p>[External Resolution: If you are not satisfied with the resolution of your Complaint at Level Two you may seek External Resolution of your Complaint from &lt;&lt;insert name of organisation&gt;&gt;. For details of complaint and conflict resolution mechanisms available from &lt;&lt;insert name of organisation&gt;&gt;, please contact them by post at &lt;&lt;insert address&gt;&gt;, by telephone on &lt;&lt;insert telephone number&gt;&gt;, by email at &lt;&lt;insert email address&gt;&gt;, or via their website at &lt;&lt;insert URL&gt;&gt;.]</p>
    </div>

    <div class="policy-card">
      <h2>Confidentiality and Data Protection</h2>
      <p>All Complaints and information relating thereto are treated with the utmost confidence. Such information will only be shared with those employees [agents] [subcontractors] of &lt;&lt;insert business name&gt;&gt; who need to know in order to handle your Complaint.</p>
      <p>We may ask for your permission to use details of your Complaint (with your personal details removed) for internal training and quality improvement purposes. If you have given such permission, you may revoke it at any time by contacting &lt;&lt;insert name and/or position&gt;&gt;, whose details are provided above in Section 4.1.</p>
      <p>All personal information that we may collect (including, but not limited to, your name and address) will be collected, used and held in accordance with the provisions of the Data Protection Act 1998 and your rights under that Act.</p>
    </div>

    <div class="policy-card">
      <h2>Questions and Further Information</h2>
      <p>If you have any questions or require further information about any aspect of this Complaints Policy or about our Complaints Procedure, please contact &lt;&lt;insert name and position / department etc.&gt;&gt; by post at &lt;&lt;insert address&gt;&gt;, by telephone on &lt;&lt;insert telephone number&gt;&gt;, or by email at &lt;&lt;insert email address&gt;&gt;.</p>
    </div>

    <div class="policy-card">
      <h2>Policy Responsibility and Review</h2>
      <p>Overall responsibility for this Complaints Policy within &lt;&lt;insert business name&gt;&gt; and the implementation thereof lies with &lt;&lt;insert name and position / department etc.&gt;&gt;.</p>
      <p>This Complaints Policy is regularly reviewed and updated as required.</p>
      <p>This Complaints Policy was adopted on &lt;&lt;insert date&gt;&gt;.</p>
      <p>This Complaints Policy was last reviewed on &lt;&lt;insert date&gt;&gt;.</p>
    </div>
  </div>
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
