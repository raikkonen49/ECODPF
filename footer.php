    <div class="container-holder">
        <div class="row">
            <div class="col-xs-12 nopad question-container <?php if (is_front_page()) { ?><?php } else { ?>line<?php } ?> <?php if ( is_page ('kontaktai')) { ?>hold<?php } else { ?><?php } ?>">
                <div class="col-xs-12 col-sm-6 col-sm-push-6 nopad contacts-area">
                    <div class="col-xs-12 nopad block-title">
                        <?php the_field('kontaktu_titulinis', 'options'); ?>
                    </div>
                    <div class="col-xs-12 nopad contacts-list">
                        <ul>
                            <li>
                                <a class="phone" href="javascript: void(0)" title=""><?php the_field('telefonas', 'options'); ?></a>
                                <a class="phone mob" href="tel:<?php the_field('telefonas', 'options'); ?>" title=""><?php the_field('telefonas', 'options'); ?></a>
                            </li>
                            <li>
                                <a class="mail" href="mailto:<?php the_field('el_pastas', 'options'); ?>" title=""><?php the_field('el_pastas', 'options'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-pull-6 nopad question-area">
                    <div class="col-xs-12 nopad block-title">
                        <?php the_field('uzklausos_titulinis', 'options'); ?>
                    </div>
                    <div class="col-xs-12 nopad question-area-text">
                        <?php the_field('uzpildykite_uzklausa', 'options'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-container <?php if ( is_page ('kontaktai')) { ?>hold<?php } else { ?><?php } ?>" id="order-pickup">
            <div class="row">
                <div class="col-xs-12 col-sm-6 <?php if ( is_page ('kontaktai')) { ?><?php } else { ?>col-sm-push-6<?php } ?> nopad message-container">
                  <div class="col-xs-12 nopad message-container-title">
                      <?php the_field('uzklausos_titulinis', 'options'); ?>
                  </div>
                  <div class="col-xs-12 nopad message-container-slogan">
                      <?php the_field('uzpildykite_uzklausa', 'options'); ?>
                  </div>
                  <div class="col-xs-12 nopad message-block">
                      <?php echo do_shortcode( '[contact-form-7 id="161" title="Detalės paėmimo forma"]' ); ?>
                  </div>
              </div>
                <div class="col-xs-12 col-sm-6 <?php if ( is_page ('kontaktai')) { ?><?php } else { ?>col-sm-pull-6<?php } ?> nopad map">
                    <?php

                    $location = get_field('zemelapis', 'options');

                    if( !empty($location) ):
                    ?>
                    <div class="acf-map">
                    	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                            <div class="google-marker">
                                <div class="google-marker-title">
                                    <?php the_field('merkerio_titulinis', 'options'); ?>
                                </div>
                                <div class="google-marker-text">
                                    <?php the_field('merkerio_tekstas', 'options'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bg">
    <div class="row">
        <div class="col-xs-12 nopad footer">
            <div class="col-xs-12 col-sm-8 nopad footer-left">
                <div class="col-xs-6 col-sm-3 nopad copyright">
                    © 2017 ECO DPF.
                </div>
                <div class="col-xs-6 col-sm-9 nopad footer-social">
                    <ul>
                        <li>
                            <a class="facebook" target="_blank" href="<?php the_field('facebook', 'options'); ?>" title="">
                                <span></span>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" target="_blank" href="<?php the_field('twitter', 'options'); ?>" title="">
                                <span></span>
                            </a>
                        </li>
                        <li>
                            <a class="google" target="_blank" href="<?php the_field('google', 'options'); ?>" title="">
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 nopad text-right footer-right">
                Sprendimas: <a target="_blank" href="https://www.orca.lt"title=""><img src="<?php echo bloginfo('template_directory'); ?>/img/orka.png" alt="" title=""></a>
            </div>
        </div>
    </div>
    </div>

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/select2.full.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/map.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzKvEaiSW2802IS2nVAhgBh570eeOSYgs"></script> -->
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
