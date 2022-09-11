<?php
/*
Template Name: Atsiliepimai
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
                <div class="col-xs-12 nopad page-container-reviews">
                    <div class="col-xs-12 nopad line-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 9999, 'order' => 'DESC') ); ?>
    		        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="col-xs-12 nopad reviews-block">
                            <div class="col-xs-12 nopad reviews-title">
                                <?php the_title();?>
                            </div>
                            <div class="col-xs-12 nopad reviews-details">
                                <?php the_field('vardas'); ?> / <?php echo get_the_time('Y-m-d'); ?>
                            </div>
                            <div class="col-xs-12 nopad reviews-text">
                                <?php the_content(); ?>
                            </div>
                        </div>

    		        <?php wp_reset_query();?>
    		        <?php endwhile; ?>
                </div>
                <div class="col-xs-12 nopad reviews-form-container">
                    <div class="col-xs-12 nopad text-center reviews-form-container-title">
                        Naudojotės mūsų paslaugomis?
                    </div>
                    <div class="col-xs-12 nopad text-center reviews-form-container-slogan">
                        Būsime dėkingi, jei paliksite savo atsiliepimą
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-form">
        <div class="col-xs-12 message-block review">
            <?php echo do_shortcode( '[contact-form-7 id="187" title="Atsiliepimų forma"]' ); ?>
        </div>
    </div>

<?php get_footer(); ?>
