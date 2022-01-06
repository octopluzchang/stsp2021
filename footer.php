<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stsp2021
 */

?>
	<?php if(is_singular( 'videos' )) {?>
				<div class="video-popup show">
					<div class="content">
						<h1>
							<?php 
							echo get_the_title( $post = 156 );
						?>
						</h1>
						<p>
						<?php 
							echo get_post_field('post_content', 156);
						?>
						</p>
						<hr />
						<div class="row">
							<div class="col text-right">
								<button type="button" class="agree-btn btn btn-warning">我同意以上條款</button>
								<button type="button" onclick="history.back();" class="btn btn-dark">返回</button>
							</div>
						</div>
					</div>
				</div>
	<?php } ?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<h5>南部科學園區</h5>
						<div>版權所有© 2021 南部科學園區創業工坊</div>
						<div>科技部南部科學園區管理局委託辦理</div>
						<div class="row align-items-center">
							<div class="col-auto">
								造訪人次
							</div>
							<div class="col p-0">
								<?php
									echo do_shortcode('[wps_visitor_counter]');
								?>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="text-md-right">
							74147台南市新市區南科三路17號2樓之1 A室 <br/>
							TEL:06-5055625<br/>
							E-mail:startup17a@gmail.com
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
