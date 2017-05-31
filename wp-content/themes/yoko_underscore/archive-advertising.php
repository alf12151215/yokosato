<?php
/*
Template Name: Advertising
*/
?>

<?php get_header(); ?>

<header class="archive-header">
    <h1 class="archive-title">Advertising</h1>
</header><!-- .archive-header -->

<div id="main-content" class="main-content row">

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
              echo '<div>';

                  // Start the Loop
                  while ( $query->have_posts() ) : $query->the_post(); ?>

                  <div class="animal-listing col-md-4" id="post-<?php the_ID(); ?>">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        <?php the_post_thumbnail('thumbnail',['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
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
