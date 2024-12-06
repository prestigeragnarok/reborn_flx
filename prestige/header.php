<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_THEME_DIR.'/prestige/includes/config.php');
$serverNames = $this->getServerNames();
$pc = $peak = 0;

if(! ($params->get('module') == 'server' && $params->get('action') == 'status')) {
  if(isset($title))
    $t_title = $title;
  else
    $t_title = "";

  require_once (FLUX_MODULE_DIR."/server/status.php");
  $title = $t_title;
}

if(isset($serverStatus)) {
  $key = array_keys($serverStatus)[0];
  $pc = $serverStatus[$key][$key]['playersOnline'];
  $peak = $serverStatus[$key][$key]['playersPeak'];
  $status = ($serverStatus[$key][$key]['loginServerUp'] && $serverStatus[$key][$key]['charServerUp'] && $serverStatus[$key][$key]['mapServerUp']);
}
if (Flux::config('UseLoginCaptcha') && Flux::config('EnableReCaptcha')) {
  $recaptcha = Flux::config('ReCaptchaPublicKey');
  $theme = Flux::config('ReCaptchaTheme');
}

$is_main_page = false;
$cm = $params->get('module');
$ca = $params->get('action');
if($cm == 'main' && $ca = 'index') {
  $is_main_page = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs ----------------------------------------------->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, height=device-height"/>
  <?php if (isset($metaRefresh)): ?>
  <meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
  <?php endif ?>

  <!-- Page HTML Meta -------------------------------------------------------->
  <title><?php echo Flux::config('SiteTitle'); if (isset($title) && !empty(trim($title))) echo ": $title" ?></title>
  <meta name="description" content="<?php echo $config['meta_desc']; ?>">

  <!-- Open Graph Meta -------------------------------------------------------->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo Flux::config('SiteTitle')?>" />
  <meta property="og:description" content="<?php echo $config['meta_desc']?>" />
  <meta property="og:url" content="https://<?php echo Flux::config('ServerAddress')?>/">
  <?php if(isset($config['meta_image'])): ?>
  <meta property="og:image" content="<?php echo $config['meta_image']; ?>"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>
  <?php endif;?>

  <!-- Twitter Card Meta -------------------------------------------------------->
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="twitter:domain" content="<?php echo Flux::config('ServerAddress')?>">
  <meta property="twitter:url" content="https://<?php echo Flux::config('ServerAddress')?>/">
  <meta name="twitter:title" content="<?php echo Flux::config('SiteTitle'); if (isset($title) && !empty(trim($title))) echo ": $title" ?>"/>
  <meta name="twitter:description" content="<?php echo $config['meta_desc']; ?>"/>
  <?php if(isset($config['meta_image'])): ?>
  <meta name="twitter:image" content="<?php echo $config['meta_image']; ?>"/>
  <?php endif;?>

  <!-- Favicon Meta -------------------------------------------------------->
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->themePath('includes/img/favicon/apple-touch-icon.png')?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->themePath('includes/img/favicon/favicon-32x32.png')?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->themePath('includes/img/favicon/favicon-16x16.png')?>">
  <link rel="manifest" href="<?php echo $this->themePath('includes/img/favicon/site.webmanifest')?>">
  <link rel="mask-icon" href="<?php echo $this->themePath('includes/img/favicon/safari-pinned-tab.svg')?>" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo $this->themePath('includes/img/favicon/favicon.ico')?>">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?php echo $this->themePath('includes/img/favicon/browserconfig.xml')?>">
  <meta name="theme-color" content="#ffffff">

  <!-- Stylesheets ---------------------------------------------------->
  <link href="<?php echo $this->themePath('includes/css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
  <?php if (Flux::config('EnableReCaptcha')): ?>
  <link href="<?php echo $this->themePath('includes/css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
  <?php endif ?>
  <!--[if IE]>
  <link rel="stylesheet" href="<?php echo $this->themePath('includes/css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
  <![endif]-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->themePath('includes/css/flux/flux.css') ?>" async></link>
  <link rel="stylesheet" href="<?php echo $this->themePath('includes/css/styles.css') ?>" type="text/css" charset="utf-8">
  <style id="fire_sparks_styles"></style>

  <!-- Javascripts ---------------------------------------------------->
  <?php if (Flux::config('EnableReCaptcha')): ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  <?php endif ?>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/jquery-3.6.2.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/swiper-bundle.min.js') ?>"></script>
  <!--[if lt IE 9]>
  <script src="<?php echo $this->themePath('includes/js/ie9.js') ?>" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/flux.unitpngfix.js') ?>"></script>
  <![endif]-->
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/flux.datefields.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/flux.unitip.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/aos.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/time.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/sparks.js') ?>"></script>
  <script type="text/javascript" src="<?php echo $this->themePath('includes/js/scripts.js') ?>"></script>

  <script type="text/javascript">
    // Preload spinner image.
    var spinner = new Image();
    spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';

    // Preload spinner image.
    var spinner = new Image();
    spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';

    function refreshSecurityCode(imgSelector){
      $(imgSelector).attr('src', spinner.src);

      // Load image, spinner will be active until loading is complete.
      var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
      var image = new Image();
      image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();

      $(imgSelector).attr('src', image.src);
    }

    <?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
      var RecaptchaOptions = {
      theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
      };
    <?php endif; ?>

    function reload(){
      window.location.href = '<?php echo $this->url ?>';
    }

    $(function() {
      $('.money-input').keyup(function() {
        var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
        if (isNaN(creditValue))
          $('.credit-input').val('?');
        else
          $('.credit-input').val(creditValue);
      }).keyup();
      $('.credit-input').keyup(function() {
        var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
        if (isNaN(moneyValue))
          $('.money-input').val('?');
        else
          $('.money-input').val(moneyValue.toFixed(2));
      }).keyup();

      if($('#timeline-slider-list').length > 0)
        $('#timeline-slider-list').slick('slickGoTo', <?php echo (isset($config['timeline_focus']) ? $config['timeline_focus'] : 0) ?>);
    });

<?php if($is_main_page && $fb_msg = false): ?>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v7.0'
      });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
<?php endif; ?>
  </script>
</head>
<body class="prestige scrollbar">

<?php if($is_main_page && $fb_msg): ?>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat"
    attribution=setup_tool
    page_id="112256200471297"
    theme_color="#0084ff"
    logged_in_greeting="Hi, Adventurer! If you have questions, feel free to let us know!"
    logged_out_greeting="Hi, Adventurer! If you have questions, feel free to let us know!">
  </div>
<?php endif; ?>

  <?php if($config['enable_preloader_animation']):?>
  <div class="loader-box">
    <div class="loader">&nbsp;</div>
  </div>
  <?php endif; ?>

  <?php include $this->themePath('main/nav/navbar.php', true); ?>
  <?php include $this->themePath('main/sections/index.splash.php', true); ?>

  <main>
  <?php if( !$is_main_page): ?>
  <!-- Section: Flux ------------------------------------------------->
    <section id="flux-pages">
      <div id="flux-box" class="container flux-page">
        <?php include $this->themePath('main/nav/submenu.php', true); ?>
        <?php include $this->themePath('main/nav/pagemenu.php', true); ?>
  <?php endif; ?>