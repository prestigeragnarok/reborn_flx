<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_THEME_DIR.'/prestige/includes/Feed.php');
?>
  <!-- Section: Articles ------------------------------------------------->
  <section id="articles-section">
    <div class="container">
      <div class="row mb-3">
        <div class="col-12 col-lg-6">
          <div class="section-title" data-aos="fade-right">
            <h2 class="title text-shadow-2">News &amp; Updates</h2>
          </div>
        </div>
        <div id="articles-buttons" class="text-shadow-1 col-12 col-lg-6">
          <span class="articles-btn active" data-filter-val="all" data-aos="fade-down-left" data-aos-delay="100">All</span>
          <span class="articles-div" data-aos="fade-down-left" data-aos-delay="150">|</span>
          <span class="articles-btn" data-filter-val="news" data-aos="fade-down-left" data-aos-delay="200">News</span>
          <span class="articles-div" data-aos="fade-down-left" data-aos-delay="250">|</span>
          <span class="articles-btn" data-filter-val="events" data-aos="fade-down-left" data-aos-delay="300">Events</span>
          <span class="articles-div" data-aos="fade-down-left" data-aos-delay="350">|</span>
          <span class="articles-btn" data-filter-val="updates" data-aos="fade-down-left" data-aos-delay="400">Updates</span>
        </div>
      </div>
      <div class="row no-gutters" id="articles-content">
        <!-- Slider external container -->
        <div class="swiper-box">
          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <?php foreach ($feed_data as $key => $feed): ?>
                <article class="articles-content articles-<?php echo $feed['css']; ?> swiper-slide" data-filter="<?php echo $feed['css']; ?>">
                  <div class="articles-content-box" data-aos="zoom-in" data-aos-delay="<?php echo ($key*100)?>">
                    <picture class="articles-img" >
                      <source srcset="<?php echo $this->themePath('includes/img/articles-img-'.$feed['css'].'.web')?>p" type="image/webp">
                      <img src="<?php echo $this->themePath('includes/img/articles-img-'.$feed['css'].'.png')?>" alt="articles-img" />
                    </picture>
                    <div class="articles-content-in">
                      <p class="articles-line">
                        <span class="articles-date"><?php echo $feed['date']; ?></span>
                        <span class="articles-category badge"><?php echo $feed['cat_name']; ?></span>
                      </p>
                      <span class="articles-title"><?php echo $feed['title']; ?></span>
                      <span class="articles-desc"><?php echo $feed['desc']; ?>
                      </span>
                      <div class="articles-footer">
                        <div class="articles-author">
                          <?php if(!empty($config['fake_author_name'])):?>
                          By <span class="articles-author2"><?php echo $config['fake_author_name']; ?></span>
                          <?php endif;?>
                        </div>
                        <a class="articles-link" href="<?php echo $feed['link']; ?>">Read more</a>
                      </div>
                    </div>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar-nope"></div> -->
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

    </div>
  </section>