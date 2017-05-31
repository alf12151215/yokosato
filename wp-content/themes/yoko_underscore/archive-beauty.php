<?php
/*
Template Name: Beauty
*/
?>

<?php get_header(); ?>

<header class="archive-header">
    <h1 class="archive-title">Beauty</h1>
</header><!-- .archive-header -->

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

          <?php
          $args = array(
              'post_type' => 'portfolio',
              'portfolio_type' => 'beauty'
          );
          $query = new WP_Query( $args );

          if ($query->have_posts()) {

              // output the term name in a heading tag
              echo'<h2>' . $term->name . '</h2>';

              // output the post titles in a list
              echo '<ul>';

                  // Start the Loop
                  while ( $query->have_posts() ) : $query->the_post(); ?>

                  <li class="animal-listing" id="post-<?php the_ID(); ?>">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>

                  <?php endwhile;

                  echo '</ul>';

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
