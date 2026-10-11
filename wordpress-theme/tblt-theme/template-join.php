<?php
/*
 * Template Name: Join (TBLT)
 */
if (!defined('ABSPATH')) exit;
tblt_meta('Join Today — The Bible, Like Totally', 'Get full access to all 66 Books of the Bible in a totally chill, relatable voice. Choose your plan and join today.');
add_action('wp_head', function () { ?>
<style>
  /* HERO */
  .pricing-hero {
    background: linear-gradient(135deg, var(--navy) 0%, #2A3F6F 50%, var(--purple) 100%);
    padding: 80px 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .pricing-hero::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(14,155,138,0.15) 0%, transparent 70%);
    pointer-events: none;
  }
  .pricing-hero::after {
    content: '';
    position: absolute;
    bottom: -60px; left: -60px;
    width: 300px; height: 300px;
    background: radial-gradient(circle, rgba(201,146,26,0.15) 0%, transparent 70%);
    pointer-events: none;
  }
  .pricing-hero-inner { position: relative; z-index: 1; max-width: 700px; margin: 0 auto; }
  .pricing-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 5vw, 60px);
    font-weight: 900;
    color: var(--white);
    line-height: 1.1;
    margin-bottom: 16px;
  }
  .pricing-hero h1 em { color: var(--teal); font-style: italic; }
  .pricing-hero p {
    font-size: 18px;
    color: rgba(255,255,255,0.75);
    line-height: 1.7;
    max-width: 520px;
    margin: 0 auto 24px;
  }
  .pricing-tagline {
    font-family: 'Dancing Script', cursive;
    font-size: 28px;
    color: var(--amber);
    display: block;
    margin-bottom: 16px;
  }
  .pricing-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(14,155,138,0.2);
    border: 1px solid rgba(14,155,138,0.4);
    color: #5EEAD4;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 32px;
  }

  /* PRICING SECTION */
  .pricing-section {
    background: var(--off-white);
    padding: 80px 60px;
    text-align: center;
  }
  .pricing-intro {
    max-width: 600px;
    margin: 0 auto 60px;
  }
  .pricing-intro h2 {
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    font-weight: 900;
    color: var(--navy);
    margin-bottom: 14px;
  }
  .pricing-intro h2 em { color: var(--teal); font-style: italic; }
  .pricing-intro p {
    font-size: 16px;
    color: var(--text-muted);
    line-height: 1.75;
  }

  /* PRICING CARDS */
  .pricing-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 24px;
    max-width: 1000px;
    margin: 0 auto 60px;
    align-items: start;
  }
  .pricing-card {
    background: var(--white);
    border: 2px solid rgba(27,42,74,0.08);
    border-radius: 24px;
    padding: 40px 32px;
    position: relative;
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: left;
  }
  .pricing-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 50px rgba(27,42,74,0.12);
  }
  .pricing-card.featured {
    border-color: var(--teal);
    background: var(--navy);
    transform: scale(1.04);
  }
  .pricing-card.featured:hover {
    transform: scale(1.04) translateY(-6px);
    box-shadow: 0 20px 50px rgba(14,155,138,0.25);
  }
  .featured-badge {
    position: absolute;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--teal);
    color: var(--white);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    padding: 6px 20px;
    border-radius: 50px;
    white-space: nowrap;
  }
  .plan-label {
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--teal);
    margin-bottom: 12px;
    display: block;
  }
  .pricing-card.featured .plan-label { color: rgba(14,155,138,0.8); }
  .plan-name {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    font-weight: 900;
    color: var(--navy);
    margin-bottom: 8px;
  }
  .pricing-card.featured .plan-name { color: var(--white); }
  .plan-tagline {
    font-size: 13px;
    color: var(--text-muted);
    margin-bottom: 28px;
    line-height: 1.5;
  }
  .pricing-card.featured .plan-tagline { color: rgba(255,255,255,0.6); }
  .plan-price {
    display: flex;
    align-items: baseline;
    gap: 4px;
    margin-bottom: 6px;
  }
  .plan-price .currency {
    font-size: 22px;
    font-weight: 800;
    color: var(--navy);
    margin-top: 4px;
  }
  .pricing-card.featured .plan-price .currency { color: var(--white); }
  .plan-price .amount {
    font-family: 'Playfair Display', serif;
    font-size: 56px;
    font-weight: 900;
    color: var(--navy);
    line-height: 1;
  }
  .pricing-card.featured .plan-price .amount { color: var(--white); }
  .plan-price .period {
    font-size: 14px;
    color: var(--text-muted);
    font-weight: 600;
    margin-bottom: 4px;
  }
  .pricing-card.featured .plan-price .period { color: rgba(255,255,255,0.55); }
  .plan-story {
    font-size: 13px;
    color: var(--teal);
    font-weight: 700;
    margin-bottom: 28px;
    font-style: italic;
  }
  .pricing-card.featured .plan-story { color: #5EEAD4; }
  .plan-divider {
    height: 1px;
    background: rgba(27,42,74,0.08);
    margin-bottom: 24px;
  }
  .pricing-card.featured .plan-divider { background: rgba(255,255,255,0.1); }
  .plan-features {
    list-style: none;
    margin-bottom: 32px;
  }
  .plan-features li {
    font-size: 14px;
    color: var(--text-body);
    line-height: 1.6;
    padding: 8px 0;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    border-bottom: 1px solid rgba(27,42,74,0.04);
  }
  .pricing-card.featured .plan-features li { color: rgba(255,255,255,0.8); border-bottom-color: rgba(255,255,255,0.06); }
  .plan-features li:last-child { border-bottom: none; }
  .plan-features li .check { color: var(--teal); font-size: 15px; flex-shrink: 0; margin-top: 1px; }
  .plan-cta {
    display: block;
    width: 100%;
    padding: 15px 20px;
    border-radius: 50px;
    font-family: 'Nunito', sans-serif;
    font-size: 15px;
    font-weight: 800;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
  }
  .plan-cta.teal {
    background: var(--teal);
    color: var(--white);
    box-shadow: 0 8px 24px rgba(14,155,138,0.3);
  }
  .plan-cta.teal:hover {
    background: #0BC4AE;
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(14,155,138,0.4);
  }
  .plan-cta.white {
    background: var(--white);
    color: var(--navy);
    box-shadow: 0 8px 24px rgba(255,255,255,0.15);
  }
  .plan-cta.white:hover {
    background: var(--off-white);
    transform: translateY(-2px);
  }
  .plan-cta.navy {
    background: var(--navy);
    color: var(--white);
    box-shadow: 0 8px 24px rgba(27,42,74,0.2);
  }
  .plan-cta.navy:hover {
    background: #253d6e;
    transform: translateY(-2px);
  }

  /* GUARANTEE */
  .guarantee-bar {
    background: var(--light-teal);
    border: 1.5px solid rgba(14,155,138,0.2);
    border-radius: 16px;
    padding: 20px 32px;
    display: flex;
    align-items: center;
    gap: 16px;
    max-width: 700px;
    margin: 0 auto;
    text-align: left;
  }
  .guarantee-icon { font-size: 32px; flex-shrink: 0; }
  .guarantee-text h4 { font-size: 15px; font-weight: 800; color: var(--navy); margin-bottom: 4px; }
  .guarantee-text p { font-size: 13px; color: var(--text-muted); line-height: 1.6; margin: 0; }

  /* WHAT YOU GET */
  .what-section {
    background: var(--white);
    padding: 80px 60px;
  }
  .what-header { text-align: center; margin-bottom: 52px; }
  .what-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 900px;
    margin: 0 auto;
  }
  .what-card {
    background: var(--off-white);
    border-radius: 20px;
    padding: 32px 28px;
    text-align: center;
    transition: transform 0.2s;
  }
  .what-card:hover { transform: translateY(-4px); }
  .what-card:nth-child(2) { background: var(--light-teal); }
  .what-card:nth-child(3) { background: var(--light-purple); }
  .what-icon { font-size: 36px; margin-bottom: 16px; display: block; }
  .what-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    font-weight: 900;
    color: var(--navy);
    margin-bottom: 10px;
  }
  .what-card p { font-size: 14px; color: var(--text-muted); line-height: 1.65; margin: 0; }

  /* FAQ */
  .faq-section {
    background: var(--off-white);
    padding: 80px 60px;
  }
  .faq-header { text-align: center; margin-bottom: 48px; }
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto 52px;
  }
  .faq-item {
    background: var(--white);
    border-radius: 16px;
    padding: 24px 28px;
    border-left: 4px solid var(--teal);
  }
  .faq-item:nth-child(even) { border-left-color: var(--purple); }
  .faq-item h4 { font-size: 15px; font-weight: 800; color: var(--navy); margin-bottom: 8px; }
  .faq-item p { font-size: 14px; color: var(--text-muted); line-height: 1.7; margin: 0; }
  .faq-cta { text-align: center; }

  @media (max-width: 900px) {
    .pricing-grid { grid-template-columns: 1fr; max-width: 420px; }
    .pricing-card.featured { transform: scale(1); }
    .pricing-card.featured:hover { transform: translateY(-6px); }
    .what-grid { grid-template-columns: 1fr; max-width: 420px; margin: 0 auto; }
    .faq-grid { grid-template-columns: 1fr; }
    .pricing-hero { padding: 60px 24px; }
    .pricing-section { padding: 60px 24px; }
    .what-section { padding: 60px 24px; }
    .faq-section { padding: 60px 24px; }
    .guarantee-bar { flex-direction: column; text-align: center; }
  }
</style>
<?php }, 30);
get_header();
?>
<!-- HERO -->
<div class="pricing-hero">
  <div class="pricing-hero-inner">
    <div class="pricing-badge">🌊 All 66 Books Unlocked</div>
    <h1>Join <em>The Bible,<br>Like Totally</em></h1>
    <span class="pricing-tagline">A totally chill take on timeless truth.</span>
    <p>Get full access to all 66 Books of the Bible in a modern, relatable voice that finally makes Scripture click. Choose the plan that works for you.</p>
  </div>
</div>

<!-- PRICING -->
<section class="pricing-section">
  <div class="pricing-intro">
    <h2>Simple, <em>meaningful</em> pricing.</h2>
    <p>66 Books. Every plan includes full access to the entire Bible — Old Testament and New Testament — in our totally chill, relatable voice.</p>
  </div>

  <div class="pricing-grid">

    <!-- MONTHLY -->
    <div class="pricing-card">
      <span class="plan-label">Monthly</span>
      <div class="plan-name">Month to Month</div>
      <div class="plan-tagline">Try it out. Cancel anytime. No commitment.</div>
      <div class="plan-price">
        <span class="currency">$</span>
        <span class="amount">6.60</span>
        <span class="period">/month</span>
      </div>
      <div class="plan-story">One dime per Book of the Bible 🌊</div>
      <div class="plan-divider"></div>
      <ul class="plan-features">
        <li><span class="check">✅</span> Full access to all 66 Books</li>
        <li><span class="check">✅</span> Old Testament &amp; New Testament</li>
        <li><span class="check">✅</span> New content as it drops</li>
        <li><span class="check">✅</span> Cancel anytime</li>
      </ul>
      <a href="<?php echo esc_url(home_url('/')); ?>checkout/?plan=3" class="plan-cta navy">Get Monthly Access →</a>
    </div>

    <!-- ANNUAL — FEATURED -->
    <div class="pricing-card featured">
      <div class="featured-badge">⭐ Most Popular</div>
      <span class="plan-label">Annual</span>
      <div class="plan-name">Full Year</div>
      <div class="plan-tagline">Best value. One payment. One full year of Scripture.</div>
      <div class="plan-price">
        <span class="currency">$</span>
        <span class="amount">66</span>
        <span class="period">/year</span>
      </div>
      <div class="plan-story">One dollar per Book of the Bible 🌊</div>
      <div class="plan-divider"></div>
      <ul class="plan-features">
        <li><span class="check">✅</span> Full access to all 66 Books</li>
        <li><span class="check">✅</span> Old Testament &amp; New Testament</li>
        <li><span class="check">✅</span> New content as it drops</li>
        <li><span class="check">✅</span> Save 16% vs monthly</li>
      </ul>
      <a href="<?php echo esc_url(home_url('/')); ?>checkout/?plan=4" class="plan-cta teal">Get Annual Access →</a>
    </div>

    <!-- LIFETIME -->
    <div class="pricing-card">
      <span class="plan-label">Lifetime</span>
      <div class="plan-name">Forever Access</div>
      <div class="plan-tagline">One payment. Never pay again. Support the mission.</div>
      <div class="plan-price">
        <span class="currency">$</span>
        <span class="amount">166</span>
        <span class="period">one-time</span>
      </div>
      <div class="plan-story">For our most passionate supporters ✝️</div>
      <div class="plan-divider"></div>
      <ul class="plan-features">
        <li><span class="check">✅</span> Full access to all 66 Books</li>
        <li><span class="check">✅</span> Old Testament &amp; New Testament</li>
        <li><span class="check">✅</span> All future content forever</li>
        <li><span class="check">✅</span> Never pay again</li>
      </ul>
      <a href="<?php echo esc_url(home_url('/')); ?>checkout/?plan=5" class="plan-cta navy">Get Lifetime Access →</a>
    </div>

  </div>

  <!-- GUARANTEE -->
  <div class="guarantee-bar">
    <span class="guarantee-icon">🛡️</span>
    <div class="guarantee-text">
      <h4>15-Day Money Back Guarantee on Annual Plans</h4>
      <p>Not feeling it? Request a full refund within 15 days of purchase — no questions asked. We want you here because you love it, not because you feel stuck.</p>
    </div>
  </div>

</section>

<!-- WHAT YOU GET -->
<section class="what-section fade-in">
  <div class="what-header">
    <span class="section-label">What's Included</span>
    <h2 class="section-title">Everything in every plan.</h2>
    <p class="section-subtitle" style="margin:0 auto;">Every paid plan includes the same complete access — no tiered content, no locked Books, no surprises.</p>
  </div>
  <div class="what-grid">
    <div class="what-card">
      <span class="what-icon">📖</span>
      <h3>All 66 Books</h3>
      <p>The complete Bible — Old Testament and New Testament — in our totally chill, relatable voice. Every verse. Every chapter.</p>
    </div>
    <div class="what-card">
      <span class="what-icon">🎧</span>
      <h3>Listen on <a class="yt-pill" href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" rel="noopener">YouTube</a></h3>
      <p>Watch and listen on our <a class="yt-pill" href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" rel="noopener">YouTube</a> channel — free for everyone, no membership needed. <a href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" rel="noopener" style="color:var(--teal);font-weight:800;text-decoration:none;">Visit the channel →</a></p>
    </div>
    <div class="what-card">
      <span class="what-icon">🌊</span>
      <h3>New Content Forever</h3>
      <p>As we continue refining and expanding the translation, every subscriber gets access to updates and new content automatically.</p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-section fade-in">
  <div class="faq-header">
    <span class="section-label">Questions</span>
    <h2 class="section-title">Got questions? <em>Totally</em> got answers.</h2>
  </div>
  <div class="faq-grid">
    <div class="faq-item">
      <h4>Is this a replacement for the Bible?</h4>
      <p>No — it is a modern paraphrase and creative commentary. We always encourage reading a traditional translation alongside this one. Think of it like a conversation about Scripture, not a substitute for it.</p>
    </div>
    <div class="faq-item">
      <h4>Can I cancel my subscription?</h4>
      <p>Yes — monthly and annual subscriptions can be canceled at any time from your account page. You keep access until the end of your current billing period.</p>
    </div>
    <div class="faq-item">
      <h4>What does the 15-day guarantee cover?</h4>
      <p>Annual subscriptions come with a full 15-day money back guarantee. If you are not satisfied for any reason within 15 days we will refund you completely.</p>
    </div>
    <div class="faq-item">
      <h4>Is my payment secure?</h4>
      <p>Yes — all payments are processed securely through Stripe. We never store your card information on our servers.</p>
    </div>
    <div class="faq-item">
      <h4>What translation is this based on?</h4>
      <p>Every verse is rooted in the original King James Version text — which is in the public domain — and re-imagined in modern, relatable language with a sincere heart.</p>
    </div>
    <div class="faq-item">
      <h4>Can I use this in my church or ministry?</h4>
      <p>Please reach out before using our content in public settings. We are happy to discuss licensing and permissions for ministry use.</p>
    </div>
  </div>
  <div class="faq-cta">
    <p style="font-size:15px; color:var(--text-muted); margin-bottom:20px;">Still have questions? We read every message.</p>
    <a href="<?php echo esc_url(home_url('/totally-contact-us/')); ?>" class="btn-secondary">Contact Us 🌊</a>
  </div>
</section>

<!-- EMAIL SIGNUP -->
<section class="signup-section fade-in">
  <div class="signup-inner">
    <span class="section-label">Not ready yet?</span>
    <h2 class="section-title">Like, totally stay in the know.</h2>
    <p class="section-subtitle">Join our email list — new content, new Books, and updates dropped weekly. No commitment required.</p>
    <div class="signup-form">
      <?php
      $tblt_kit = do_shortcode('[convertkit form="10032240"]');
      if (trim($tblt_kit) !== '') { echo $tblt_kit; } else { ?>
      <a href="https://the-bible-like-totally.kit.com/66062f99f6" class="btn-primary" style="border-radius:50px; padding:15px 28px; font-size:14px; font-weight:800; text-decoration:none; display:inline-flex; align-items:center; gap:8px; background:var(--teal); color:var(--white); box-shadow:0 8px 28px rgba(14,155,138,0.3); font-family:'Nunito',sans-serif;">Subscribe 🌊</a>
      <?php } ?>
    </div>
    <p class="signup-note">No spam. No weirdness. Just Scripture, totally delivered.</p>
  </div>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>
