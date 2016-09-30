<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php 

			// Pull Homepage
			$post = get_post(2); 
			setup_postdata( $post );
			 
				$title = get_field('title');
				$text = get_field('text');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');

				$size = 'full'; 
			 
			wp_reset_postdata(); ?>

			<section class="homepage">
				<h2><?php  echo $title; ?></h2>
				<div class="intro-text"><?php echo $text; ?></div>
				
				<div class="photo1">
					<?php
					if( $image_1 ) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>
				</div>
				<div class="photo2">
					<?php
					if( $image_2 ) {
						echo wp_get_attachment_image( $image_2, $size );
					} ?>
				</div>
			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
