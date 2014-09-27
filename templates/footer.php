<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
      <div class="col-sm-4 text-center margin-top">
        <ul class="list-inline">
          <li>
            <object data="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-01.svg" type="image/svg+xml">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-01.svg" />
            </object>
          </li>
          <li>
            <object data="<?php echo get_template_directory_uri(); ?>/assets/img/googleplus-01.svg" type="image/svg+xml">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplus-01.svg" />
            </object>
          </li>
          <li>
            <object data="<?php echo get_template_directory_uri(); ?>/assets/img/M-01.svg" type="image/svg+xml">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/M-01.svg" />
            </object>
          </li>
          <li>
            <object data="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-01.svg" type="image/svg+xml">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-01.svg" />
            </object>
          </li>
        </ul>
      </div>
      <div class="col-sm-4 text-center">
        <div class="row">Email List</div>
        <div class="row"><input type="email"></div>
        <div class="row"><a href="#" class="small">Admin Login</a></div>
      </div>
    </div>
    <div class="row text-center">
      <span>&copy; 2014 The Bodgery</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
