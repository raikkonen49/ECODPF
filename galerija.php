<?php
/*
Template Name: Foto Galerija
*/
?>

<?php get_header(); ?>

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
                <div class="col-xs-12 nopad gallery-container">
                    <div class="col-xs-12 nopad line-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php if( have_rows('galerijos_poskyris') ): ?>
                        <?php while( have_rows('galerijos_poskyris') ): the_row(); ?>

                            <div class="col-xs-12 nopad page-container-section-title">
                                <h2><?php the_sub_field('poskyrio_titulinis'); ?></h2>
                            </div>

                                    <?php if( have_rows('blokas') ):
                                        $postCount = 1;
                                        while( have_rows('blokas') ) : the_row(); ?>
                                        <?php $postCount++; ?>

                                        <?php if ( ($postCount % 2) == 1 ): ?>
                                            <div class="col-xs-12 nopad gallery-columns">
                                                <ul>
                                                    <li>
                                                        <ul>
                                                            <?php if( have_rows('mazos_nuotraukos') ): ?>
                                                                <?php while( have_rows('mazos_nuotraukos') ): the_row(); ?>

                                                                    <li>
                                                                        <a class="img-sm fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('nuotraukos'); ?>" style="background:url(<?php the_sub_field('nuotraukos'); ?>) no-repeat center center"></a>
                                                                    </li>

                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="img-lg fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('didele_nuotrauka'); ?>" style="background:url(<?php the_sub_field('didele_nuotrauka'); ?>) no-repeat center center"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php else : ?>
                                            <div class="col-xs-12 nopad gallery-columns">
                                                <ul>
                                                    <li>
                                                        <a class="img-lg fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('didele_nuotrauka'); ?>" style="background:url(<?php the_sub_field('didele_nuotrauka'); ?>) no-repeat center center"></a>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <?php if( have_rows('mazos_nuotraukos') ): ?>
                                                                <?php while( have_rows('mazos_nuotraukos') ): the_row(); ?>

                                                                    <li>
                                                                        <a class="img-sm fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('nuotraukos'); ?>" style="background:url(<?php the_sub_field('nuotraukos'); ?>) no-repeat center center"></a>
                                                                    </li>

                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif;  ?>
                                	<?php endwhile; ?>
                                 <?php endif; ?>

                                 <?php if( have_rows('dvi_mazos_viena_didele') ):
                                     $postCount = 1;
                                     while( have_rows('dvi_mazos_viena_didele') ) : the_row(); ?>
                                     <?php $postCount++; ?>

                                     <?php if ( ($postCount % 2) == 1 ): ?>
                                         <div class="col-xs-12 nopad gallery-columns">
                                             <ul>
                                                 <li>
                                                     <a class="img-md fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('didele_nuotrauka'); ?>" style="background:url(<?php the_sub_field('didele_nuotrauka'); ?>) no-repeat center center"></a>
                                                 </li>
                                                <li>
                                                    <ul>
                                                        <?php if( have_rows('mazos_nuotraukos') ): ?>
                                                            <?php while( have_rows('mazos_nuotraukos') ): the_row(); ?>

                                                                <li>
                                                                    <a class="img-sm fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('nuotraukos'); ?>" style="background:url(<?php the_sub_field('nuotraukos'); ?>) no-repeat center center"></a>
                                                                </li>

                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </li>
                                             </ul>
                                         </div>
                                     <?php else : ?>
                                         <div class="col-xs-12 nopad gallery-columns">
                                             <ul>
                                                <li>
                                                    <ul>
                                                        <?php if( have_rows('mazos_nuotraukos') ): ?>
                                                            <?php while( have_rows('mazos_nuotraukos') ): the_row(); ?>

                                                                <li>
                                                                    <a class="img-sm fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('nuotraukos'); ?>" style="background:url(<?php the_sub_field('nuotraukos'); ?>) no-repeat center center"></a>
                                                                </li>

                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="img-md fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('didele_nuotrauka'); ?>" style="background:url(<?php the_sub_field('didele_nuotrauka'); ?>) no-repeat center center"></a>
                                                </li>
                                             </ul>
                                         </div>
                                     <?php endif;  ?>
                                 <?php endwhile; ?>
                              <?php endif; ?>

                              <?php if( have_rows('mazu_nuotrauku_blokas') ): ?>
                                  <?php while( have_rows('mazu_nuotrauku_blokas') ): the_row(); ?>

                                      <div class="col-xs-12 nopad gallery-columns hold">
                                          <ul>
                                              <?php if( have_rows('mazu_nuotrauku_listas') ): ?>
                                                  <?php while( have_rows('mazu_nuotrauku_listas') ): the_row(); ?>

                                                      <li>
                                                          <a class="img-sm fancybox" title="" rel="fancyboxgroup" href="<?php the_sub_field('nuotraukos'); ?>" style="background:url(<?php the_sub_field('nuotraukos'); ?>) no-repeat center center"></a>
                                                      </li>

                                                  <?php endwhile; ?>
                                              <?php endif; ?>
                                          </ul>
                                      </div>

                                  <?php endwhile; ?>
                              <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
