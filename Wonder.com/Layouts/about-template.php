<?php
/*
Template Name: About Layout
*/
get_header();?>

<?php include_once('modules/nav.php'); ?>
<div class="jumbotron">
  <div class="container">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
  </div>
</div>

<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="centered">
    <div class="post-thumbnail">
      <?php the_post_thumbnail('user-main'); ?>
    </div>
		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>
