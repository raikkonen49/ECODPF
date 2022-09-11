<?php get_header(); ?>

<div class="intro-slider" style="background:url(<?php the_field('sliderio_fonas'); ?>) no-repeat center center">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="row">
            <div class="carousel-indicators-holder">
                <div class="carousel-indicators-wraper">
                    <a class="slider-left" href="#myCarousel" data-slide="prev"></a>
                    <ol class="carousel-indicators">
                        <?php if( have_rows('sliderio_tekstas') ): ?>
                            <?php $i = -1; ?>
                            <?php while( have_rows('sliderio_tekstas') ): the_row(); ?>
                                <?php $i++; ?>
                                <?php if( $i == 0) { ?>

                                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"><span></span></li>

                                <?php } else { ?>
                                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"><span></span></li>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ol>
                    <a class="slider-right" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div class="carousel-inner">
            <?php if( have_rows('sliderio_tekstas') ): ?>
              <?php while( have_rows('sliderio_tekstas') ): the_row(); ?>

                  <div class="item">
                      <div class="row">
                          <div class="slder-text-block">
                              <div class="col-xs-12 nopad slder-text-title">
                                  <h2><?php the_sub_field('titulinis'); ?></h2>
                              </div>
                              <div class="col-xs-12 nopad slder-text">
                                  <?php the_sub_field('tekstas'); ?>
                              </div>
                              <a class="btn" href="<?php the_sub_field('placiau'); ?>" title="">
                                  Plačiau
                                  <span></span>
                              </a>
                          </div>
                      </div>
                  </div>

              <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 nopad text-container" id="scroll-down">
        <div class="col-xs-12 col-sm-6 nopad column text-block">
            <div class="col-xs-12 nopad line-title">
                <h2><?php the_field('titulinis'); ?></h2>
            </div>
            <div class="col-xs-12 nopad text-inner">
                <?php the_field('tekstas'); ?>
            </div>
            <a class="btn" href="<?php the_field('placiau'); ?>" title="">
                Plačiau
                <span></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 nopad column service-block">
            <div class="col-xs-12 nopad text-center block-title">
                <h2><?php the_field('paslaugu_titulinis'); ?></h2>
            </div>
            <div class="col-xs-12 nopad service-list">
                <ul>
                    <?php if( have_rows('paslaugu_sarasas') ): ?>
                        <?php while( have_rows('paslaugu_sarasas') ): the_row(); ?>

                            <li>
                               <div class="col-xs-12 nopad service-list-item">
                                   <div class="col-md-3 col-sm-4 col-xs-4 nopad service-list-number">
                                       <span><?php the_sub_field('numeris'); ?></span>
                                   </div>
                                   <div class="col-md-9 col-sm-8 col-xs-8 nopad service-list-text-block">
                                       <div class="col-xs-12 nopad block-title">
                                           <h3><?php the_sub_field('paslaugos_pavadinimas'); ?></h3>
                                       </div>
                                       <div class="col-xs-12 nopad service-list-text">
                                           <?php the_sub_field('paslaugos_tekstas'); ?>
                                       </div>
                                   </div>
                               </div>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-holder">
    <div class="row">
        <div class="col-xs-12 nopad multimedia-container">
            <div class="col-xs-12 col-sm-6 nopad img-block">
                <div class="col-xs-12 nopad block-title">
                    <h2><?php the_field('galerijos_titulinis'); ?></h2>
                </div>
                <div class="col-xs-12 nopad img-block-list">
                    <ul>
                        <li style="background:url(<?php the_field('didele_nuotrauka'); ?>) no-repeat center center"></li>
                        <li>
                            <ul>
                                <?php if( have_rows('mazos_nuotraukos') ): ?>
                                    <?php while( have_rows('mazos_nuotraukos') ): the_row(); ?>

                                        <li style="background:url(<?php the_sub_field('nuotrauka'); ?>) no-repeat center center"></li>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a class="btn" href="<?php echo get_page_link(11); ?>" title="">
                    Daugiau foto
                    <span></span>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 nopad video-block">
                <div class="col-xs-12 nopad block-title">
                    <h2><?php the_field('video_bloko_titulinis'); ?></h2>
                </div>
                <div class="col-xs-12 nopad video">
                    <?php the_field('video'); ?>
                </div>
                <a class="btn" href="<?php echo get_page_link(13); ?>" title="">
                    Daugiau video
                    <span></span>
                </a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
