
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="The Bible, Like Totally">
      <p>A creative, respectful re-imagining of Scripture — blending modern language with timeless truth to help people reconnect with God's Word.</p>
      <div class="footer-social">
        <a href="https://www.facebook.com/thebible.liketotally/" target="_blank" class="social-btn" title="Facebook">📘</a>
        <a href="https://www.instagram.com/thebible_liketotally/" target="_blank" class="social-btn" title="Instagram">📸</a>
        <a href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" class="social-btn yt-social" title="YouTube">▶</a>
        <a href="https://www.tiktok.com/@thebible_liketotally" target="_blank" class="social-btn" title="TikTok">🎵</a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Scripture</h4>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/old-testament/')); ?>">Old Testament</a></li>
        <li><a href="<?php echo esc_url(home_url('/new-testament/')); ?>">New Testament</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Listen</h4>
      <ul>
        <li><a href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" class="yt-nav"><span class="yt-pill">YouTube</span> Channel</a></li>
        <li><a href="https://www.youtube.com/@TheBibleLikeTotally/playlists" target="_blank">All Playlists</a></li>
        <li><a href="https://www.tiktok.com/@thebible_liketotally" target="_blank">TikTok</a></li>
      </ul>
    </div>
      <div class="footer-col">
      <h4>Account</h4>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/log-in-2/')); ?>">Log In</a></li>
        <li><a href="<?php echo esc_url(home_url('/sign-up-2/')); ?>">Sign Up</a></li>
        <li><a href="<?php echo esc_url(home_url('/account-2/')); ?>">My Account</a></li>
        <li><a href="<?php echo esc_url(home_url('/totally-contact-us/')); ?>">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p class="footer-copy">© 2026 <strong>The Bible, Like Totally.</strong> All Rights Reserved. All original content on this Website — including modern language paraphrases, creative translations, chapter recaps, audio recordings, and brand elements — is the exclusive intellectual property of The Bible, Like Totally and is protected under U.S. copyright law. Unauthorized reproduction or distribution is prohibited.</p>
    <div class="footer-links">
      <a href="<?php echo esc_url(home_url('/terms-of-use/')); ?>">Terms of Use</a>
      <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
      <a href="<?php echo esc_url(home_url('/totally-contact-us/')); ?>">Contact</a>
      <span class="footer-version">v<?php echo esc_html(wp_get_theme()->get('Version')); ?></span>
    </div>
  </div>
</footer>

<script>
  window.TBLT = { allBooks: "<?php echo esc_url(home_url('/all-books/')); ?>" };
  (function(){
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.08 });
    document.querySelectorAll('.fade-in').forEach(function(el){ obs.observe(el); });
  })();
  function toggleMobileMenu() {
    document.getElementById('mobileMenu').classList.toggle('open');
  }
  function toggleNavSearch() {
    var input = document.getElementById('navSearch');
    input.classList.toggle('open');
    if (input.classList.contains('open')) input.focus();
  }
  function handleNavSearch(event) {
    if (event.key === 'Enter') {
      var query = document.getElementById('navSearch').value.trim();
      if (query) window.location.href = window.TBLT.allBooks + '?search=' + encodeURIComponent(query);
    }
  }
</script>
<?php wp_footer(); ?>
</body>
</html>
