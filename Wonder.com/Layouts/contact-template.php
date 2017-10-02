<?php
/*
Template Name: Contact Layout
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

	<article class="centered contact-info">
    <div class="contact-content">
      <h1><?php  the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <!-- Start of Form -->
    <form class="form-horizontal">
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" class="form-control" id="usr">
      </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="comment">Message:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </form>

	</article>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>
