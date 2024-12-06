<?php if (!defined('FLUX_ROOT')) exit;
require_once (FLUX_ADDON_DIR."/prestige/modules/prestige/hof.php");
?>
    <section id="hof-section">
      <div class="container">
        <div class="row justify-content-md-between">
          <div class="section-content col-12 col-md-9 col-lg-7 col-xl-4 ">
            <div class="section-title text-center">
              <h2 class="title" data-aos="zoom-in-down">Hall of Fame</h2>
            </div>

            <h3 class="title mt-3 my-md-4" data-aos="fade-down-right" data-aos-delay="200">Guild Rankings</h3>
            <div id="guild-top" data-aos="fade-right" data-aos-delay="400">
              <div class="guild-flag">
                <?php if(!empty($gotm['emblem_len'])): ?>
                  <img src='<?php echo $this->emblem($gotm['guild_id']) ?>" />' alt="" />
                <?php else: ?>
                  <img src='<?php echo $this->themePath('includes/img/emblem.png')?>' alt="" />
                <?php endif; ?>
              </div>
              <div class="guild-text">
                <div class="guild-name"><?php echo $gotm['guild_name'] ?></div>
                <div class="guild-info-group">
                  <div class="guild-info">
                    <span class="guild-info-title">Guild Master</span>
                    <span class="guild-info-value"><?php echo $gotm['guild_master'] ?></span>
                  </div>
                  <div class="guild-info">
                    <span class="guild-info-title">Guild Points</span>
                    <span class="guild-info-value"><?php echo $gotm['guild_points'] ?></span>
                  </div>
                </div>
              </div>
            </div>

            <div id="hof-rank-title" class="my-3 btn-yellow btn-sm" data-aos="fade-right" data-aos-delay="600">Castle Owners</div>

            <div id="guild-ranks" class="swiper-box">
              <!-- Slider main container -->
              <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                  <?php foreach($castle_owners as $idx => $castle): ?>
                  <div class="swiper-slide guild-info-group" data-aos="zoom-out-up" data-aos-delay="<?php echo (100*($idx%5))?>">
                    <div class="guild-flag">
                    <?php if(!empty($castle['emblem_len'])): ?>
                      <img src='<?php echo $this->emblem($castle['guild_id']) ?>" />' alt="" />
                    <?php else: ?>
                      <img src='<?php echo $this->themePath('includes/img/emblem.png')?>' alt="" />
                    <?php endif; ?>
                    </div>
                    <div class="guild-text">
                      <span class="guild-text-value"><?php echo $castle['guild_name'] ?></span>
                      <span class="guild-text-title"><?php echo $castle['castle_name'] ?></span>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

            </div>
          </div>
          <div class="render-container col-1 col-lg-5 col-xl-1 d-flex order-xl-3">
            <div id="hof-render" class="render-box l-10 t-50">
              <picture >
                <source srcset="<?php echo $this->themePath('includes/img/renders/render-ninja.webp')?>" type="image/webp">
                <img src="<?php echo $this->themePath('includes/img/renders/render-ninja.png')?>" alt="" data-aos="zoom-in-left"/>
              </picture>
            </div>
          </div>
          <div class="section-content col-12 col-md-6 mt-md-5 col-xl-4 col-xxl-4 d-flex order-xl-2">
            <div class="w-100">
              <h3 class="title mt-4" data-aos="fade-down" data-aos-delay="00">Clash Arena Rankings</h3>
              <table id="pvp-table" class="table table-sm table-borderless">
                <thead>
                  <tr data-aos="zoom-out">
                    <th>Rank</th>
                    <th>Player Name</th>
                    <th class="text-center">Kills</th>
                    <th class="text-center">Streak</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($pvp as $idx => $data): ?>
                  <tr data-aos="zoom-out" data-aos-delay="<?php echo (100*($idx%5))?>">
                    <td><?php echo ++$idx?></td>
                    <td><?php echo $data['name']?></td>
                    <td class="text-center"><?php echo $data['kills']?></td>
                    <td class="text-center"><?php echo $data['streaks']?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <h3 class="title mt-5" data-aos="fade-down" data-aos-delay="00">Battlegrounds Rankings</h3>
              <table id="level-table" class="table table-sm table-borderless">
                <thead>
                  <tr data-aos="zoom-out">
                    <th>Rank</th>
                    <th>Player Name</th>
                    <th class="text-center">Level</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($bg as $idx => $data): ?>
                  <tr data-aos="zoom-out" data-aos-delay="100">
                    <td><?php echo $data['rank']?></td>
                    <td><?php echo $data['name']?></td>
                    <td class="text-center"><?php echo $data['level']?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div id="ranker-mvp" class="section-content col-12 col-md-5 mt-md-5 col-xl-3 d-flex order-xl-4">
            <div class="w-100">
              <h3 class="title" data-aos="fade-down" data-aos-delay="00">MVP Rankings</h3>
              <div id="ranker-mvp-box">

                <div class="mvp-box">
                  <div class="mvp-item mvp-top" data-aos="zoom-in-left">
                    <div id="mvp-top-bg">
                      <img src="<?php echo $config['mvp'][0]['img'] ?>" alt="" />
                    </div>
                    <div class="mvp-text">
                      <span class="mvp-title"><?php echo $rankers['mvp'][0]['name'] ?></span>
                      <span class="mvp-sub"><?php echo $rankers['mvp'][0]['kills'] ?> pts</span>
                    </div>
                  </div>

                <?php for($i=1;$i<=4;$i++): ?>
                  <div class="mvp-item" data-aos="zoom-in-left" data-aos-delay="<?php echo (100*$i)?>">
                    <div class="mvp-img-box">
                      <img src="<?php echo $config['mvp'][$i]['img'] ?>" alt="" />
                    </div>
                    <div class="mvp-text">
                      <span class="mvp-title"><?php echo $rankers['mvp'][$i]['name'] ?></span>
                      <span class="mvp-sub"><?php echo $rankers['mvp'][$i]['kills'] ?> pts</span>
                    </div>
                  </div>
                <?php endfor; ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>