<?php
  $classes = array(
    'col-md-4',
    'col-sm-6',
    'col-xs-10',
    'col-xs-offset-1'
  );
?>
<article <?php post_class( $classes ); ?>>
  <header>
    <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
