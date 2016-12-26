<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Savana
 */

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savana</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/owl.carousel.css?ver=20151215' ?> ">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/owl.theme.css?ver=20151215' ?> ">

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="page">

        <div class="overlay-full"></div>      

        <header id="masterhead" class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="brand">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </div><!-- end brand -->

                        <div class="search-button">
                            <a class="social-icon hidden-sm hidden-xs" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="social-icon hidden-sm hidden-xs" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="social-icon hidden-sm hidden-xs" href="#"><i class="fa fa-instagram"></i></a>
                            <a class="social-icon hidden-sm hidden-xs" href="#"><i class="fa fa-pinterest"></i></a>
                            <button><i class="fa fa-search"></i></button>
                        </div><!-- end search-button -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </header><!--  end site-header -->    

        <div class="overlay-search">
            <div class="search-button">
                <button><i class="fa fa-close"></i></button>
            </div><!-- end search-button -->
            <form class="search-form">
                <input type="text" placeholder="Type your keywords here ...">
            </form>
        </div><!-- end overlay-search -->

        <nav class="overlay-menu">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div><!-- end menu -->
        </nav><!-- end overlay-menu -->  
