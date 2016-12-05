<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>
				<section class="page-contents">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content();  ?>
					</div>
				</section>
					<?php 
					if( is_page('sitemap') ) { ?>
						<section class="sitemap">
							<?php wp_nav_menu( array( 
								'theme_location' => 'sitemap',
								'container_class' => 'sitemap'
							 ) ); ?>
						 </section>	
					<?php } ?>
				
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
