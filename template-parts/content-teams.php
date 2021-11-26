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
	<div class="team-card">
		<div class="front">
			<?php stsp2021_post_thumbnail(); ?>
		</div>
		<div class="back">
			<h5><?php the_title();?></h5>
			<small><?php the_content();?></small>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
