<?php
/**
 * The template for displaying the Homepage.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hsc2020
 */

get_header();
?>
<?php
			$hero = get_field('home_hero_section');
			if( $hero ): ?>
					<div class="home__hero">
						<div class="hero__bg-img" style="background-image: url(<?php echo esc_url( $hero['background_image']['url'] ); ?>)"></div><!-- /.hero__bg-img -->
							<div class="hero__overlay">
									<?php
										$headline = $hero['overlay_headline']; 
										$tagline  = $hero['overlay_tagline'];

										if ( $headline ) {
											echo '<h2 class="hero__headline">'.$headline.'</h2>';
										}
										if ( $tagline ) {
											echo '<p class="hero__tagline">'.$tagline.'</p>';
										}
									?>
							</div><!-- /.hero__overlay -->
					</div>
		<?php endif; ?>
	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- Introduction -->
		

		</article><!-- #post-<?php the_ID(); ?> -->
		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
