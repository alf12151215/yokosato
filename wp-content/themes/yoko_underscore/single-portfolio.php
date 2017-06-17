<?php
/**
 * The template for displaying all portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yoko_underscore
 */

get_header(); ?>

	<div id="primary" class="content-area portfolio-content-area">
		<main id="main" class="site-main" role="main">


		<?php
		while ( have_posts() ) : the_post();
		endwhile;
		?>

		<?php
			$image = get_field('top_image');
			$url = $image['url'];
			if( !empty($image) ): ?>
				<img class="lazy img-responsive responsive--full wp-post-image" data-original="<?php echo $image['url']; ?>" />
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="portfolio-caption"><?php the_field('caption');?></p>

		<?php
			$images = get_field('story_images');

			if( $images ): ?>
			    <ul class="story_listings">
			        <?php foreach( $images as $image ): ?>
			            <li>
	                    <img data-original="<?php echo $image['sizes']['large']; ?>" class="lazy img-responsive responsive--full" alt="<?php echo $image['alt']; ?>" />
			                <p><?php echo $image['caption']; ?></p>
			            </li>
			        <?php endforeach; ?>
			    </ul>
			<?php endif; ?>


			<ul class="single-footer">
				<li><a href="#page" data-scroll>Scroll to top</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Go to list</a></li>
				<!-- <li><?php next_post_link( $format, 'hoge', $in_same_term = true, $excluded_terms = '', $taxonomy = 'portfolio' ); ?></li> -->
			</ul>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
