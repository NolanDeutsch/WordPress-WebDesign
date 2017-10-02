<?php
/*
 * A one page theme
 */
 ?>
 <?php get_header(); ?>

 <?php include_once('modules/nav.php'); ?>

 <div class="jumbotron">
   <div class="container">
     <h1><?php bloginfo( 'name' ); ?></h1>
     <h2><?php bloginfo( 'description' ); ?></h2>
   </div>
 </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <!-- About Section -->
      <section id="about">
        <div class="centered">
          <?php
      		$query = new WP_Query( 'pagename=about' );
      		// The Loop
      		if ( $query->have_posts() ) {
      			while ( $query->have_posts() ) {
      				$query->the_post();
              the_post_thumbnail('user-main');
      				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
      				echo '<div class="entry-content">';
      				the_content('');
      				echo '</div>';
      			}
      		}
      		/* Restore original Post Data */
      		wp_reset_postdata();
      		?>
      </div>
      </section>

      <!-- Collection Section -->
      <section id="collection">
        <div class="centered">
          <?php
      		$query = new WP_Query( 'pagename=collection' );
      		// The Loop
      		if ( $query->have_posts() ) {
      			while ( $query->have_posts() ) {
      				$query->the_post();
              the_post_thumbnail('user-main');
      				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
      				echo '<div class="entry-content">';
      				the_content('');
      				echo '</div>';
      			}
      		}
      		/* Restore original Post Data */
      		wp_reset_postdata();
      		?>
        </div>
      </section>

      <!-- Blog Section -->
      <section id="blog">
        <div class="indent clear">
          <?php
      		$args = array(
      			'posts_per_page' => 3,
      			'orderby' => 'rand',
      			'category_name' => 'articles'
      		);

      		$query = new WP_Query( $args );
      		// The Loop
      		if ( $query->have_posts() ) {
      			echo '<ul class="articles">';
      			while ( $query->have_posts() ) {
      				$query->the_post();
      				echo '<li class="clear">';
              echo '<figure class="articles-thumb">';
				      the_post_thumbnail('front-page-blog');
				      echo '</figure>';
      				echo '<aside class="articles-text">';
      				echo '<h3 class="articles-name">' . get_the_title() . '</h3>';
      				echo '<div class="articles-excerpt">';
      				the_excerpt();
      				echo '</div>';
      				echo '</aside>';
      				echo '</li>';
      			}
      			echo '</ul>';
      		}

  		/* Restore original Post Data */
  		wp_reset_postdata();
  		?>
    </div>
      </section>

      <!-- Courses Section -->
      <section id="courses">
        <div class="centered">
          <h2 class="section-title">Courses</h2>
        </div>
        <ul>
          <li>Item one</li>
          <li>Item two</li>
          <li>Item three</li>
        </ul>
      </section>

      <!-- Contact Section -->
      <section id="contact">
        <div class="centered">
          <?php
    		$query = new WP_Query( 'pagename=contact' );
    		// The Loop
    		if ( $query->have_posts() ) {
    			while ( $query->have_posts() ) {
    				$query->the_post();
    				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
    				echo '<div class="entry-content">';
    				the_content('');
    				echo '</div>';
    			}
    		}
    		/* Restore original Post Data */
    		wp_reset_postdata();
    		?>
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
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
