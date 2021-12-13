<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stsp2021
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_front_page() ) : ?>
        <header class="entry-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php stsp2021_post_thumbnail(); ?>
			</div>
		</header><!-- .entry-header -->
    <?php endif; ?>
	<?php if ( is_front_page() ) : ?>
		<?php
			echo do_shortcode('[smartslider3 slider="2"]');
		?>
	<?php endif; ?>
	<div class="entry-content">
			<?php
			the_content();
	
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stsp2021' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
