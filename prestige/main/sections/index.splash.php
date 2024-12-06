<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php if($is_main_page):?>
  <!-- Section: Splash------------------------------------------------->
  <header id="splash-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 section-content">
          <div id="login-box">
            <div id="splash-logo-box">
              <a href="<?php echo $this->url('main')?>" target="_self" >
                <picture>
                  <source srcset="<?php echo $this->themePath('includes/img/logo-header.webp')?>" type="image/webp">
                  <img id="splash-logo" src="<?php echo $this->themePath('includes/img/logo-header.png')?>" alt="PrestigeRO" />
                </picture>
              </a>
            </div>

            <?php if (! $session->isLoggedIn()): ?>
            <div id="splash-account">
              <div id="login-box-title" class="mb-2">Member Login</div>
              <form id="login-form" action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post" autocomplete="off">
              <?php if (count($serverNames) === 1): ?>
                <input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
              <?php endif; ?>
                <input class="form-control form-control-sm bg-darker text-light border-0 mb-3" id="splash-input-login" name="username" type="text" placeholder="Username" onfocus="this.removeAttribute('readonly');" readonly  autocomplete="off" />
                <input class="form-control form-control-sm bg-darker text-light border-0 mb-3" id="splash-input-pass" name="password" type="password" placeholder="Password" onfocus="this.removeAttribute('readonly');" readonly autocomplete="off" />
              <?php if (Flux::config('UseLoginCaptcha')): ?>
                <div class="row no-gutters">
                  <div class="form-group mb-0">
                  <?php if (Flux::config('EnableReCaptcha')): ?>
                    <label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
                    <div class="g-recaptcha" data-theme = "<?php echo $theme;?>" data-sitekey="<?php echo $recaptcha ?>"></div>
                  <?php else: ?>
                    <label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
                    <div class="security-code">
                      <img src="<?php echo $this->url('captcha') ?>" />
                    </div>
                  </div>
                  <div class="input-group mb-0 mt-2">
                    <input type="text" name="security_code" id="register_security_code" class="form-control" aria-describedby="captcha-symbol" />
                  <?php endif; ?>
                  </div>
                </div>
              <?php endif; ?>
                <div id="splash-buttons">
                  <button type="submit" class="btn-yellow mb-2">Login</button>
                </div>
                <div id="splash-links">
                  <a href="<?php echo $this->url('account', 'resetpass'); ?>" target="_self">Reset Password</a>
                  <span>|</span>
                  <a href="<?php echo $this->url('account', 'create'); ?>" target="_self">Register</a>
                </div>
              </form>
            </div>
            <?php else: ?>
            <div id="splash-account">
              <div id="login-box-title" class="mb-2">Account Panel</div>
              <div id="splash-buttons">
                <?php if(isset($config['main_account']) && count($config['main_account']) > 0): ?>
                <?php foreach ($config['main_account'] as $key => $links): ?>
                  <a class="btn-yellow" href="<?php echo $links['link']; ?>" target="_self">
                  <?php echo $links['title']; ?></a>
                <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>

        <div class="render-container d-none d-md-block col-12 col-md-6">
          <div class="render-box l-60 t-80">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-header-1.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-header-1.png')?>" alt="" />
            </picture>
          </div>
          <div class="render-box l-30">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-sparks.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-sparks.png')?>" alt="" />
            </picture>
          </div>
        </div>
      </div>

      <div class="row section-content">
        <div class="cursor-container">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
        </div>
      </div>
    </div>
    <div id="fire_sparks">&nbsp;</div>
  </header>
<?php else: ?>
  <header id="splash-section" class="splash-sm">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 section-content">

            <div id="splash-logo-box">
              <a href="<?php echo $this->url('main')?>" target="_self" >
                <picture>
                  <source srcset="<?php echo $this->themePath('includes/img/logo-header.webp')?>" type="image/webp">
                  <img id="splash-logo" src="<?php echo $this->themePath('includes/img/logo-header.png')?>" alt="PrestigeRO" />
                </picture>
              </a>
            </div>
        </div>

        <div class="render-container d-none d-md-block col-12 col-md-6">
          <div class="render-box l-60 t-50">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-header-1.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-header-1.png')?>" alt="" />
            </picture>
          </div>
          <div class="render-box l-30">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-sparks.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-sparks.png')?>" alt="" />
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div id="fire_sparks">&nbsp;</div>
  </header>
<?php endif;?>