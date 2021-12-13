<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stsp2021
 */

?>

<article id="post-<?php the_ID(); ?>" class="p-2 col-12">
	<div class="story-card">
		<div>
			<div class="mb-3">
				<?php
					the_date();
				?>
			</div>
			<a href="
			<?php
				echo get_permalink()
			?>
			">
			<?php	
				the_title( '<h5>', '</h5>' );
			?>
			</a>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
