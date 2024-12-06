<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_ADDON_DIR."/prestige/modules/prestige/stats.php");
?>
  <!-- Section: About ------------------------------------------------->
  <section id="about-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="render-container col-12 col-lg-4">
          <div id="about-render" class="render-box t-lg-100">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-nightwatch.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-nightwatch.png')?>" alt="" data-aos="zoom-in-right"/>
            </picture>
          </div>
        </div>
        <div class="section-content col-12 col-lg-7">
          <div class="section-title">
            <h2 class="title" data-aos="fade-down-right" data-aos-delay="100">WELCOME TO <span class="accent">PRESTIGE</span><br/>
            RAGNAROK ONLINE!</h2>
          </div>
          <p data-aos="fade-right" data-aos-delay="200">
            <?php echo $config['about_text'] ?>
          </p>
          <div id="about-stats">
            <?php if(isset($config['display_char_stats']) && $config['display_char_stats']):?>
            <div id="stats-chars" class="stats-box" data-aos="zoom-in-right" data-aos-delay="100">
              <div class="stats-img">
                <i class="fa-solid fa-users">&nbsp;</i>
              </div>
              <div class="stats-box-in">
                <div class="stats-value"><?php echo number_format($stats['new_char']) ?></div>
                <div class="stats-label">New Characters</div>
              </div>
            </div>
            <?php endif; ?>
            <?php if(isset($config['display_char_stats']) && $config['display_char_stats']):?>
            <div id="stats-accs" class="stats-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="stats-img">
                <i class="fa-solid fa-user-plus">&nbsp;</i>
              </div>
              <div class="stats-box-in">
                <div class="stats-value"><?php echo number_format($stats['new_acc']) ?></div>
                <div class="stats-label">New Sign-ups</div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
