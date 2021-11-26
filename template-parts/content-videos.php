<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stsp2021
 */

?>

<article id="post-<?php the_ID(); ?>" class="p-2 col-md-4">
	<div class="video-card">
	<div class="mb-3 position-relative">
		<span class="video-play-icon"><img src="<?php echo get_template_directory_uri().'/assets/ic_play.png'; ?>" /></span>
		<?php stsp2021_post_thumbnail(); ?>
	</div>
		<h6>
			<?php
				the_title()
			?>
		</h6>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
