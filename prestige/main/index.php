<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_THEME_DIR.'/prestige/includes/config.php');

include $this->themePath('main/sections/index.articles.php', true);
include $this->themePath('main/sections/index.about.php', true);
include $this->themePath('main/sections/index.support.php', true);
include $this->themePath('main/sections/index.staff.php', true);
include $this->themePath('main/sections/index.hof.php', true);

?>