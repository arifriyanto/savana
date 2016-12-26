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

<article <?php post_class('col-md-4 col-sm-6 col-xs-12 format-quote post-grid'); ?>>
    <div class="post-grid-inner post-grid-inner-with-featured" style="background-image: url( <?php echo $feat_image; ?>); background-size: cover;">
        <?php the_content(); ?>
        <div class="overlay"></div>
    </div>
</article><!-- end post-grid -->

<?php } else { ?>  

<article <?php post_class('col-md-4 col-sm-6 col-xs-12 format-quote post-grid'); ?>>
	<div class="post-grid-shadow"></div>
    <div class="post-grid-inner">
        <?php the_content(); ?>
        <div class="overlay"></div>
    </div>
</article><!-- end post-grid -->

<?php } ?>