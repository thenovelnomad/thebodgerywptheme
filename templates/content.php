<?php
  $classes = array(
    'col-md-6',
    'col-sm-6',
    'col-xs-12'
  );
?>
<article <?php post_class( $classes ); ?>>
  <header class="">
    <figure class="post-thumbnail">
      <?php 
      if ( get_the_post_thumbnail($post_id) != '' ) {
        the_post_thumbnail();
      } else {
       echo '<img src="';
       echo catch_that_image();
       echo '" alt="" height="300" class="attachment-post-thumbnail"/>';
      }
      ?>
    </figure>
    <div class="post-header fadetext">
      <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
  </header>
  <div class="post-entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
