
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Zingumah Resources Limited — Anyankyirem Gold Project</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Bebas+Neue&family=Barlow:wght@300;400;500&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet" />
<link rel="stylesheet" href="/css/override.css">
<style>
  :root {
    --gold: #C9913A;
    --gold-light: #E8C06A;
    --gold-pale: #F5E4B8;
    --black: #0A0A08;
    --dark: #111109;
    --mid: #1C1C18;
    --stone: #2E2D27;
    --text: #D4CDB8;
    --text-muted: #7A7868;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--black);
    color: var(--text);
    font-family: 'Barlow', sans-serif;
    font-weight: 300;
    overflow-x: hidden;
  }

  /* ── NOISE TEXTURE OVERLAY ── */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 1000;
    opacity: 0.4;
  }

  /* ── NAV ── */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 100;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 28px 60px;
    background: linear-gradient(to bottom, rgba(10,10,8,0.95), transparent);
  }

  .nav-logo {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.4rem;
    letter-spacing: 0.15em;
    color: var(--gold-light);
  }

  .nav-links {
    display: flex;
    gap: 40px;
    list-style: none;
  }

  .nav-links a {
    font-size: 0.75rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--text-muted);
    text-decoration: none;
    transition: color 0.3s;
  }
  .nav-links a:hover { color: var(--gold-light); }

  /* ── HERO ── */
  .hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 0 60px 80px;
    overflow: hidden;
  }

  .hero-bg {
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 70% 40%, rgba(201,145,58,0.12) 0%, transparent 60%),
      radial-gradient(ellipse 50% 80% at 20% 80%, rgba(201,145,58,0.07) 0%, transparent 50%),
      linear-gradient(160deg, #0A0A08 0%, #141410 50%, #0D0D0A 100%);
  }

  /* Geometric gold lines */
  .hero-lines {
    position: absolute;
    inset: 0;
    overflow: hidden;
    opacity: 0.15;
  }

  .hero-lines svg { width: 100%; height: 100%; }

  .hero-tag {
    font-size: 0.7rem;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 14px;
    animation: fadeUp 1s ease 0.2s both;
  }

  .hero-tag::before {
    content: '';
    display: block;
    width: 40px;
    height: 1px;
    background: var(--gold);
  }

  h1 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(4rem, 9vw, 9rem);
    line-height: 0.9;
    letter-spacing: 0.02em;
    color: #fff;
    margin-bottom: 8px;
    animation: fadeUp 1s ease 0.4s both;
  }

  h1 .gold { color: var(--gold-light); }

  .hero-sub {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.1rem, 2.2vw, 1.8rem);
    font-style: italic;
    font-weight: 300;
    color: var(--gold-pale);
    margin-bottom: 48px;
    max-width: 700px;
    line-height: 1.5;
    animation: fadeUp 1s ease 0.6s both;
  }

  .hero-stats {
    display: flex;
    gap: 60px;
    margin-bottom: 60px;
    animation: fadeUp 1s ease 0.8s both;
  }

  .stat-item { border-left: 1px solid var(--gold); padding-left: 20px; }

  .stat-value {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2.6rem;
    color: var(--gold-light);
    letter-spacing: 0.05em;
    line-height: 1;
  }

  .stat-label {
    font-size: 0.65rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--text-muted);
    margin-top: 4px;
  }

  .hero-cta {
    display: flex;
    gap: 20px;
    animation: fadeUp 1s ease 1s both;
  }

  .btn-primary {
    display: inline-block;
    padding: 16px 44px;
    background: var(--gold);
    color: var(--black);
    font-size: 0.72rem;
    font-weight: 500;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    text-decoration: none;
    transition: background 0.3s, transform 0.2s;
  }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-2px); }

  .btn-outline {
    display: inline-block;
    padding: 16px 44px;
    border: 1px solid var(--gold);
    color: var(--gold-light);
    font-size: 0.72rem;
    font-weight: 400;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    text-decoration: none;
    transition: background 0.3s, color 0.3s;
  }
  .btn-outline:hover { background: rgba(201,145,58,0.1); }

  .scroll-hint {
    position: absolute;
    bottom: 30px;
    right: 60px;
    writing-mode: vertical-lr;
    font-size: 0.65rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--text-muted);
    animation: fadeIn 2s ease 1.4s both;
  }

  /* ── DIVIDER ── */
  .gold-bar {
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold) 30%, var(--gold-light) 50%, var(--gold) 70%, transparent);
    margin: 0;
  }

  /* ── SECTION BASE ── */
  section {
    padding: 120px 60px;
    max-width: 1400px;
    margin: 0 auto;
  }

  .section-label {
    font-size: 0.65rem;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 14px;
  }
  .section-label::before {
    content: '';
    width: 30px; height: 1px;
    background: var(--gold);
  }

  .section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(2.2rem, 4vw, 3.8rem);
    font-weight: 300;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 60px;
  }

  .section-title em {
    font-style: italic;
    color: var(--gold-light);
  }

  /* ── FEATURES / INVESTMENT THESIS ── */
  .features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    background: var(--stone);
  }

  .feature-card {
    background: var(--dark);
    padding: 48px 40px;
    position: relative;
    overflow: hidden;
    transition: background 0.3s;
  }

  .feature-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--gold), transparent);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }
  .feature-card:hover::before { transform: scaleX(1); }
  .feature-card:hover { background: var(--mid); }

  .feature-number {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 4rem;
    color: var(--stone);
    line-height: 1;
    margin-bottom: 24px;
    transition: color 0.3s;
  }
  .feature-card:hover .feature-number { color: rgba(201,145,58,0.2); }

  .feature-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--gold-pale);
    margin-bottom: 16px;
    line-height: 1.2;
  }

  .feature-desc {
    font-size: 0.88rem;
    line-height: 1.75;
    color: var(--text-muted);
  }

  /* ── PROJECT HIGHLIGHTS BAND ── */
  .highlights-band {
    background: var(--mid);
    padding: 80px 60px;
    border-top: 1px solid var(--stone);
    border-bottom: 1px solid var(--stone);
  }

  .highlights-inner {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }

  .highlights-text .section-title { margin-bottom: 24px; }

  .highlights-body {
    font-size: 0.92rem;
    line-height: 1.9;
    color: var(--text-muted);
    margin-bottom: 32px;
  }

  .project-data {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }

  .data-row {
    padding: 20px 24px;
    background: var(--dark);
    border-left: 2px solid var(--gold);
  }

  .data-key {
    font-size: 0.62rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--text-muted);
    margin-bottom: 6px;
  }

  .data-val {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.25rem;
    font-weight: 400;
    color: var(--gold-pale);
  }

  /* ── MAP VISUAL ── */
  .map-visual {
    position: relative;
    background: var(--dark);
    border: 1px solid var(--stone);
    aspect-ratio: 4/3;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .map-visual svg { width: 100%; height: 100%; }

  /* ── CTA ── */
  .cta-section {
    padding: 140px 60px;
    position: relative;
    overflow: hidden;
    text-align: center;
    background: linear-gradient(160deg, var(--dark) 0%, #0F0E0B 100%);
  }

  .cta-section::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 700px; height: 700px;
    background: radial-gradient(circle, rgba(201,145,58,0.08) 0%, transparent 65%);
    pointer-events: none;
  }

  .cta-inner { position: relative; z-index: 2; max-width: 800px; margin: 0 auto; }

  .cta-eyebrow {
    font-size: 0.65rem;
    letter-spacing: 0.4em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 24px;
  }

  .cta-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(3rem, 6vw, 6rem);
    color: #fff;
    line-height: 0.95;
    letter-spacing: 0.03em;
    margin-bottom: 24px;
  }

  .cta-title span { color: var(--gold-light); }

  .cta-body {
    font-size: 1rem;
    line-height: 1.8;
    color: var(--text-muted);
    margin-bottom: 48px;
    font-family: 'Cormorant Garamond', serif;
    font-style: italic;
    font-size: 1.25rem;
  }

  .cta-buttons { display: flex; justify-content: center; gap: 20px; margin-bottom: 60px; }

  .contact-grid {
    display: flex;
    justify-content: center;
    gap: 60px;
    margin-top: 60px;
    padding-top: 60px;
    border-top: 1px solid var(--stone);
  }

  .contact-item { text-align: left; }

  .contact-label {
    font-size: 0.62rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--text-muted);
    margin-bottom: 8px;
  }

  .contact-value {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1rem;
    color: var(--gold-pale);
  }

  /* ── FOOTER ── */
  footer {
    padding: 32px 60px;
    background: var(--black);
    border-top: 1px solid var(--stone);
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .footer-logo {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.1rem;
    letter-spacing: 0.15em;
    color: var(--gold);
  }

  .footer-note {
    font-size: 0.68rem;
    letter-spacing: 0.1em;
    color: var(--text-muted);
    max-width: 500px;
    text-align: right;
    line-height: 1.6;
  }

  /* ── ANIMATIONS ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to   { opacity: 1; }
  }

  /* Scroll reveal */
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }
  .reveal.visible {
    opacity: 1;
    transform: none;
  }
  .reveal-delay-1 { transition-delay: 0.15s; }
  .reveal-delay-2 { transition-delay: 0.3s; }
  .reveal-delay-3 { transition-delay: 0.45s; }

</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">Zingumah Resources</div>
  <ul class="nav-links">
    <li><a href="#project">The Project</a></li>
    <li><a href="#thesis">Investment Thesis</a></li>
    <li><a href="#contact">Contact IR</a></li>
  </ul>
</nav>

<!-- HERO -->
<div class="hero">
  <div class="hero-bg"></div>
  <div class="hero-lines">
    <svg viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
      <line x1="1100" y1="0" x2="600" y2="900" stroke="#C9913A" stroke-width="0.8"/>
      <line x1="1200" y1="0" x2="700" y2="900" stroke="#C9913A" stroke-width="0.4"/>
      <line x1="1300" y1="0" x2="800" y2="900" stroke="#C9913A" stroke-width="0.4"/>
      <circle cx="1150" cy="250" r="180" stroke="#C9913A" stroke-width="0.5"/>
      <circle cx="1150" cy="250" r="280" stroke="#C9913A" stroke-width="0.3"/>
      <polygon points="1150,70 1310,340 990,340" fill="none" stroke="#E8C06A" stroke-width="0.5"/>
    </svg>
  </div>

  <div class="hero-tag">Investor Presentation · 2025</div>
  <h1>ANYANKYIREM<br/><span class="gold">GOLD</span><br/>PROJECT</h1>
  <p class="hero-sub">Advancing a brownfield, development-stage gold asset in Ghana's prolific Obuasi mining district</p>

  <div class="hero-stats">
    <div class="stat-item">
      <div class="stat-value">~0.76</div>
      <div class="stat-label">Moz NI 43-101 Resource</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">Obuasi</div>
      <div class="stat-label">District, Ghana</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">Brownfield</div>
      <div class="stat-label">Development Stage</div>
    </div>
  </div>

  <div class="hero-cta">
    <a href="#contact" class="btn-primary">Request Investor Package</a>
    <a href="#project" class="btn-outline">Explore the Project</a>
  </div>

  <div class="scroll-hint">Scroll to explore</div>
</div>

<div class="gold-bar"></div>

<!-- INVESTMENT THESIS -->
<section id="thesis">
  <div class="section-label reveal">Investment Thesis</div>
  <h2 class="section-title reveal reveal-delay-1">Why <em>Anyankyirem</em><br/>Stands Apart</h2>

  <div class="features-grid">
    <div class="feature-card reveal">
      <div class="feature-number">01</div>
      <div class="feature-title">Tier-1 Jurisdiction &amp; District</div>
      <div class="feature-desc">Located in the Obuasi mining district — one of Africa's most storied gold belts — within Ghana's well-established, investor-friendly regulatory framework. Proximity to AngloGold Ashanti's Obuasi mine validates the geological endowment of this corridor.</div>
    </div>
    <div class="feature-card reveal reveal-delay-1">
      <div class="feature-number">02</div>
      <div class="feature-title">Defined NI 43-101 Resource</div>
      <div class="feature-desc">A compliant resource estimate of approximately 0.76 million ounces provides a credible foundation for pre-feasibility work. Brownfield status means existing infrastructure, historical data, and a de-risked exploration pathway toward production.</div>
    </div>
    <div class="feature-card reveal reveal-delay-2">
      <div class="feature-number">03</div>
      <div class="feature-title">Clear Path to Production</div>
      <div class="feature-desc">The project's development-stage classification, combined with its brownfield heritage, positions Zingumah Resources to accelerate toward a production decision. Catalysts include resource expansion drilling, metallurgical studies, and PFS completion.</div>
    </div>
    <div class="feature-card reveal">
      <div class="feature-number">04</div>
      <div class="feature-title">Experienced Management Team</div>
      <div class="feature-desc">Led by a team with deep in-country experience and a track record of advancing West African gold assets from discovery through to production. Strong relationships with local communities and government stakeholders.</div>
    </div>
    <div class="feature-card reveal reveal-delay-1">
      <div class="feature-number">05</div>
      <div class="feature-title">Favourable Gold Price Environment</div>
      <div class="feature-desc">With gold prices at multi-year highs, development-stage assets with defined resources command premium valuations. Anyankyirem offers investors leveraged exposure to gold prices with a credible near-term production narrative.</div>
    </div>
    <div class="feature-card reveal reveal-delay-2">
      <div class="feature-number">06</div>
      <div class="feature-title">Community &amp; ESG Alignment</div>
      <div class="feature-desc">Zingumah Resources is committed to responsible resource development — building lasting value for host communities, maintaining transparent stakeholder engagement, and adhering to international environmental and social standards.</div>
    </div>
  </div>
</section>

<!-- PROJECT HIGHLIGHTS BAND -->
<div class="highlights-band" id="project">
  <div class="highlights-inner">
    <div class="highlights-text reveal">
      <div class="section-label">Project Overview</div>
      <h2 class="section-title">Anyankyirem<br/><em>at a Glance</em></h2>
      <p class="highlights-body">
        The Anyankyirem Gold Project represents a compelling brownfield opportunity situated within one of the world's most recognised gold districts. With a defined NI 43-101 compliant resource base and established infrastructure, the project is poised for accelerated advancement toward a production decision.
      </p>
      <a href="#contact" class="btn-primary">Download Technical Summary</a>
    </div>

    <div class="reveal reveal-delay-1">
      <!-- Ghana / Obuasi Schematic Map -->
      <div class="map-visual">
        <svg viewBox="0 0 480 360" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <radialGradient id="glow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#C9913A" stop-opacity="0.3"/>
              <stop offset="100%" stop-color="#C9913A" stop-opacity="0"/>
            </radialGradient>
          </defs>
          <rect width="480" height="360" fill="#111109"/>
          <!-- Ghana outline simplified -->
          <path d="M180,40 L280,35 L310,70 L320,130 L305,200 L295,260 L250,310 L200,315 L160,270 L145,200 L150,130 L165,70 Z"
                fill="none" stroke="#2E2D27" stroke-width="1.5"/>
          <path d="M180,40 L280,35 L310,70 L320,130 L305,200 L295,260 L250,310 L200,315 L160,270 L145,200 L150,130 L165,70 Z"
                fill="rgba(201,145,58,0.04)"/>
          <!-- Obuasi region -->
          <circle cx="215" cy="195" r="30" fill="url(#glow)"/>
          <circle cx="215" cy="195" r="8" fill="#C9913A" opacity="0.9"/>
          <circle cx="215" cy="195" r="14" fill="none" stroke="#C9913A" stroke-width="1" opacity="0.6"/>
          <circle cx="215" cy="195" r="22" fill="none" stroke="#C9913A" stroke-width="0.5" opacity="0.3"/>
          <!-- Label -->
          <text x="232" y="190" fill="#E8C06A" font-family="'Barlow', sans-serif" font-size="9" letter-spacing="1">OBUASI</text>
          <text x="232" y="202" fill="#7A7868" font-family="'Barlow', sans-serif" font-size="7.5" letter-spacing="0.5">DISTRICT</text>
          <!-- Accra dot -->
          <circle cx="265" cy="275" r="3" fill="#7A7868"/>
          <text x="272" y="278" fill="#7A7868" font-family="'Barlow', sans-serif" font-size="7" letter-spacing="0.5">ACCRA</text>
          <!-- Legend -->
          <circle cx="30" cy="320" r="5" fill="#C9913A"/>
          <text x="42" y="324" fill="#7A7868" font-family="'Barlow', sans-serif" font-size="7.5" letter-spacing="0.5">ANYANKYIREM PROJECT</text>
          <!-- Border label -->
          <text x="350" y="50" fill="#2E2D27" font-family="'Barlow', sans-serif" font-size="7" letter-spacing="1">GHANA</text>
        </svg>
      </div>

      <!-- Data grid -->
      <div class="project-data" style="margin-top: 2px;">
        <div class="data-row">
          <div class="data-key">Resource (NI 43-101)</div>
          <div class="data-val">~0.76 Moz</div>
        </div>
        <div class="data-row">
          <div class="data-key">Stage</div>
          <div class="data-val">Development</div>
        </div>
        <div class="data-row">
          <div class="data-key">Asset Type</div>
          <div class="data-val">Brownfield</div>
        </div>
        <div class="data-row">
          <div class="data-key">Location</div>
          <div class="data-val">Obuasi, Ghana</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA / CONTACT -->
<div class="cta-section" id="contact">
  <div class="cta-inner">
    <div class="cta-eyebrow reveal">Investor Relations</div>
    <h2 class="cta-title reveal reveal-delay-1">INVEST IN<br/><span>GHANA'S GOLD</span></h2>
    <p class="cta-body reveal reveal-delay-2">
      Zingumah Resources Limited invites qualified investors and strategic partners to engage with the Anyankyirem Gold Project opportunity.
    </p>
    <div class="cta-buttons reveal reveal-delay-3">
      <a href="mailto:ir@zingumahresources.com" class="btn-primary">Contact Investor Relations</a>
      <a href="#" class="btn-outline">Download Presentation</a>
    </div>

    <div class="contact-grid reveal">
      <div class="contact-item">
        <div class="contact-label">Company</div>
        <div class="contact-value">Zingumah Resources Limited</div>
      </div>
      <div class="contact-item">
        <div class="contact-label">Project</div>
        <div class="contact-value">Anyankyirem Gold Project</div>
      </div>
      <div class="contact-item">
        <div class="contact-label">Investor Enquiries</div>
        <div class="contact-value">ir@zingumahresources.com</div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-logo">Zingumah Resources Limited</div>
  <div class="footer-note">
    This page is for informational purposes only and does not constitute an offer to sell or a solicitation of an offer to buy any securities. All resource estimates are NI 43-101 compliant. Forward-looking statements are subject to risk and uncertainty.
  </div>
</footer>

<script>
  // Scroll reveal
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  reveals.forEach(el => observer.observe(el));
</script>

</body>
</html>
