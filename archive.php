<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Savana
 */

get_header(); ?>

	<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-home">
                        <?php
							the_archive_title( '<h3>', '</h3>' );
						?>            
                    </div>          
                </div>
            </div>
            <div class="row">
                <div id="primary" class="content-area">                        
                    <div id="main" role="main" class="site-content article-list">

                    <?php
						if ( have_posts() ) : ?>                         

	                     <?php
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

<?php
get_footer();
