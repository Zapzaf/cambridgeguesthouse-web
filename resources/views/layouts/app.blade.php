<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', config('app.name', 'Laravel'))</title>
  <meta name="description" content="@yield('description', 'Cambridge Guest House in Mandaue, Cebu. Clean, comfortable queen-bed rooms with complimentary breakfast, fiber Wi-Fi, free parking, AC and cable TV. Book your stay today.')" />
  <meta name="keywords" content="Cambridge Guest House, guest house Mandaue, hotel Mandaue Cebu, affordable lodging Cebu, family room Cebu, budget hotel near Mactan, Cambaro Mandaue accommodation" />
  <meta name="robots" content="index, follow, max-image-preview:large" />
  <meta name="author" content="Cambridge Guest House" />
  <meta name="theme-color" content="#7b1317" />
  <link rel="canonical" href="@yield('canonical', url()->current())" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cambridge Guest House" />
  <meta property="og:title" content="@yield('og_title', 'Cambridge Guest House — Comfortable Stays in Mandaue, Cebu')" />
  <meta property="og:description" content="@yield('og_description', 'Clean, comfortable queen-bed rooms with complimentary breakfast, fiber Wi-Fi, free parking, AC and cable TV. Warm Cebuano hospitality in Mandaue, minutes from Mactan.')" />
  <meta property="og:url" content="@yield('canonical', url()->current())" />
  <meta property="og:image" content="@yield('og_image', asset('assets/exterior.jpg'))" />
  <meta property="og:locale" content="en_PH" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="@yield('og_title', 'Cambridge Guest House — Comfortable Stays in Mandaue, Cebu')" />
  <meta name="twitter:description" content="@yield('og_description', 'Clean, comfortable queen-bed rooms with complimentary breakfast, fiber Wi-Fi, free parking, AC and cable TV. Warm Cebuano hospitality in Mandaue, minutes from Mactan.')" />
  <meta name="twitter:image" content="@yield('og_image', asset('assets/exterior.jpg'))" />

  <!-- Geo tags (local SEO) -->
  <meta name="geo.region" content="PH-CEB" />
  <meta name="geo.placename" content="Mandaue City, Cebu" />
  <meta name="geo.position" content="10.3459;123.9385" />
  <meta name="ICBM" content="10.3459, 123.9385" />

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/favicon.ico') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/icons/favicon-16x16.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/icons/favicon-32x32.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icons/apple-touch-icon.png') }}" />
  <link rel="manifest" href="{{ asset('assets/icons/site.webmanifest') }}" />

  <!-- Structured data: LodgingBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LodgingBusiness",
    "name": "Cambridge Guest House",
    "image": "{{ asset('assets/exterior.jpg') }}",
    "logo": "{{ asset('assets/logo.png') }}",
    "url": "{{ url('/') }}",
    "telephone": "+639176239188",
    "priceRange": "₱₱",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "C.M. Cabahug, Cambaro",
      "addressLocality": "Mandaue City",
      "addressRegion": "Cebu",
      "postalCode": "6014",
      "addressCountry": "PH"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 10.3459,
      "longitude": 123.9385
    },
    "sameAs": [
      "https://www.facebook.com/cambridgeguesthouseph/"
    ],
    "amenityFeature": [
      { "@type": "LocationFeatureSpecification", "name": "Free Wi-Fi" },
      { "@type": "LocationFeatureSpecification", "name": "Free Parking" },
      { "@type": "LocationFeatureSpecification", "name": "Air Conditioning" },
      { "@type": "LocationFeatureSpecification", "name": "Complimentary Breakfast" },
      { "@type": "LocationFeatureSpecification", "name": "Cable TV" }
    ]
  }
  </script>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <style>
    :root {
      --brand: #7b1317;
      --brand-dark: #5c0d10;
      --brand-light: #9c2a2e;
      --brand-soft: #fbeeee;
      --ink: #2b2b2b;
      --muted: #6c6c6c;
      --cream: #fbf8f4;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 96px;
      background: #1b0809;
      overflow-x: hidden;
    }

    *, *::before, *::after { box-sizing: border-box; }

    body {
      font-family: 'Poppins', system-ui, -apple-system, sans-serif;
      color: var(--ink);
      background: #1b0809;
      margin: 0;
      min-width: 320px;
      overflow-x: hidden;
    }

    h1, h2, h3, .display-title { font-family: 'Playfair Display', Georgia, serif; }

    /* ---------- Buttons ---------- */
    .btn-brand {
      background-color: var(--brand);
      border-color: var(--brand);
      color: #fff;
      font-weight: 500;
      letter-spacing: .3px;
      transition: all .25s ease;
    }
    .btn-brand:hover, .btn-brand:focus {
      background-color: var(--brand-dark);
      border-color: var(--brand-dark);
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(123,19,23,.3);
    }
    .btn-outline-brand {
      border-color: var(--brand);
      color: var(--brand);
      font-weight: 500;
      transition: all .25s ease;
    }
    .btn-outline-brand:hover, .btn-outline-brand:focus {
      background-color: var(--brand);
      color: #fff;
      transform: translateY(-2px);
    }

    .text-brand { color: var(--brand) !important; }
    .bg-brand { background-color: var(--brand) !important; }
    .bg-brand-soft { background-color: var(--brand-soft) !important; }

    /* ---------- Navbar ---------- */
    #mainNav {
      top: 0;
      z-index: 1050;
    }
    .navbar {
      transition: background-color .3s ease, box-shadow .3s ease, padding .3s ease;
      padding-top: 1rem;
      padding-bottom: 1rem;
    }
    .navbar .container { min-height: 50px; }
    .navbar-scrolled {
      background-color: #ffffff !important;
      box-shadow: 0 4px 18px rgba(0,0,0,.08);
      padding-top: .5rem;
      padding-bottom: .5rem;
    }
    .navbar-brand-text { font-family: 'Playfair Display', serif; font-weight: 800; line-height: 1.2; font-size: 1.35rem; }
    .navbar .nav-link { font-weight: 500; position: relative; }
    .navbar-scrolled .nav-link { color: var(--ink) !important; }
    .navbar-scrolled .navbar-brand-text { color: var(--brand) !important; }
    .logo-circle-frame {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background-color: #ffffff;
      border: 2px solid #ffffff;
      padding: 3px;
      object-fit: contain;
      margin-right: 10px;
      transition: border-color .3s ease;
    }
    #mainNav.navbar-scrolled .logo-circle-frame {
      border-color: var(--brand);
    }
    .navbar .nav-link::after {
      content: ""; position: absolute; left: .9rem; right: .9rem; bottom: .35rem;
      height: 2px; background: var(--brand); transform: scaleX(0); transform-origin: left;
      transition: transform .25s ease;
    }
    .navbar .nav-link:hover::after, .navbar .nav-link.active::after { transform: scaleX(1); }
    section[id], header[id] { scroll-margin-top: 96px; }

    /* ---------- Hero ---------- */
    .hero {
      position: relative;
      min-height: 100vh;
      width: 100%;
      overflow: hidden;
      display: flex;
      align-items: center;
      color: #fff;
      background:
        linear-gradient(rgba(40,7,8,.72), rgba(40,7,8,.62)),
        url("assets/exterior.jpg") center/cover no-repeat fixed;
    }
    .hero h1 { font-size: clamp(2.4rem, 6vw, 4.6rem); font-weight: 800; line-height: 1.05; }
    .hero .lead { font-size: clamp(1rem, 2vw, 1.25rem); max-width: 620px; }
    .hero-badge {
      display: inline-flex; align-items: center; gap: .5rem;
      background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.3);
      padding: .45rem 1rem; border-radius: 50rem; font-size: .85rem; letter-spacing: .5px;
      backdrop-filter: blur(4px);
    }
    .scroll-indicator {
      position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
      color: rgba(255,255,255,.85); font-size: 1.6rem; animation: bob 1.8s infinite;
    }
    @keyframes bob { 0%,100%{ transform: translate(-50%,0);} 50%{ transform: translate(-50%,10px);} }

    /* ---------- Section helpers ---------- */
    section { padding: 5.5rem 0; background: #fff; }
    .section-eyebrow {
      text-transform: uppercase; letter-spacing: 3px; font-size: .8rem;
      font-weight: 600; color: var(--brand);
    }
    .section-title { font-weight: 700; font-size: clamp(1.8rem, 4vw, 2.6rem); }
    .divider { width: 70px; height: 3px; background: var(--brand); border: 0; opacity: 1; border-radius: 2px; }

    /* ---------- Amenities ---------- */
    .amenity-card {
      background: #fff; border: 1px solid #f0e9e9; border-radius: 16px;
      padding: 2rem 1.6rem; height: 100%; transition: all .3s ease;
    }
    .amenity-card:hover { transform: translateY(-8px); box-shadow: 0 18px 40px rgba(123,19,23,.12); border-color: var(--brand-soft); }
    .amenity-icon {
      width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;
      border-radius: 14px; background: var(--brand-soft); color: var(--brand);
      font-size: 1.7rem; margin-bottom: 1.2rem; transition: all .3s ease;
    }
    .amenity-card:hover .amenity-icon { background: var(--brand); color: #fff; transform: rotate(-6deg); }

    /* ---------- Rooms ---------- */
    .room-card {
      border: none; border-radius: 18px; overflow: hidden; background: #fff;
      box-shadow: 0 10px 30px rgba(0,0,0,.07); transition: all .35s ease; height: 100%;
    }
    .room-card:hover { transform: translateY(-8px); box-shadow: 0 22px 48px rgba(123,19,23,.18); }
    .room-card .room-img { height: 250px; object-fit: cover; width: 100%; transition: transform .5s ease; }
    .room-card:hover .room-img { transform: scale(1.06); }
    .room-img-wrap { overflow: hidden; position: relative; }
    .price-tag {
      position: absolute; top: 16px; right: 16px; background: var(--brand); color: #fff;
      padding: .4rem .9rem; border-radius: 50rem; font-weight: 600; font-size: .95rem;
      box-shadow: 0 6px 16px rgba(123,19,23,.4);
    }
    .price-tag small { font-weight: 400; opacity: .85; }
    .room-feature { font-size: .9rem; color: var(--muted); }
    .room-feature i { color: var(--brand); }

    .modal-room-img { height: 420px; object-fit: cover; width: 100%; }
    .carousel-control-prev-icon, .carousel-control-next-icon { background-color: rgba(123,19,23,.7); border-radius: 50%; padding: 1.2rem; background-size: 50%; }

    /* ---------- About / stats ---------- */
    .about-img { border-radius: 18px; box-shadow: 0 20px 50px rgba(0,0,0,.18); width: 100%; height: 100%; object-fit: cover; }
    .stat-num { font-family: 'Playfair Display', serif; font-weight: 800; font-size: 2.4rem; color: var(--brand); line-height: 1; }

    /* ---------- Contact ---------- */
    .contact-wrap { background: #fff; border-radius: 20px; box-shadow: 0 18px 50px rgba(0,0,0,.08); overflow: hidden; }
    .contact-info { background: linear-gradient(155deg, var(--brand) 0%, var(--brand-dark) 100%); color: #fff; }
    .contact-info a { color: #fff; text-decoration: none; }
    .contact-info a:hover { text-decoration: underline; }
    .contact-info-item i {
      width: 42px; height: 42px; flex: 0 0 42px; display: flex; align-items: center; justify-content: center;
      background: rgba(255,255,255,.15); border-radius: 12px; font-size: 1.2rem;
    }
    .form-control:focus, .form-select:focus { border-color: var(--brand-light); box-shadow: 0 0 0 .2rem rgba(123,19,23,.18); }
    .map-frame { width: 100%; height: 100%; min-height: 280px; border: 0; }

    /* ---------- Footer ---------- */
    footer { background: #1b0809; color: #d9cccc; }
    footer a { color: #d9cccc; text-decoration: none; transition: color .2s ease; }
    footer a:hover { color: #fff; }
    .social-btn {
      width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center;
      border-radius: 50%; background: rgba(255,255,255,.1); color: #fff; font-size: 1.1rem; transition: all .25s ease;
    }
    .social-btn:hover { background: var(--brand); color: #fff; transform: translateY(-3px); }

    /* ---------- Scroll reveal ---------- */
    .reveal { opacity: 0; transform: translateY(34px); transition: opacity .7s ease, transform .7s ease; }
    .reveal.is-visible { opacity: 1; transform: none; }

    /* ---------- Back to top ---------- */
    #backToTop {
      position: fixed; bottom: 24px; right: 24px; z-index: 1030;
      width: 48px; height: 48px; border-radius: 50%; border: none; background: var(--brand); color: #fff;
      font-size: 1.3rem; box-shadow: 0 8px 22px rgba(123,19,23,.4); opacity: 0; visibility: hidden;
      transition: all .3s ease;
    }
    #backToTop.show { opacity: 1; visibility: visible; }
    #backToTop:hover { background: var(--brand-dark); transform: translateY(-3px); }

    @media (max-width: 991.98px) {
      html { scroll-padding-top: 72px; }
      html,
      body {
        width: 100%;
        max-width: 100%;
        scrollbar-width: none;
        -ms-overflow-style: none;
      }
      html::-webkit-scrollbar,
      body::-webkit-scrollbar {
        display: none;
        width: 0;
        height: 0;
      }
      body { padding-top: 0; }
      #mainNav.fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        background-color: transparent !important;
        box-shadow: none;
        transform: translateZ(0);
        will-change: transform;
      }
      #mainNav.navbar-scrolled {
        background-color: #ffffff !important;
        box-shadow: 0 4px 18px rgba(0,0,0,.08);
      }
      .navbar {
        left: 0;
        right: 0;
        padding-top: .45rem;
        padding-bottom: .45rem;
      }
      .navbar-brand img { height: 40px !important; width: 40px !important; }
      .navbar-brand-text { font-size: 1.05rem; }
      .navbar-collapse { background: #ffffff; border-radius: 12px; margin-top: .6rem; padding: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,.1); }
      .navbar-collapse { max-height: calc(100vh - 82px); overflow-y: auto; }
      #mainNav:not(.navbar-scrolled) .navbar-brand-text { color: #ffffff !important; }
      #mainNav.navbar-scrolled .navbar-brand-text { color: var(--brand) !important; }
      #mainNav.navbar-scrolled .nav-link,
      .navbar-collapse .nav-link { color: var(--ink) !important; }
      #mainNav:not(.navbar-scrolled) .navbar-toggler { color: #ffffff; }
      #mainNav.navbar-scrolled .navbar-toggler { color: var(--brand); }
      #mainNav:not(.navbar-scrolled) .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.95%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }
      .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28123, 19, 23, 0.95%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }
      .navbar-collapse .nav-link::after { display: none; }
      section[id], header[id] { scroll-margin-top: 72px; }
    }
    @media (max-width: 575.98px) {
      section { padding: 3.5rem 0; }
      .hero {
        min-height: 100svh;
        padding-top: 72px;
        background-attachment: scroll;
      }
      .modal-room-img { height: 260px; }
    }
  </style>
</head>
<body>
  @yield('content')

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('year').textContent = new Date().getFullYear();

      const nav = document.getElementById('mainNav');
      const hero = document.getElementById('home');
      const onScroll = () => {
        const heroBottom = hero ? hero.getBoundingClientRect().bottom : 0;
        const scrolled = heroBottom <= nav.offsetHeight;
        nav.classList.toggle('navbar-scrolled', scrolled);
        nav.classList.toggle('navbar-dark', !scrolled);
        nav.classList.toggle('navbar-light', scrolled);
        document.getElementById('backToTop').classList.toggle('show', window.scrollY > 400);
      };
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });

      document.getElementById('backToTop').addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });

      const scrollToElement = (el) => {
        const wasScrolled = nav.classList.contains('navbar-scrolled');
        if (!wasScrolled) {
          nav.classList.add('navbar-scrolled');
        }
        const navHeight = nav.offsetHeight;
        if (!wasScrolled) {
          nav.classList.remove('navbar-scrolled');
        }

        if (el.id === 'home') {
          window.scrollTo({ top: 0, behavior: 'smooth' });
          return;
        }

        const elementPosition = el.getBoundingClientRect().top + window.scrollY;
        const offsetPosition = elementPosition - navHeight - 12;

        window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
      };

      const navCollapse = document.getElementById('navMenu');
      document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function (e) {
          const targetId = this.getAttribute('href');
          if (!targetId || targetId === '#') return;
          if (this.classList.contains('carousel-control-prev') ||
              this.classList.contains('carousel-control-next') ||
              this.hasAttribute('data-bs-toggle') ||
              this.hasAttribute('data-bs-slide')) {
            return;
          }

          const targetElement = document.querySelector(targetId);
          if (!targetElement) return;

          e.preventDefault();

          const isMobileMenuOpen = navCollapse && navCollapse.classList.contains('show');
          if (isMobileMenuOpen) {
            const collapseInstance = bootstrap.Collapse.getOrCreateInstance(navCollapse);
            const onHidden = () => {
              navCollapse.removeEventListener('hidden.bs.collapse', onHidden);
              scrollToElement(targetElement);
            };
            navCollapse.addEventListener('hidden.bs.collapse', onHidden);
            collapseInstance.hide();
          } else {
            scrollToElement(targetElement);
          }
        });
      });

      const sections = Array.from(document.querySelectorAll('section[id], header[id]'));
      const navLinks = Array.from(document.querySelectorAll('#navMenu .nav-link'));
      const setActiveNav = () => {
        const navOffset = nav.offsetHeight + 24;
        const pageBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2;
        let currentId = sections[0]?.id;

        if (pageBottom) {
          currentId = sections[sections.length - 1]?.id;
        } else {
          sections.forEach(section => {
            if (section.offsetTop - navOffset <= window.scrollY) {
              currentId = section.id;
            }
          });
        }

        navLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('href') === '#' + currentId);
        });
      };
      setActiveNav();
      window.addEventListener('scroll', setActiveNav, { passive: true });
      window.addEventListener('resize', setActiveNav);

      const revealObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });
      document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

      const form = document.getElementById('contactForm');
      const alertBox = document.getElementById('formAlert');
      const checkin = document.getElementById('checkin');
      const checkout = document.getElementById('checkout');

      const today = new Date().toISOString().split('T')[0];
      checkin.min = today;
      checkout.min = today;
      checkin.addEventListener('change', () => {
        checkout.min = checkin.value || today;
        if (checkout.value && checkout.value < checkin.value) checkout.value = '';
      });

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let datesValid = true;
        if (checkin.value && checkout.value && checkout.value <= checkin.value) {
          checkout.setCustomValidity('invalid');
          datesValid = false;
        } else {
          checkout.setCustomValidity('');
        }

        if (form.checkValidity() && datesValid) {
          form.reset();
          form.classList.remove('was-validated');
          alertBox.classList.remove('d-none');
          alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
          setTimeout(() => alertBox.classList.add('d-none'), 6000);
        } else {
          form.classList.add('was-validated');
        }
      });
    });
  </script>
</body>
</html>
