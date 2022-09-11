<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/select2.min.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
        <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
        <?php wp_head(); ?>
        <style>
            .uhide{
                display: none;
            }
        </style>
        <?php if ($_SERVER['REMOTE_ADDR'] == '88.119.195.214'){?>
            <style>
                .uhide{
                    display: none;
                }
            </style>
        <?php } ?>
    </head>
    
        <body <?php body_class(); ?>>
            <div class="row">
              <div class="col-xs-12 nopad header">
                  <div class="col-xs-6 col-md-3 col-lg-3 nopad logo">
                      <a href="<?php echo home_url(); ?>" title=""><img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>
                  </div>
                  <div class="col-xs-6 header-mob nopad text-right">
                      <div class="hamburger hamburger--collapse">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-9 col-lg-9 nopad nav">
                      <div class="row">
                        <div class="menu-header-icons">
                            <div class="vl-div h-phone"> 
                                <span class="">
                                    <?php echo strtoupper(get_field('phone_text', 'options')); ?>
                                </span>
                            </div>
                            <div class="vl-div h-clock">
                                <span class="">
                                    <?php echo strtoupper(get_field('clock_text', 'options')); ?>
                                </span>
                            </div>
                            <a href="#order-pickup">
                            <div class="h-calendar">
                                <span class="">
                                    <?php echo strtoupper(get_field('calender_text', 'options')); ?>
                                </span>
                            </div> 
                            </a>
                        </div>
                      </div>    
                        <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'top_nav' )); ?>
                      
                  </div>
                  <div class="nav-mob">
                      <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'top_nav' )); ?>
                  </div>
              </div>
          </div>
