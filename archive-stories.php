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
					<?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					?>
				</div>
				<div class="post-thumbnail">
					<img src="<?php 
							echo get_the_post_thumbnail_url($post = 61);
							?>
					">
				</div>
			</header><!-- .page-header -->

			<div class="container">
				<div class="row mb-5">
						<?php

						if(is_post_type_archive('stories') || is_tax('story_types')) {
							$terms = get_terms(
								array(
									'taxonomy'   => 'story_types',
									'hide_empty' => false,
								)
							);
						}
							
							
							// Check if any term exists
							if ( ! empty( $terms ) && is_array( $terms ) ) {
								// Run a loop and print them all
								foreach ( $terms as $term ) { ?>
									<div class="col-md-6">
										<a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class="mb-3 story-type">
											<div class="story-type-title">
												<h4 class="mb-0"><?php echo $term->name; ?></h4>
												<p><small><?php echo $term->description; ?></small></p>
											</div>
											<div class="story-type-image">
												<img src="<?php echo get_template_directory_uri().'/assets/img_storycover_'; ?><?php 
													echo $term->slug;
													?>.png">
											</div>
										</a>
									</div>
									
									<?php
								}
							} 
						?>
				</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
