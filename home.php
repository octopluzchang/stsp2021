<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stsp2021
 */

get_header();
?>

	<main id="primary" class="site-main">


			<header class="entry-header mb-5">
				<div class="container">
					<h1 class="entry-title">最新文章</h1>
				</div>
				<?php stsp2021_post_thumbnail(); ?>
			</header><!-- .page-header -->

			<div class="container">
				<div class="row mb-5">
					<div class="col">
					<?php
							// Check if any term exists
							if ( ! empty( $terms ) && is_array( $terms ) ) {
								// Run a loop and print them all
								foreach ( $terms as $term ) { ?>
									<a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class="d-inline-block">
									<div class="filter-tag
									<?php 
									$current = get_queried_object();
										if($current == $term) {
									?>
									<?php echo active; ?>
									<?php 
									}?>
									">
									<?php echo $term->name; ?>
								</div>
									</a><?php
								}
							} 
						?>
					</div>
				</div>
			</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
