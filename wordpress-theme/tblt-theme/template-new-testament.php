<?php
/*
 * Template Name: New Testament (TBLT)
 */
if (!defined('ABSPATH')) exit;
tblt_meta('New Testament — The Bible, Like Totally', 'All 27 Books of the New Testament — in a totally chill, relatable voice. From Matthew to Revelation, rooted in the KJV and re-imagined in modern language.');
add_action('wp_head', function () { ?>
<style>
  .books-section { background: var(--white); }
  .category-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 56px 0 28px;
    padding-bottom: 14px;
    border-bottom: 2px solid var(--off-white);
  }
  .category-header:first-of-type { margin-top: 0; }
  .category-icon { font-size: 28px; }
  .category-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    font-weight: 900;
    color: var(--navy);
  }
  .category-header .cat-count {
    font-size: 12px; font-weight: 700; color: var(--text-muted);
    background: var(--off-white); padding: 4px 12px;
    border-radius: 50px; margin-left: auto;
  }
  .books-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 16px;
  }
  .book-card {
    background: var(--white);
    border: 1.5px solid rgba(27,42,74,0.1);
    border-radius: 16px;
    padding: 22px 20px;
    text-decoration: none;
    transition: all 0.25s;
    display: block;
    position: relative;
    overflow: hidden;
  }
  .book-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 4px; height: 100%;
    background: var(--purple);
    transition: width 0.3s;
  }
  .book-card:hover {
    border-color: var(--purple);
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(91,45,142,0.12);
  }
  .book-card.teal-accent::before { background: var(--teal); }
  .book-card.teal-accent:hover { border-color: var(--teal); box-shadow: 0 10px 30px rgba(14,155,138,0.12); }
  .book-card.amber-accent::before { background: var(--amber); }
  .book-card.amber-accent:hover { border-color: var(--amber); box-shadow: 0 10px 30px rgba(201,146,26,0.12); }
  .book-number { font-size: 11px; font-weight: 800; color: var(--text-muted); letter-spacing: 1px; margin-bottom: 6px; display: block; }
  .book-name { font-family: 'Playfair Display', serif; font-size: 18px; font-weight: 900; color: var(--navy); margin-bottom: 6px; line-height: 1.2; }
  .book-desc { font-size: 12px; color: var(--text-muted); line-height: 1.55; }
  .book-arrow { position: absolute; bottom: 14px; right: 16px; font-size: 14px; color: var(--purple); opacity: 0; transition: opacity 0.2s, transform 0.2s; }
  .book-card:hover .book-arrow { opacity: 1; transform: translateX(3px); }
  .book-card.teal-accent:hover .book-arrow { color: var(--teal); }
  .book-card.amber-accent:hover .book-arrow { color: var(--amber); }

  .ot-promo {
    background: linear-gradient(135deg, var(--navy) 0%, #2A3F6F 100%);
    border-radius: 24px;
    padding: 48px 52px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    margin-top: 64px;
    text-decoration: none;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .ot-promo:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(27,42,74,0.2); }
  .ot-promo-text h3 { font-family: 'Playfair Display', serif; font-size: 28px; font-weight: 900; color: var(--white); margin-bottom: 10px; }
  .ot-promo-text p { font-size: 15px; color: rgba(255,255,255,0.7); line-height: 1.6; }
  .ot-promo-cta { background: rgba(255,255,255,0.12); border: 2px solid rgba(255,255,255,0.25); color: var(--white); padding: 14px 28px; border-radius: 50px; font-weight: 800; font-size: 14px; white-space: nowrap; transition: background 0.2s; font-family: 'Nunito', sans-serif; }
  .ot-promo:hover .ot-promo-cta { background: rgba(255,255,255,0.2); }

  @media (max-width: 700px) {
    .books-grid { grid-template-columns: 1fr 1fr; }
    .ot-promo { flex-direction: column; padding: 36px 28px; }
  }
</style>
<?php }, 30);
get_header();
?>
<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-inner">
    <span class="section-label">27 Books</span>
    <h1>The <em>New Testament</em></h1>
    <span class="tagline">The story of Jesus — totally chill.</span>
    <p>From the birth of Jesus in Matthew to the final vision in Revelation — all 27 Books in a voice that makes the greatest story ever told feel surprisingly today.</p>
  </div>
</div>

<div class="trust-bar">
  <div class="trust-item"><span class="icon">✨</span> 27 Books</div>
  <div class="trust-item"><span class="icon">🌊</span> Rooted in KJV</div>
  <div class="trust-item"><span class="icon">🎧</span> Audio on <a class="yt-pill" href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" rel="noopener">YouTube</a></div>
  <div class="trust-item"><span class="icon">✝️</span> Verse by Verse</div>
</div>

<!-- BOOKS -->
<section class="books-section fade-in">

  <!-- THE GOSPELS -->
  <div class="category-header">
    <span class="category-icon">✨</span>
    <h2>The Gospels</h2>
    <span class="cat-count">4 Books</span>
  </div>
  <div class="books-grid">
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/matthew/" class="book-card teal-accent">
      <span class="book-number">NT Book 1</span>
      <div class="book-name">Matthew</div>
      <div class="book-desc">Jesus Christ — the ultimate origin story. It all started here.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/mark/" class="book-card teal-accent">
      <span class="book-number">NT Book 2</span>
      <div class="book-name">Mark</div>
      <div class="book-desc">No long intro. No family tree. Just — here kicks off the good news.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/luke/" class="book-card teal-accent">
      <span class="book-number">NT Book 3</span>
      <div class="book-name">Luke</div>
      <div class="book-desc">An eyewitness tracked every detail. So you could be solid on the truth.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/john/" class="book-card teal-accent">
      <span class="book-number">NT Book 4</span>
      <div class="book-name">John</div>
      <div class="book-desc">In the beginning was the Word. The darkness hasn't totally figured it out.</div>
      <span class="book-arrow">→</span>
    </a>
  </div>

  <!-- HISTORY -->
  <div class="category-header">
    <span class="category-icon">⚡</span>
    <h2>History</h2>
    <span class="cat-count">1 Book</span>
  </div>
  <div class="books-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/acts/" class="book-card amber-accent">
      <span class="book-number">NT Book 5</span>
      <div class="book-name">Acts</div>
      <div class="book-desc">Jesus left. The Holy Ghost showed up. And things got wild from there.</div>
      <span class="book-arrow">→</span>
    </a>
  </div>

  <!-- PAUL'S LETTERS -->
  <div class="category-header">
    <span class="category-icon">✉️</span>
    <h2>Paul's Letters</h2>
    <span class="cat-count">13 Books</span>
  </div>
  <div class="books-grid">
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/romans/" class="book-card">
      <span class="book-number">NT Book 6</span>
      <div class="book-name">Romans</div>
      <div class="book-desc">Paul had a lot to say to Rome. He said all of it.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/i-corinthians/" class="book-card">
      <span class="book-number">NT Book 7</span>
      <div class="book-name">1 Corinthians</div>
      <div class="book-desc">Yo, Paul here. The church in Corinth had some issues. A lot of issues.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/ii-corinthians/" class="book-card">
      <span class="book-number">NT Book 8</span>
      <div class="book-name">2 Corinthians</div>
      <div class="book-desc">Paul wrote again. Because apparently the first letter wasn't enough.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/galatians/" class="book-card">
      <span class="book-number">NT Book 9</span>
      <div class="book-name">Galatians</div>
      <div class="book-desc">Paul said — God gave me this job, not some dudes. Now listen up.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/ephesians/" class="book-card">
      <span class="book-number">NT Book 10</span>
      <div class="book-name">Ephesians</div>
      <div class="book-desc">God picked you out before the world was even a thing. Let that sink in.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/philippians/" class="book-card">
      <span class="book-number">NT Book 11</span>
      <div class="book-name">Philippians</div>
      <div class="book-desc">Paul was in prison when he wrote this. And he was still stoked.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/colossians/" class="book-card">
      <span class="book-number">NT Book 12</span>
      <div class="book-name">Colossians</div>
      <div class="book-desc">Jesus is not just a good vibe. He's the whole thing.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/i-thessalonians/" class="book-card">
      <span class="book-number">NT Book 13</span>
      <div class="book-name">1 Thessalonians</div>
      <div class="book-desc">Paul heard they were riding the gospel wave strong. He had to write back.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/ii-thessalonians/" class="book-card">
      <span class="book-number">NT Book 14</span>
      <div class="book-name">2 Thessalonians</div>
      <div class="book-desc">They were confused about the end times. Paul was like — let me clarify.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/i-timothy/" class="book-card">
      <span class="book-number">NT Book 15</span>
      <div class="book-name">1 Timothy</div>
      <div class="book-desc">Paul to Timmy — stop the bogus teachings. Like, right now.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/ii-timothy/" class="book-card">
      <span class="book-number">NT Book 16</span>
      <div class="book-name">2 Timothy</div>
      <div class="book-desc">Paul's final letter. He knew what was coming. He wrote it anyway.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/titus/" class="book-card">
      <span class="book-number">NT Book 17</span>
      <div class="book-name">Titus</div>
      <div class="book-desc">Paul needed someone solid on the ground. Titus was the guy.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/philemon/" class="book-card">
      <span class="book-number">NT Book 18</span>
      <div class="book-name">Philemon</div>
      <div class="book-desc">The shortest letter Paul ever wrote. Every single word counted.</div>
      <span class="book-arrow">→</span>
    </a>
  </div>

  <!-- GENERAL EPISTLES -->
  <div class="category-header">
    <span class="category-icon">📜</span>
    <h2>General Epistles</h2>
    <span class="cat-count">8 Books</span>
  </div>
  <div class="books-grid">
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/hebrews/" class="book-card teal-accent">
      <span class="book-number">NT Book 19</span>
      <div class="book-name">Hebrews</div>
      <div class="book-desc">Jesus is better. Than all of it. The whole letter makes that case.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/james/" class="book-card teal-accent">
      <span class="book-number">NT Book 20</span>
      <div class="book-name">James</div>
      <div class="book-desc">Faith without works is, like, totally dead. James was not playing around.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/i-peter/" class="book-card teal-accent">
      <span class="book-number">NT Book 21</span>
      <div class="book-name">1 Peter</div>
      <div class="book-desc">Scattered. Suffering. Struggling. Peter wrote to remind them who they were.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/ii-peter/" class="book-card teal-accent">
      <span class="book-number">NT Book 22</span>
      <div class="book-name">2 Peter</div>
      <div class="book-desc">Watch out for fake teachers. Peter had already spotted them.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/i-john/" class="book-card teal-accent">
      <span class="book-number">NT Book 23</span>
      <div class="book-name">1 John</div>
      <div class="book-desc">God is light. God is love. John really needed you to know both.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/ii-john/" class="book-card teal-accent">
      <span class="book-number">NT Book 24</span>
      <div class="book-name">2 John</div>
      <div class="book-desc">Walk in truth. Don't let just anyone in. John said what he said.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/iii-john/" class="book-card teal-accent">
      <span class="book-number">NT Book 25</span>
      <div class="book-name">3 John</div>
      <div class="book-desc">Gaius was doing great. Diotrephes was not. John noticed both.</div>
      <span class="book-arrow">→</span>
    </a>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/jude/" class="book-card teal-accent">
      <span class="book-number">NT Book 26</span>
      <div class="book-name">Jude</div>
      <div class="book-desc">Jude had one thing to say — contend for the faith. He said it hard.</div>
      <span class="book-arrow">→</span>
    </a>
  </div>

  <!-- PROPHECY -->
  <div class="category-header">
    <span class="category-icon">🌅</span>
    <h2>Prophecy</h2>
    <span class="cat-count">1 Book</span>
  </div>
  <div class="books-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/revelation/" class="book-card amber-accent">
      <span class="book-number">NT Book 27</span>
      <div class="book-name">Revelation</div>
      <div class="book-desc">The last Book. The final vision. Nothing could prepare them for this.</div>
      <span class="book-arrow">→</span>
    </a>
  </div>

  <!-- OT PROMO -->
  <a href="<?php echo esc_url(home_url('/old-testament/')); ?>" class="ot-promo">
    <div class="ot-promo-text">
      <h3>Explore the Old Testament 📖</h3>
      <p>39 Books — from Creation to the Prophets. The foundation of everything that comes after.</p>
    </div>
    <span class="ot-promo-cta">Explore Old Testament →</span>
  </a>

</section>

<!-- VERSE HIGHLIGHT -->
<section class="verse-section fade-in">
  <div class="inner">
    <blockquote>"God totally loved the world so much that he gave his one and only Son, so that anyone who, like, believes in him will not perish but will have everlasting forever life, bro."</blockquote>
    <span class="cite">John 3:16</span>
    <a href="<?php echo esc_url(home_url('/')); ?>new-testament/john/" class="btn-white">📖 Read the Book of John</a>
  </div>
</section>

<!-- EMAIL SIGNUP -->
<section class="signup-section fade-in">
  <div class="signup-inner">
    <span class="section-label">Stay in the Know</span>
    <h2 class="section-title">Like, totally stay in the know.</h2>
    <p class="section-subtitle">Join our email list.</p>
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
