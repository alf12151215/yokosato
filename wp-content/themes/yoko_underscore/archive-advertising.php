<?php
/*
Template Name: Advertising
*/
?>

<?php get_header(); ?>

<!-- <header class="archive-header row row-10">
    <h1 class="archive-title col-md-12"> > Advertising</h1>
</header> -->

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

          <?php
          $args = array(
              'post_type' => 'portfolio',
              'portfolio_type' => 'advertising'
          );
          $query = new WP_Query( $args );

          if ($query->have_posts()) {
              // output the post titles in a list
              echo '<div class="row row-10">';

                  // Start the Loop
                  while ( $query->have_posts() ) : $query->the_post(); ?>

                  <div class="portfolio-listing col-md-4" id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>" class="thumb">
                      <figure>
                        <figcaption><?php the_title(); ?></figcaption>
                        <?php
                          $image = get_field('top_image');
                          $url = $image['url'];
                          $title = $image['title'];
                          $alt = $image['alt'];
                          $caption = $image['caption'];
                          $size = 'thumbnail';
                          $thumb = $image['sizes'][ $size ];
                          $width = $image['sizes'][ $size . '-width' ];
                          $height = $image['sizes'][ $size . '-height' ];
                          if( !empty($image) ): ?>
                            <img class="lazy img-responsive responsive--full wp-post-image" data-original="<?php echo $thumb; ?>" src="<?php bloginfo('template_directory'); ?>/img/dammy.png" height="100" width="100" />
                        <?php endif; ?>
                    </figure>
                    </a>
                  </div>

                  <?php endwhile;

                  echo '</div>';

          } // end of check for query having posts

          // use reset postdata to restore orginal query
          wp_reset_postdata();

          ?>

        </div><!-- #content -->
    </div><!-- #primary -->
    <?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
