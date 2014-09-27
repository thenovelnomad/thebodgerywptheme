<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <header>
      <!-- TODO add logo -->
      <div class="row">
        <a class="pull-right"><span>Donate Button</span><a>
      </div>
      <div class="row">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/BodgeryLogo2.png" alt="" width="200px" class="center-block">
      </div>
    </header>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>
  </div>
</header>
