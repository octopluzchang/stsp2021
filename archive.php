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

		<?php if ( have_posts() ) : ?>

			<header class="entry-header mb-5">
				<div class="container">
					<?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					?>
					
				</div>
				<div class="post-thumbnail">
					<img src="
					<?php 
							if(is_post_type_archive('teams') || is_tax('team_types')) {
								?>
					<?php 
					echo get_the_post_thumbnail_url($post = 76);
					?>
					<?php } else if(is_post_type_archive('videos') || is_tax('video_types')) {?>
							<?php 
							echo get_the_post_thumbnail_url($post = 78);
							?>
							<?php } else if(is_post_type_archive('stories') || is_tax('story_types')) {?>
							<?php 
							echo get_the_post_thumbnail_url($post = 61);
							?>
							<?php }?>
					">
				</div>
			</header><!-- .page-header -->

			<div class="container mb-5">
				<div class="row mb-5">
					<div class="col">
						<a href="<?php 
						if(is_post_type_archive('teams') || is_tax('team_types')) {
							?>
							<?php 
						echo esc_url(get_post_type_archive_link('teams'))?>
						

						<?php } else if(is_post_type_archive('videos') || is_tax('video_types')) {?>
						<?php 
						echo esc_url(get_post_type_archive_link('videos'))?>
						<?php } else if(is_post_type_archive('stories') || is_tax('story_types')) {?>
						<?php 
						echo esc_url(get_post_type_archive_link('stories'))?>
						<?php }?>
						" class="d-inline-block">
							<div
							class="filter-tag
						<?php 
							
										if(is_post_type_archive()) {
									?>
									<?php echo active; ?>
									<?php 
									}?>
						"
							>全部</div>
						</a>
						<?php
						if(is_post_type_archive('teams') || is_tax('team_types')) {
							$terms = get_terms(
								array(
									'taxonomy'   => 'team_types',
									'hide_empty' => false,
								)
							);
						}

						if(is_post_type_archive('videos') || is_tax('video_types')) {
							$terms = get_terms(
								array(
									'taxonomy'   => 'video_types',
									'hide_empty' => false,
								)
							);
						}

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
				<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
			
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );
			
						endwhile;
			
						the_posts_navigation();
			
					else :
			
						get_template_part( 'template-parts/content', 'none' );
			
					endif;
					?>
				</div>
			</div>
			
	</main><!-- #main -->
	
<?php
get_sidebar();
get_footer();
