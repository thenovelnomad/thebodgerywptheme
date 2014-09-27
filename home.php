<?php get_template_part('templates/page', 'header'); ?>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<section class="row">
  <div class="col-xs-12">
    <h2 class="text-center">Welcome to the Bodgery</h2>
    <?php include('templates/switch.php'); ?>
    <br>
    <p class="text-center h6"><em>"To Bodge: to make or repair hastily, to MacGyver"</em></p>
    <p>A makerspace and social group for makers in Madison, WI. We are a member-run group, pitching in our time and resources to build up Madison's maker community.</p>
    <p>And you can help!  If you have tools you'd like to share with the community, check <a href="http://wiki.thebodgery.org/doku.php?id=wish_list" target="_blank">our Wishlist</a> on the wiki.  You can also make a <a href="http://thebodgery.org/donations/" target="_blank">financial donation</a> if that's more your speed.  And thanks!</p>
  </div>
</section>
<section class="row">
<div class="col-xs-12">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_format()); ?>
  <?php endwhile; ?>
  </div>
</section>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav row">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
