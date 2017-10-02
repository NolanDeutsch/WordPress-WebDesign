<?php

get_header(); ?>
<?php include_once('modules/nav.php'); ?>

<div class="jumbotron">
  <div class="container">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
  </div>
</div>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

  <div> <?php the_title(); ?></div>
  <hr>

  <div class="container mtb-15">
    <?php the_content(); ?>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
