<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */


$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram_link = get_field('instagram_link', 'option');
$twitter_link = get_field('twitter_link', 'option');
$facebook_link = get_field('facebook_link', 'option');
$google_analytics = get_field('google_analytics', 'option');
$sitemap = get_field('sitemap_link', 'option');
$sitename = get_bloginfo('name');
// Site links
$packhouse = get_field('packhouse', 'option');
$summitRoom = get_field('summit_room', 'option');
$mayoBird = get_field('mayo_bird', 'option');
$treehouse = get_field('treehouse_kitchen', 'option');

?>

	</div><!-- #content -->


	<div class="footer-top">
		<img src="<?php bloginfo('template_url'); ?>/images/footer-stroke.png">
	</div>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			
			<section class='footer-col-1 foot-col'>
				<div class="item">
					<h3>HOURS</h3>
					<?php echo $hours; ?>
				</div>
				<div class="item">
					<div class="social">
						<i class="fa fa-instagram fa-2x" aria-hidden="true">
							<a title="Instagram"  href="<?php echo $instagram_link; ?>"></a>
						</i>
						<i class="fa fa-twitter fa-2x" aria-hidden="true">
							<a title="Twitter"  href="<?php echo $twitter_link; ?>"></a>
						</i>
						<i class="fa fa-facebook fa-2x" aria-hidden="true">
							<a title="Facebook" href="<?php echo $facebook_link; ?>"></a>
						</i>
					</div>
				</div>
			</section>

			<section class='footer-col-2 foot-col'>
				<div class="item">
					<h3>COME SEE US</h3>
					<?php echo $address; ?>
				</div>
				<div class="item">
					<h3>GIVE US A CALL</h3>
					<?php echo '(p) ' . $phone; ?>
					<br>
					<?php echo '(e) <a href="mailto:'. $spam . '">' . $spam . '</a>'; ?>
				</div>
				
			</section>

			<section class='footer-col-3 foot-col'>
				<h3 class="center">WE PROUDLY SUPPORT</h3>
				<div class="behailu">
					<a target="_blank" href="http://www.behailuacademy.org/">
						<img src="<?php bloginfo('template_url'); ?>/images/behailu.png">
					</a>
				</div>
			</section>

			<div class="red-swoosh">
				<img src="<?php bloginfo('template_url');?>/images/red-swoosh.png">
			</div>

			<section class="foot-col group-start">
				
				<div class="img-center">
					<h3 class="center">A PART OF</h3>
					<div class="rollover">
						<a target="_blank" href="<?php echo $treehouse; ?>">
							<img alt="Tree House Kitchen" title="Tree House Kitchen" src="<?php bloginfo('template_url'); ?>/images/tree-house-kitchen.png">
						</a>
					</div><!-- roll over -->
				</div>
			</section>
			<div class="group-item">
				<div class="img-summit rollover">
					<a target="_blank" href="<?php echo $summitRoom; ?>">
						<img alt="Summit Room" title="Summit Room" src="<?php bloginfo('template_url'); ?>/images/summit-room.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-packhouse rollover">
					<a target="_blank" href="<?php echo $packhouse; ?>">
						<img alt="Packhouse" title="Packhouse" src="<?php bloginfo('template_url'); ?>/images/packhouse.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-mayo rollover">
					<a target="_blank" href="<?php echo $mayoBird; ?>">
						<img alt="Mayobird" title="Mayobird" src="<?php bloginfo('template_url'); ?>/images/mayobird.png">
					</a>
				</div>
			</div>
			
		</div><!-- wrapper -->

		<div class="creds">
			<?php 

			
			echo $sitename . ' - <a href="'. $sitemap . '">sitemap</a> - site by <a target="_blank" href="http://bellaworksweb.com">Bellaworks</a>';
			 ?>
		</div>


	</footer><!-- #colophon -->


</div><!-- #page -->

<?php 

wp_footer(); 

the_field('google_analytics', 'option');

?>

</body>
</html>
