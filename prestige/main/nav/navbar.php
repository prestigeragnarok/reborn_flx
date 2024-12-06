<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_THEME_DIR.'/prestige/includes/config.php');
?>

  <nav id="prestige-navigation" class="navbar navbar-dark navbar-expand-lg fixed-top">
    <div class="container" data-bs-theme="dark">
      <a class="navbar-brand" href="<?php echo $this->url('main')?>" target="_self">
        <picture >
          <source srcset="<?php echo $this->themePath('includes/img/logo-navbar.webp')?>" type="image/webp">
          <img src="<?php echo $this->themePath('includes/img/logo-navbar.png')?>" alt="PrestigeRO" />
        </picture>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#oc-navbar" aria-controls="oc-navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-top text-bg-dark" tabindex="-1" id="oc-navbar" aria-labelledby="navbarLabel">
        <div class="offcanvas-header">
          <div class="offcanvas-title" id="navbarLabel">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/logo-navbar.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/logo-navbar.png')?>" alt="PrestigeRO" />
            </picture>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end align-self-center flex-grow-1 pe-3">
          <?php
            $menuItems = $this->getMenuItems();
            if (!empty($menuItems)) {
              foreach($menuItems as $menuCategory => $menus) {
                if(!empty($menus)) {
                  $cur_page = false;
                  if($params->get('module') == $menus[0]['module'] && $params->get('action') == $menus[0]['action'])
                    $cur_page = true;

                  if(count($menus) == 1) { // only 1 in the group
                    echo '<li class="nav-item '.($cur_page ? 'active' : '').'">';
                    echo '<a class="nav-link" href="'.$menus[0]['url'].'">'.htmlspecialchars(Flux::message($menus[0]['name'])).'</a>';
                    echo '</li>';
                  } else {
                    echo '<li class="nav-item dropdown">';
                    echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    echo htmlspecialchars(Flux::message($menuCategory));
                    echo '</a>';
                    echo '<div class="dropdown-menu">';
                    foreach ($menus as $menuItem) {
                      echo '<a class="dropdown-item" href="'.$menuItem['url'].'">'.htmlspecialchars(Flux::message($menuItem['name'])).'</a>';
                    }
                    echo '</div></li>';
                  }
                }
              }
            }
            $adminMenuItems = $this->getAdminMenuItems();
            if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')) {
              echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
              echo 'Admin Menu</a><div class="dropdown-menu">';
              foreach ($adminMenuItems as $menuItem) {
                echo '<a class="dropdown-item" href="'.$this->url($menuItem['module'], $menuItem['action']).'">'.htmlspecialchars(Flux::message($menuItem['name'])).'</a>';
              }
              echo '</div></li>';
            }
          ?>
          </ul>

          <div id="navbar-status">
            <div id="status-time" class="status-box">
              <span id="st-h" class="status-value">09</span>:<span id="st-m" class="status-value">04</span>:<span id="st-s" class="status-value">03</span>
            </div>

            <div id="status-peak" class="status-box">
              <div id="status-players" class="status-box">
                <div class="status-value"><?php echo $pc ?></div>
              </div>
              <div class="status-value"><?php echo $peak ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>