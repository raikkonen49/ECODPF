<?php
/*
Template Name: Kontaktai
*/
?>

<?php get_header(); ?>

    <div class="container-holder">
        <div class="col-xs-12 nopad intro-bg" style="background:url(<?php the_field('fonas', 'options'); ?>) no-repeat center center"></div>
        <div class="row">
            <div class="col-xs-12 nopad page-container-holder">
                <div class="col-xs-12 nopad page-container">
                    <div class="col-xs-12 nopad page-info-block">
                        <div class="col-xs-12 col-sm-6 nopad breadcrumbs">
                            <ul>
                                <li>
                                    <a href="<?php echo home_url(); ?>" title="">Pradžia</a>
                                </li>
                                <li>
                                    <?php the_title(); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 nopad text-right page-social">
                            <span>Dalintis:</span>
                            <ul>
                                <li>
                                    <a class="facebook" onClick="window.open('https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" title="">
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter" onClick="window.open('https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" title="">
                                        <span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" onClick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=700,height=400');" href="javascript: void(0)" title="">
                                        <span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 nopad contacts-container">
                          <div class="col-xs-12 nopad line-title">
                              <h1><?php the_title(); ?></h1>
                          </div>
                          <div class="col-xs-12 col-sm-6 nopad requisites-block">
                              <div class="col-xs-12 nopad contacts-container-title">
                                  <?php the_field('rekvizitu_titulinis'); ?>
                              </div>
                              <div class="col-xs-12 nopad company">
                                  <?php the_field('imones_pavadinimas'); ?>
                              </div>
                              <div class="col-xs-12 nopad company-requisites">
                                  <ul>
                                      <li>
                                          <ul>
                                              <li>
                                                  <div class="col-xs-6 col-sm-5 col-md-5 col-lg-3 nopad requisites">
                                                      Įmonės kodas:
                                                  </div>
                                                  <div class="col-xs-6 col-sm-7 col-md-7 col-lg-9 nopad requisites">
                                                      <?php the_field('imones_kodas'); ?>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="col-xs-6 col-sm-5 col-md-5 col-lg-3 nopad requisites">
                                                      PVM kodas:
                                                  </div>
                                                  <div class="col-xs-6col-sm-7 col-md-7 col-lg-9 nopad requisites">
                                                      <?php the_field('pvm_kodas'); ?>
                                                  </div>
                                              </li>
                                          </ul>
                                      </li>
                                      <li>
                                          <div class="col-xs-6 col-sm-5 col-md-5 col-lg-3 nopad requisites">
                                              Adresas:
                                          </div>
                                          <div class="col-xs-6 col-sm-7 col-md-7 col-lg-9 nopad requisites">
                                              <?php the_field('adresas'); ?>
                                          </div>
                                      </li>
                                      <li>
                                          <ul>
                                              <li>
                                                  <div class="col-xs-6 col-sm-5 col-md-5 col-lg-3 nopad requisites">
                                                      A/S:
                                                  </div>
                                                  <div class="col-xs-6 col-sm-7 col-md-7 col-lg-9 nopad requisites">
                                                      <?php the_field('as'); ?>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="col-xs-6 col-sm-5 col-md-5 col-lg-3 nopad requisites">
                                                      Bankas:
                                                  </div>
                                                  <div class="col-xs-6 col-sm-7 col-md-7 col-lg-9 nopad requisites">
                                                      <?php the_field('bankas'); ?>
                                                  </div>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
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
                          <div class="col-xs-12 col-sm-6 nopad question-message-block">
                              <div class="col-xs-12 nopad contacts-container-title">
                                  <?php the_field('uzklausos_formos_titulinis'); ?>
                              </div>
                              <div class="col-xs-12 nopad question-message-area">
                                  <?php echo do_shortcode( '[contact-form-7 id="169" title="Užklausos forma"]' ); ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

<?php get_footer(); ?>
