<?php if (!defined('FLUX_ROOT')) exit; ?>
  <!-- Section: Staff ------------------------------------------------->
  <section id="staff-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="render-container col-12 col-lg-3">
          <div id="staff-render" class="render-box t-60">
            <picture >
              <source srcset="<?php echo $this->themePath('includes/img/renders/render-archmage.webp')?>" type="image/webp">
              <img src="<?php echo $this->themePath('includes/img/renders/render-archmage.png')?>" alt="" data-aos="zoom-in-left" data-aos-delay="200"/>
            </picture>
          </div>
        </div>
        <div class="section-content col-12 col-lg-9">
          <div class="section-title">
            <h2 class="title" data-aos="fade-down-right">PRESTIGE<span class="accent">RO</span> Staff Team</h2>
          </div>
          <p data-aos="fade-right" data-aos-delay="100">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, ligula sed dapibus vestibulum, ex arcu bibendum ex, quis tempus nisl sem nec magna. Pellentesque ornare, dolor ut euismod porta, dolor nisi semper eros, vitae gravida odio dui quis risus. Aenean ornare facilisis nulla, sed volutpat justo. <a href="#">Read more...</a>
          </p>

          <?php if(!empty($config['staff'])): ?>
          <div id="staff-swiper" class="swiper-box">
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach($config['staff'] as $idx => $staff):?>
                  <div class="swiper-slide" data-aos="zoom-out-up" data-aos-delay="<?php echo (150*($idx%5))?>">
                    <img src="<?php echo $staff['img']?>" alt="" />
                    <div class="staff-data">
                      <span class="staff-name"><?php echo $staff['name']?></span>
                      <span class="staff-role"><?php echo $staff['role']?></span>
                    </div>
                  </div>
                <?php endforeach?>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>
        <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
