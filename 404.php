<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                        	<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'savana' ); ?></p>

							<?php
								get_search_form();

								the_widget( 'WP_Widget_Recent_Posts' );

								// Only show the widget if site has multiple categories.
								if ( savana_categorized_blog() ) :
							?>

							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'savana' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->

							<?php
								endif;

								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'savana' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
							?>
                        </div><!-- end entry-wrapper -->

					 </div><!-- end #main -->
                </div><!-- end #primary -->
            </div><!-- end row -->                
        </div><!-- end container --> 
    </section><!-- end #content -->

<?php
get_footer();
