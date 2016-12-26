<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Savana
 */

get_header(); ?>  
        
        <div class="container">
            <div class="home-slider animated fadeIn">
                <div id="home-slider" class="owl-carousel">
                    <div class="jumbotron" style="background: url('<?php echo get_template_directory_uri() . '/img/test/jumbotron.jpg' ?>') center center; background-size: cover;">
                        <div class="text-container">
                            <div class="text-inner">
                                <div class="text-middle">
                                    <a class="label" href="#">Travel</a>
                                    <a class="label" href="#">Mount</a>
                                    <a class="label" href="#">Hiking</a>
                                    <h1><a href="#">As high as the mountain</a></h1>
                                    <h2>A journey to the peak</h2>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div><!-- end jumbotron -->
                    <div class="jumbotron" style="background: url('<?php echo get_template_directory_uri() . '/img/test/post-grid-06.jpg' ?> ') center center; background-size: cover;">
                        <div class="text-container">
                            <div class="text-inner">
                                <div class="text-middle">
                                    <a class="label" href="#">Travel</a>
                                    <h1><a href="#">First Visiting New York</a></h1>
                                    <h2>I will share the story of my journey to New York</h2>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div><!-- end jumbotron -->
                    <div class="jumbotron" style="background: url('<?php echo get_template_directory_uri() . '/img/test/post-grid-09.jpg' ?> ') center center; background-size: cover;">
                        <div class="text-container">
                            <div class="text-inner">
                                <div class="text-middle">
                                    <a class="label" href="#">Travel</a>
                                    <h1><a href="#">Bamboo</a></h1>
                                    <h2>A fresh air that you want</h2>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div><!-- end jumbotron -->
                    <div class="jumbotron" style="background: url('<?php echo get_template_directory_uri() . '/img/test/post-grid-11.jpg' ?> ') center center; background-size: cover;">
                        <div class="text-container">
                            <div class="text-inner">
                                <div class="text-middle">
                                    <span class="label">Travel</span>
                                    <h1>12 Travel Habits You Should Quit</h1>
                                    <h2>Lorem ipsum dolor sit amet, consecttur adipiscingi elit. Nulla porta tristi qmat Donec nulla pharetraco onsecttur adipiscingi risus eget laosagittis Nam tempor diamoi purus, sed interdum mauris lacinia non.t</h2>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div><!-- end jumbotron -->
                </div>
                <div class="nav-slider hidden-xs hidden-sm clearfix">
                    <button class="slide-prev"><i class="fa fa-chevron-left"></i></button>
                    <button class="slide-next"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="nav-slider-mobile visible-sm visible-xs hidden-lg clearfix">
                    <button class="slide-prev-mobile pull-left"><i class="fa fa-chevron-left"></i></button>
                    <button class="slide-next-mobile pull-right"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->

        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading-home">
                            <h3>Latest post</h3>             
                        </div>          
                    </div>
                </div>
                <div class="row">
                    <div id="primary" class="content-area">                        
                        <div id="main" role="main" class="site-content article-list">

                            <?php
                            if ( have_posts() ) :                                

                                /* Start the Loop */
                                while ( have_posts() ) : the_post();

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif; ?>

                        </div><!-- end #main -->

                        <div class="pagination">
                            <div class="prev">
                                <a href="#"><i class="fa fa-chevron-left"></i></a>
                            </div>
                            <div class="next">
                                <a href="#"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- end pagination -->
                    </div><!-- end #primary -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end #content -->

        <section class="media-feed">
            <div class="container">
                <div class="row">                    
                    <div class="col-md-12">
                        <h3><i class="fa fa-instagram"></i> From Instragram</h3>
                        <div class="row">
                            <a class="col-xs-4 col-md-2" href="#">
                                <div class="instagram">
                                    <img src="<?php echo get_template_directory_uri() . '/img/test/ig-01.jpg' ?>" alt="">
                                </div>
                            </a>
                            <a class="col-xs-4 col-md-2" href="#">
                                <div class="instagram">
                                    <img src="<?php echo get_template_directory_uri() . '/img/test/ig-02.jpg' ?>" alt="">
                                </div>
                            </a>
                            <a class="col-xs-4 col-md-2" href="#">
                                <div class="instagram">
                                    <img src="<?php echo get_template_directory_uri() . '/img/test/ig-03.jpg' ?>" alt="">
                                </div>
                            </a>
                            <a class="col-xs-4 col-md-2" href="#">
                                <div class="instagram">
                                    <img src="<?php echo get_template_directory_uri() . '/img/test/ig-04.jpg' ?>" alt="">
                                </div>
                            </a>
                            <a class="col-xs-4 col-md-2" href="#">
                                <div class="instagram">
                                    <img src="<?php echo get_template_directory_uri() . '/img/test/ig-05.jpg' ?>" alt="">
                                </div>
                            </a>
                            <a class="col-xs-4 col-md-2" href="#">
                                <div class="instagram">
                                    <img src="<?php echo get_template_directory_uri() . '/img/test/ig-06.jpg' ?>" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end media-feed -->

<?php get_footer(); ?>