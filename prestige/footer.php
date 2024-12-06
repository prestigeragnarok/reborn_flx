<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_THEME_DIR.'/prestige/includes/config.php');
?>
  <?php if(!($params->get('module') == 'main' && $params->get('action') == 'index')): ?>
  </div></section>
  <?php endif; ?>
  </main>

  <!-- Section: Footer --------------------------------------------->
  <footer>
    <div class="container">
      <div class="row justify-content-between">
        <!-- div#footer-left Start -->
        <div id="footer-left" class="col-12 col-lg-8 col-xl-auto">
          <ul id="footer-menu-text" class="mb-3">
            <?php $i=0; foreach ($config['footer_links'] as $title => $links): ?>
              <?php if($i > 0):?><li>|</li><?php endif;?>
              <li data-aos="fade-down" data-aos-delay="<?php echo (100*($i%5))?>"><a href="<?php echo $links; ?>"><?php echo $title; ?></a></li>
              <?php $i++; ?>
            <?php endforeach; ?>
          </ul>
          <p data-aos="fade-right" data-aos-delay="100">
            <?php echo $config['footer_copyright_text']; ?>
          </p>

          <ul id="footer-credits-logo">
            <li data-aos="fade-down" data-aos-delay="200"><a href="./">
              <img src="<?php echo $this->themePath('includes/img/logo-footer.png')?>" alt="">
            </a></li>
            <li data-aos="fade-down" data-aos-delay="300"><a href="https://discord.gg/GDrsKEym7P">
                  <img src="<?php echo $this->themePath('includes/img/brands/logo-s1.png')?>" alt="s1">
            </a></li>
            <li data-aos="fade-down" data-aos-delay="400"><a href="https://www.facebook.com/gelocaserodesigns ">
                  <img src="<?php echo $this->themePath('includes/img/brands/logo-gc.png')?>" alt="gc">
            </a></li>
            <li data-aos="fade-down" data-aos-delay="500"><a href="https://discord.gg/v8eMwrC">
                  <img src="<?php echo $this->themePath('includes/img/brands/logo-nubs.png')?>" alt="nubs">
            </a></li>
          </ul>
        </div>
        <!-- div#footer-left End -->

        <!-- div#footer-right Start -->
        <div id="footer-right" class="col-12 mt-3 mt-lg-0 col-lg-4">
          <p data-aos="fade-left" data-aos-delay="100">Follow our Social Media Pages</p>
          <ul id="footer-menu-icons">
            <?php $i = 0; ?>
            <?php if(isset($config['footer_discord']) && !empty($config['footer_discord'])): ?>
            <li data-aos="fade-up" data-aos-delay="<?php echo (100*($i%5))?>"><a href="<?php echo $config['footer_discord']; ?>" class="btn-footer">
              <i class="fa-brands fa-discord fa-2xl">&nbsp;</i>
            </a></li>
              <?php $i++;?>
            <?php endif; ?>
            <?php if(isset($config['footer_twitch']) && !empty($config['footer_twitch'])): ?>
            <li data-aos="fade-up" data-aos-delay="<?php echo (100*($i%5))?>"><a href="<?php echo $config['footer_twitch']; ?>" class="btn-footer">
              <i class="fa-brands fa-twitch fa-2xl">&nbsp;</i>
            </a></li>
              <?php $i++;?>
            <?php endif; ?>
            <?php if(isset($config['footer_facebook']) && !empty($config['footer_facebook'])): ?>
            <li data-aos="fade-up" data-aos-delay="<?php echo (100*($i%5))?>"><a href="<?php echo $config['footer_facebook']; ?>" class="btn-footer">
              <i class="fa-brands fa-facebook fa-2xl">&nbsp;</i>
            </a></li>
              <?php $i++;?>
            <?php endif; ?>
            <?php if(isset($config['footer_twitter']) && !empty($config['footer_twitter'])): ?>
            <li data-aos="fade-up" data-aos-delay="<?php echo (100*($i%5))?>"><a href="<?php echo $config['footer_twitter']; ?>" class="btn-footer">
              <i class="fa-brands fa-twitter fa-2xl">&nbsp;</i>
            </a></li>
              <?php $i++;?>
            <?php endif; ?>
            <?php if(isset($config['footer_youtube']) && !empty($config['footer_youtube'])): ?>
            <li data-aos="fade-up" data-aos-delay="<?php echo (100*($i%5))?>"><a href="<?php echo $config['footer_youtube']; ?>" class="btn-footer">
              <i class="fa-brands fa-youtube fa-2xl">&nbsp;</i>
            </a></li>
              <?php $i++;?>
            <?php endif; ?>
          </ul>
          <?php if(count(Flux::$appConfig->get('ThemeName', false)) > 1): ?>
            <div id="prestige-theme-flux">
                <div class="form-group mb-0">
                <select id="theme_selector" class="form-control form-control-sm" name="preferred_theme" onchange="updatePreferredTheme(this)">
                  <?php foreach (Flux::$appConfig->get('ThemeName', false) as $themeName): ?>
                  <option value="<?php echo htmlspecialchars($themeName) ?>"<?php if ($session->theme == $themeName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($themeName) ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <form action="<?php echo $this->urlWithQs ?>" method="post" name="preferred_theme_form" style="display: none">
                <input type="hidden" name="preferred_theme" value="" />
              </form>
            </div>
          <?php endif ?>
        </div>
        <!-- div#footer-right End -->
      </div>
    </div>
    <!-- div.container End -->

    <!-- back to top button -->
    <a id="back2top" href="#splash-section" class="btn btn-danger btn-lg" id="btn-back-to-top" >
      <i class="fas fa-arrow-up"></i>
    </a>
  </footer>

</body>
</html>