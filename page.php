
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
                <div class="col-xs-12 nopad entry">
                    <div class="col-xs-12 nopad line-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                        <?php wp_reset_query();?>
                    <?php endwhile; else : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
