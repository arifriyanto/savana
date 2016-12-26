<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Savana
 */

get_header(); ?>

	<section id="content" class="no-featured">
        <div class="container">
            <div class="row">
                <div id="primary" class="col-md-8 col-md-offset-2 col-sm-offset-0 content-area">
                    <div id="main" role="main" class="site-content clearfix"> 

                        <div class="entry-wrapper">
                        	<div class="entry-header">
                                <div class="post-meta">
                                    <span class="time"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?></span> 
                                    <span class="comment-counter"><i class="fa fa-clock-o"></i> 7 min read</span>
                                </div> 
                            </div><!-- end entry-header -->

                            <div class="entry-content">
								<?php
								while ( have_posts() ) : the_post();

									the_content();

                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'savana' ),
                                        'after'  => '</div>',
                                    ) );

									//the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
								?>
							</div><!-- end entry-content --> 

							<div class="entry-footer">
                                <div class="entry-author clearfix">
                                    <img class="avatar" src="images/avatar.jpg" alt="">
                                    <div class="author-description">
                                        <h3 class="author-name">Dina Sumitro</h3>
                                        <p>
                                            Typewriter dreamcatcher put a bird on it lomo pop-up, echo park pour-over cornhole 
                                            plaid before they sold out swag fashion axe williamsburg. Fap next level art party pinterest, 
                                            poutine 90's kitsch waistcoat vegan meggings cliche tacos irony craft beer.
                                             Whatever sriracha echo park selvage.
                                        </p>                                                
                                        <a class="author-link" href="#"><i class="fa fa-globe"></i> www.arifriyato.com</a>
                                    </div>
                                </div><!-- end entry-author -->                                        
                            </div><!-- end entry-footer --> 

                        </div><!-- end entry-wrapper -->

					 </div><!-- end #main -->
                </div><!-- end #primary -->
            </div><!-- end row -->                
        </div><!-- end container --> 
    </section><!-- end #content -->

<?php
get_footer();
