<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram_link = get_field('instagram_link', 'option');
$twitter_link = get_field('twitter_link', 'option');
$facebook_link = get_field('facebook_link', 'option');
$google_analytics = get_field('google_analytics', 'option');

if( have_posts() ) : while( have_posts() ) : the_post();
	$map = get_field('map');
endwhile; endif;
?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<section class="contact">
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="contact-wrap">
					<div class="contact-info">

						<div class="item">
							<?php echo '(p) ' . $phone; ?>
							<br>
							<?php echo '(e) <a href="'. $spam . '">' . $spam . '</a>'; ?>
						</div><!-- item -->
						
						<div class="item">
							<?php echo $address; ?>
						</div><!-- item -->

						<div class="item">
							<h3>HOURS</h3>
							<?php echo $hours; ?>
						</div><!-- item -->

					</div><!-- contact info -->

					<div class="map">
						<?php echo $map; ?>
					</div>

				</div><!-- contact wrap -->

			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
