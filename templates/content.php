<?php
  $classes = array(
    'row'
  );
?>
<article <?php post_class( $classes ); ?>>
  <div class="col-md-4">
    <figure class="post-thumbnail">
      <?php 
      if ( get_the_post_thumbnail($post_id) != '' ) {
        the_post_thumbnail();
      } else {
       echo '<img src="';
       echo catch_that_image();
       echo '" alt="" width="200" class="attachment-post-thumbnail"/>';
      }
      ?>
    </figure>
  </div>
  <div class="col-md-8">
    <div class="post-header">
      <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
    <div class="post-entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
