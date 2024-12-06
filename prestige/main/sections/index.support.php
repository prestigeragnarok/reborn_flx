<?php if (!defined('FLUX_ROOT')) exit;
$c = count($config['streamer_channel_name'])-1;
$url = $config['streamer_channel_name'][rand(0,$c)];

$channel = "";
$platform = 0;
$videos = false;
if(strpos($url,'twitch') !== false) {
  $platform = 2;
  $query_str = parse_url($url);
  if(strpos($url,'videos') !== false) {
    $platform = 3;
    $channel = str_replace('/videos/', '', $query_str['path']);
  } else {
    $channel = str_replace('/', '', $query_str['path']);
  }
}
else {
  $platform = 1;
  $query_str = parse_url($url, PHP_URL_QUERY);
  parse_str($query_str, $query_params);
  $channel = $query_params['v'];
}
?>
  <!-- Section: Support ------------------------------------------------->
  <section id="support-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="section-content col-12 col-lg-5 col-xxl-4" id="stream-box">
          <div id="stream-box-in" data-aos="zoom-in-right">
          <?php if($platform > 1):?>
            <iframe
              title ="Twitch Stream"
              src="https://player.twitch.tv/?<?php echo ($platform == 2?'channel=':'video=v').$channel?>&parent=<?php echo preg_replace("(^https?://)", "", Flux::config('ServerAddress') ) ?><?php echo ($config['streamer_autoplay']?'&autoplay=true':'&autoplay=false') ?><?php echo ($config['streamer_muted']?'&muted=true':'&muted=false') ?>"
              height="100%"
              width="100%"
              allowfullscreen="true"
              muted="<?php echo $config['streamer_muted'] ?>">
            </iframe>
          <?php elseif($platform == 1):?>
            <iframe
              title ="Youtube Stream"
              src="https://www.youtube.com/embed/<?php echo $channel?>?<?php echo ($config['streamer_autoplay']?'autoplay=1&mute=1':'') ?>"
              frameborder="0"
              height="100%"
              width="100%"
              allow="autoplay; encrypted-media"
              allowfullscreen="true">
            </iframe>
          <?php endif;?>
          </div>
        </div>
        <div class="section-content col-12 mt-5 mt-lg-0 col-lg-6 col-xxl-5">
          <div class="section-title">
            <h2 class="title" data-aos="fade-down-right"><span class="accent">Support</span> the Server!</h2>
          </div>
          <p data-aos="fade-right" data-aos-delay="200">
            <?php echo $config['streamer_text']?>
          </p>
          <?php if(!empty($config['streamer_btn_link']) && !empty($config['streamer_btn_title'])):?>
          <div id="about-stats" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?php echo $config['streamer_btn_link']?>" class="btn-yellow btn-center w-lg-50" target="_self"><?php echo $config['streamer_btn_title']?></a>
          </div>
          <?php endif;?>
        </div>
        <div class="render-container col-lg-1 col-xxl-2">
          <div id="support-render" class="render-box t-70 flip-x">
            <picture>
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-novice.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-novice.png')?>" alt="PrestigeRO" data-aos="zoom-in-left" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>
