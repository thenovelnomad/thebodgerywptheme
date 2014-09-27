<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid">
    <header id="logo" class="row">
      <a id="tools" class="btn btn-primary h6" href="http://wiki.thebodgery.org/doku.php?id=equipment" target="_blank">Tools</a>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/BodgeryLogo2.png" alt="" width="100px" class="center-block">
    </header>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
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
