<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Savana
 */

get_header(); ?>

    <?php if ( has_post_thumbnail() ) {
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    ?>
    <div class="cover-wrap">
        <div class="cover" style="background-image: url( <?php echo $feat_image; ?>) ">                
            <div class="text-vertical-center">                    
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 col-sm-offset-0 line-bottom">
                        <span class="label">Travel</span>
                        <span class="label">Holiday</span>
                        <h1><?php the_title(); ?></h1>
                        <!-- <h2>Dieter Rams (born 20 May 1932 in Wiesbaden, Hessen) is a German industrial designer closely associated with the consumer products company Braun and the Functionalist school of industrial design</h2> -->
                    </div>
                </div><!-- end row -->                    
            </div><!-- end text-vertical-center -->
            <div class="overlay"></div>                        
        </div><!-- end cover -->
    </div><!-- end cover-wrap --> 
    <?php } ?>

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

									the_content( sprintf(
                                        /* translators: %s: Name of current post. */
                                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'savana' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                    ) );

                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'savana' ),
                                        'after'  => '</div>',
                                    ) );

									// the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									// if ( comments_open() || get_comments_number() ) :
									// 	comments_template();
									// endif;

								endwhile; // End of the loop.
								?>
							</div><!-- end entry-content --> 

							<div class="entry-footer">
                                <div class="entry-author clearfix">
                                    <?php 
                                        $author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
                                        $author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wpex_author_bio_avatar_size', 75 ) );
                                    ?>
                                    <?php if ( $author_avatar ) { ?>
                                    <?php echo $author_avatar; ?>
                                    <?php } ?>
                                    <div class="author-description">
                                        <h3 class="author-name"><?php echo get_the_author_meta('nickname'); ?></h3>
                                        <p>
                                            Typewriter dreamcatcher put a bird on it lomo pop-up, echo park pour-over cornhole 
                                            plaid before they sold out swag fashion axe williamsburg. Fap next level art party pinterest, 
                                            poutine 90's kitsch waistcoat vegan meggings cliche tacos irony craft beer.
                                             Whatever sriracha echo park selvage.
                                        </p>                                                
                                        <a class="author-link" href="<?php echo esc_url( $author_url ); ?>"><i class="fa fa-globe"></i> <?php echo esc_url( $author_url ); ?></a>
                                    </div>
                                </div><!-- end entry-author -->                                        
                            </div><!-- end entry-footer --> 

                            <?php comments_template( '', true ); ?>

                        </div><!-- end entry-wrapper -->

					 </div><!-- end #main -->
                </div><!-- end #primary -->
            </div><!-- end row -->                
        </div><!-- end container --> 
    </section><!-- end #content -->

<?php
get_footer();
