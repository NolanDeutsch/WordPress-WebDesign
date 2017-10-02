<nav class="navbar sticky-top navbar-inverse bg-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <?php
    if (is_front_page() ){
      wp_nav_menu( array( 'menu' => 'Front Page Menu' ) );
    } else {
      wp_nav_menu( array( 'theme_location' => 'primary' ) );
    }
    ?>
  </div><!-- /.container-fluid -->
</nav>
