<?php get_header(); ?>

<main class="container site-content">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>

      <div class="post">
        <div class="featured-img post-thumbnail">
          <?php the_post_thumbnail('thumbnail') ?>
        </div>

        <div class="text-container excerpt">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
        </div>

      </div>
      <?php
    }//End of while (have_posts)
  }//End of if (have_posts)
  ?>
</main>

<?php get_footer(); ?>
