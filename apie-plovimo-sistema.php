<?php
/*
Template Name: Apie DPF plovimo sistemą
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
                <div class="col-xs-12 nopad page-container-comparison">
                    <div class="col-xs-12 nopad line-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-xs-12 nopad page-container-section-title">
                        <h2><?php the_field('sistemos_aprasymo_titulinis'); ?></h2>
                    </div>
                    <div class="col-xs-12 nopad entry">
                        <ul>
                            <?php if( have_rows('sistemos_aprasymo_sarasas') ): ?>
                                <?php while( have_rows('sistemos_aprasymo_sarasas') ): the_row(); ?>

                                    <li><?php the_sub_field('sistemos_aprasymas'); ?></li>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-xs-12 nopad page-container-section-title">
                        <h2><?php the_field('sistemos_palyginimo_titulinis'); ?></h2>
                    </div>
                    <div class="col-xs-12 nopad comparison-table-container-wrap">
                        <div class="comparison-table-container">
                            <div class="col-xs-12 nopad comparison-table-titles-block">
                                <ul>
                                    <?php if( have_rows('sistemos_palyginimo_priemoniu_sarasas') ): ?>
                                        <?php while( have_rows('sistemos_palyginimo_priemoniu_sarasas') ): the_row(); ?>

                                            <li>
                                                <?php if( get_sub_field('priemone') ): ?>
                                                    <div class="col-xs-12 nopad comparison-table-title">
                                                        <h3><?php the_sub_field('priemone'); ?></h3>
                                                    </div>
                                                <?php endif; ?>
                                            </li>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php if( have_rows('sistemos_palyginimo_blokas') ): ?>
                                <?php while( have_rows('sistemos_palyginimo_blokas') ): the_row(); ?>

                                    <div class="col-xs-12 nopad comparison-table-info">
                                        <ul>
                                            <?php if( have_rows('sistemos_palyginimo_aprasymo_sarasas') ): ?>
                                                <?php while( have_rows('sistemos_palyginimo_aprasymo_sarasas') ): the_row(); ?>

                                                    <li>
                                                        <div class="col-xs-12 nopad comparison-table-text-holder">
                                                            <div class="col-xs-12 nopad comparison-table-text">
                                                                <?php if( get_sub_field('sistemos_palyginimo_nuotrauka') ): ?>
                                                                    <img src="<?php the_sub_field('sistemos_palyginimo_nuotrauka'); ?>" alt="" title="">
                                                                <?php endif; ?>
                                                                <h3><?php the_sub_field('sistemos_palyginimas'); ?></h3>

                                                                <ul>
                                                                    <?php if( have_rows('sistemos_palyginimo_sarasas') ): ?>
                                                                        <?php while( have_rows('sistemos_palyginimo_sarasas') ): the_row(); ?>

                                                                            <li>
                                                                                <span style="background:url(<?php the_sub_field('sistemos_palyginimo_saraso_nuotrauka'); ?>) no-repeat center center"></span>
                                                                                <?php the_sub_field('sistemos_palyginimo_saraso_tekstas'); ?>
                                                                            </li>

                                                                        <?php endwhile; ?>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
