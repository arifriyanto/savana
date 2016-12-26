<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Savana
 */

?>

<?php 
if ( has_post_thumbnail() ) {
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
?>							

<article <?php post_class('col-md-4 col-sm-6 col-xs-12 post-grid '); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="post-grid-inner post-grid-inner-with-featured">
            <div class="inner-bg" style="background-image: url( <?php echo $feat_image; ?>) ; background-size: cover;">
            </div>
            <div class="overlay">
                <h2 class="item-link"><?php the_title(); ?></h2>
                <p class="meta"><i class="fa fa-clock-o"></i> <?php the_time(get_option('date_format')); ?> <span class="meta-separator">/</span> Journal, Lifestyle, Journal, Lifestyle <span class="meta-separator">/</span> <i class="fa fa-comment-o"></i> 0</p>
            </div><!-- end overlay -->
        </div>
    </a>
</article><!-- end post-grid --> 

<?php } else { ?>  

<article <?php post_class('col-md-4 col-sm-6 col-xs-12 post-grid post-grid-standard'); ?>>
    <div class="post-grid-shadow"></div>
    <div class="post-grid-inner">
        <h2 class="item-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="meta"><i class="fa fa-clock-o"></i> <?php the_time(get_option('date_format')); ?> <span class="meta-separator">/</span> <?php echo savana_categories_link(); ?> <span class="meta-separator">/</span> <i class="fa fa-comment-o"></i> 0</p>
        <?php the_excerpt(); ?>
        <a class="btn btn-sm btn-primary" href="<?php the_permalink(); ?>">Read more</a>
    </div>
</article><!-- end post-grid --> 

<?php } ?>