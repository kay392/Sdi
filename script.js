function isPageReload() {
  const navigationEntry = performance.getEntriesByType?.('navigation')?.[0];

  if (navigationEntry) {
    return navigationEntry.type === 'reload';
  }

  return performance.navigation?.type === 1;
}

const shouldResetReloadScroll = isPageReload();

if (shouldResetReloadScroll && 'scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}

function scrollPageToTop() {
  window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
}

function scrollReloadToTop() {
  if (!shouldResetReloadScroll) return;

  scrollPageToTop();
  requestAnimationFrame(scrollPageToTop);
  window.addEventListener('DOMContentLoaded', scrollPageToTop, { once: true });
  window.addEventListener('load', () => {
    scrollPageToTop();
    setTimeout(scrollPageToTop, 0);
  }, { once: true });
}

scrollReloadToTop();




let currentPage = 'home';
 
  const routes = {
    home: 'index.php',
    about: 'aboutus.php',
    investments: 'investment.php',
    succession: 'succession.php'
  };

  const pageAliases = {
    home: ['index', 'index.php', 'index.html', 'home', 'home.php', 'home.html', ''],
    about: ['aboutus', 'aboutus.php', 'aboutus.html'],
    investments: ['investment', 'investment.php', 'investment.html'],
    succession: ['succession', 'succession.php', 'succession.html']
  };

  function getPathToken() {
    const path = window.location.pathname.replace(/\\/g, '/').toLowerCase();
    const trimmed = path.endsWith('/') ? path.slice(0, -1) : path;
    const token = trimmed.split('/').pop();
    return token || 'index';
  }

  function getCurrentPage() {
    const token = getPathToken();

    for (const [page, aliases] of Object.entries(pageAliases)) {
      if (aliases.includes(token)) {
        return page;
      }
    }

    return 'home';
  }

  function isLegacyHomePath() {
    const token = getPathToken();
    return token === 'home' || token === 'home.php' || token === 'home.html';
  }

  function initScrollAnimations() {
    const animatedContainers = [
      '.stat-card',
      '.stats-bar-item',
      '.service-card',
      '.project-card',
      '.pathway-card',
      '.feature-mini',
      '.process-card',
      '.promise-box',
      '.team-card',
      '.challenge-card',
      '.stay-item',
      '.exit-card',
      '.partner-card',
      '.testimonial-grid > div',
      '.who-photos > div',
      '.about-founder-card',
      '.mission-visual',
      '.commitment-photo',
      '.invest-badge',
      '.form-box',
      '.form-card',
      '.contact-card',
      '.hero-btns',
      '.footer-grid > *',
      '.footer-bottom-inner > *'
    ];

    const selectors = [
      'main section h1',
      'main section h2',
      'main section h3',
      'main section h4',
      'main section h5',
      'main section h6',
      'main section p',
      'main section li',
      'main section img',
      'main section button',
      'main section input',
      'main section select',
      'main section textarea',
      'main section .accent-bar',
      'main section .section-label',
      'main section .invest-block-num',
      'main section .green-circle-icon',
      'main section .feature-navy-icon',
      'main section .challenge-icon',
      'main section .exit-icon',
      '.cta-inner > *',
      ...animatedContainers
    ];

    const animatedContainerSelector = animatedContainers.join(', ');
    const ignoredSelector = [
      'nav',
      '.navbar',
      '.mobile-menu',
      '.scroll-top',
      '.hero-bg',
      '.hero-overlay',
      '.about-hero-bg',
      '.about-hero-overlay',
      '.invest-hero-bg',
      '.invest-hero-overlay',
      '.succ-hero-bg',
      '.succ-hero-overlay'
    ].join(', ');

    const revealElements = Array.from(document.querySelectorAll(selectors.join(', ')))
      .filter(element => {
        if (element.closest(ignoredSelector)) return false;

        const animatedParent = element.parentElement?.closest(animatedContainerSelector);
        return !animatedParent;
      });

    revealElements.forEach((element, index) => {
      element.classList.add('reveal-on-scroll');
      element.classList.remove(
        'reveal-delay-1',
        'reveal-delay-2',
        'reveal-delay-3',
        'reveal-delay-4',
        'reveal-delay-5',
        'reveal-from-left',
        'reveal-from-right',
        'reveal-zoom'
      );

      const delayClass = `reveal-delay-${(index % 5) + 1}`;
      if (
        element.matches(`${animatedContainerSelector}, main section h1, main section h2, main section h3, main section p, main section li, main section button, main section input, main section select, main section textarea`)
      ) {
        element.classList.add(delayClass);
      }

      const isVisualElement = element.matches(
        'main section img, .about-founder-card, .mission-visual, .commitment-photo, .invest-badge, .who-photos > div, .form-box, .form-card, .contact-card'
      );

      if (isVisualElement) {
        element.classList.add('reveal-zoom');
      }

      if (
        element.matches('.commitment-section > :first-child, .mission-section > :first-child, .who-section > :first-child, .stay-grid > :first-child, .invest-block-inner > :first-child, .valuation-grid > :first-child')
      ) {
        element.classList.add('reveal-from-left');
      } else if (
        element.matches('.commitment-section > :last-child, .mission-section > :last-child, .who-section > :last-child, .stay-grid > :last-child, .invest-block-inner > :last-child, .valuation-grid > :last-child')
      ) {
        element.classList.add('reveal-from-right');
      }
    });

    const revealIfInView = () => {
      revealElements.forEach(element => {
        if (element.classList.contains('reveal-visible')) return;

        const rect = element.getBoundingClientRect();
        const inView = rect.top <= window.innerHeight * 0.86 && rect.bottom >= 0;

        if (inView) {
          element.classList.add('reveal-visible');
        }
      });
    };

    requestAnimationFrame(() => {
      requestAnimationFrame(revealIfInView);
    });

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver(
        entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('reveal-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.12,
          rootMargin: '0px 0px -14% 0px'
        }
      );

      revealElements.forEach(element => {
        if (!element.classList.contains('reveal-visible')) {
          observer.observe(element);
        }
      });
    }

    window.addEventListener('scroll', revealIfInView, { passive: true });
    window.addEventListener('resize', revealIfInView);
  }

  // function initHeroYouTubeVideo() {
  //   const heroBg = document.querySelector('.hero-bg[data-youtube-id]');
  //   if (!heroBg) return;

  //   const videoId = heroBg.dataset.youtubeId;
  //   const canUseYouTubeEmbed = window.location.protocol === 'http:' || window.location.protocol === 'https:';

  //   if (!videoId || !canUseYouTubeEmbed) return;

  //   const iframe = document.createElement('iframe');
  //   const params = new URLSearchParams({
  //     autoplay: '1',
  //     mute: '1',
  //     loop: '1',
  //     playlist: videoId,
  //     controls: '0',
  //     rel: '0',
  //     modestbranding: '1',
  //     playsinline: '1',
  //     origin: window.location.origin
  //   });

  //   iframe.src = `https://www.youtube.com/embed/${videoId}?${params.toString()}`;
  //   iframe.title = 'SDI Group hero video';
  //   iframe.allow = 'autoplay; encrypted-media; picture-in-picture';
  //   iframe.referrerPolicy = 'strict-origin-when-cross-origin';
  //   iframe.setAttribute('allowfullscreen', '');

  //   iframe.addEventListener('load', () => {
  //     heroBg.classList.add('has-youtube');
  //   });

  //   heroBg.appendChild(iframe);
  // }
 
  function setActivePage(page) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    const targetPage = document.getElementById('page-' + page);
    if (targetPage) targetPage.classList.add('active');
 
    document.querySelectorAll('[data-page]').forEach(btn => {
      btn.classList.toggle('active', btn.dataset.page === page);
    });
 
    const titles = {
      home: 'SDI Group - Synergy Data Investments',
      about: 'About Us | SDI Group',
      investments: 'Investments | SDI Group',
      succession: 'Succession & Exit Planning | SDI Group'
    };
    document.title = titles[page] || titles.home;
    currentPage = page;
  }
 
  function navigate(page) {
    if (routes[page]) {
      const currentPageName = getCurrentPage();

      if (currentPageName !== page || (page === 'home' && isLegacyHomePath())) {
        const targetUrl = new URL(routes[page], window.location.href);
        window.location.href = targetUrl.href;
        return;
      }
    }
 
    setActivePage(page);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
 
  function toggleMobile() {
    const menu = document.getElementById('mobileMenu');
    const icon = document.getElementById('mobileIcon');
    const isOpen = menu.classList.toggle('open');
    icon.textContent = isOpen ? '✕' : '☰';
  }
 
  function closeMobile() {
    document.getElementById('mobileMenu').classList.remove('open');
    document.getElementById('mobileIcon').textContent = '☰';
  }
 
  function scrollToSection(id, activeButton) {
    const el = document.getElementById(id);
    if (!el) return;

    const navHeight = document.getElementById('navbar')?.offsetHeight || 0;
    const subnavHeight = document.querySelector('.invest-subnav')?.offsetHeight || 0;
    const top = el.getBoundingClientRect().top + window.pageYOffset - navHeight - subnavHeight;
    window.scrollTo({ top, behavior: 'smooth' });

    if (activeButton?.classList.contains('subnav-btn')) {
      document.querySelectorAll('.invest-subnav .subnav-btn').forEach(btn => btn.classList.remove('active'));
      activeButton.classList.add('active');
    }
  }

  function createConsultationModal() {
    const existingModal = document.getElementById('consultationModal');
    if (existingModal) return existingModal;

    const modal = document.createElement('div');
    modal.className = 'consultation-modal';
    modal.id = 'consultationModal';
    modal.setAttribute('aria-hidden', 'true');

    const backdrop = document.createElement('div');
    backdrop.className = 'consultation-backdrop';
    backdrop.dataset.closeConsultation = '';

    const frame = document.createElement('iframe');
    frame.className = 'consultation-frame';
    frame.src = 'contact-form.php';
    frame.title = 'Book a consultation form';

    modal.append(backdrop, frame);

    document.body.appendChild(modal);

    modal.addEventListener('click', event => {
      if (event.target.closest('[data-close-consultation]')) {
        closeConsultationModal();
      }
    });

    frame.addEventListener('load', () => {
      bindConsultationFrame(frame);
    });

    return modal;
  }

  function bindConsultationFrame(frame) {
    let frameDocument;

    try {
      frameDocument = frame.contentDocument || frame.contentWindow.document;
    } catch (error) {
      console.error('Unable to connect consultation form iframe.', error);
      return;
    }

    if (!frameDocument?.body || frameDocument.body.dataset.bound === 'true') return;
    frameDocument.body.dataset.bound = 'true';

    frameDocument.querySelector('[data-close-consultation]')?.addEventListener('click', closeConsultationModal);
  }

  function openConsultationModal() {
    const modal = createConsultationModal();

    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('modal-open');

    const frame = modal.querySelector('.consultation-frame');
    bindConsultationFrame(frame);

    try {
      const frameDocument = frame.contentDocument || frame.contentWindow.document;
      frameDocument.querySelector('#consultationSuccess')?.classList.remove('visible');
      frameDocument.querySelector('input, select, textarea')?.focus();
    } catch (error) {
      frame.focus();
    }
  }

  function closeConsultationModal() {
    const modal = document.getElementById('consultationModal');
    if (!modal) return;

    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');
  }

  window.openConsultationModal = openConsultationModal;
  window.closeConsultationModal = closeConsultationModal;

  document.addEventListener('click', event => {
    const button = event.target.closest('button, a');
    if (!button) return;

    const label = button.textContent.replace(/\s+/g, ' ').trim().toLowerCase();
    if (!label.includes('book a consultation')) return;

    event.preventDefault();
    event.stopPropagation();
    closeMobile();
    openConsultationModal();
  }, true);

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') {
      closeConsultationModal();
    }
  });

  window.addEventListener('message', event => {
    if (event.data?.type === 'closeConsultationModal') {
      closeConsultationModal();
    }
  });
 
  window.addEventListener('scroll', () => {
    const btn = document.getElementById('scrollTop');
    if (!btn) return;
    btn.classList.toggle('visible', window.scrollY > 300);
  });
 
  document.addEventListener('DOMContentLoaded', () => {
    if (isLegacyHomePath()) {
      const canonicalHomeUrl = new URL(routes.home, window.location.href);
      window.location.replace(canonicalHomeUrl.href);
      return;
    }

    setActivePage(getCurrentPage());
    initHeroYouTubeVideo();
    initScrollAnimations();

    const projectsSlider = document.querySelector('.projects-grid');
    const projectButtons = document.querySelectorAll('.projects-section .carousel-btn');

    if (projectsSlider && projectButtons.length === 2) {
      projectButtons[0].addEventListener('click', () => {
        projectsSlider.scrollBy({ left: -projectsSlider.clientWidth, behavior: 'smooth' });
      });

      projectButtons[1].addEventListener('click', () => {
        projectsSlider.scrollBy({ left: projectsSlider.clientWidth, behavior: 'smooth' });
      });
    }
  });



  document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("submit_form.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    console.log("FORM DATA RECEIVED FROM PHP:");
    console.log(data);
  })
  .catch(err => console.log("Error:", err));
});






  

 
 
