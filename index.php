<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article> <?php post_class() ?> id="post-<?php the_ID(); ?>">
  
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  
    <div class="entry">
      <?php the_content(); ?>
    </div>
  
    <footer class="postmetadata">
      <?php the_tags(__('Tags: ','harmony'), ', ', '<br />'); ?>
      <?php _e('Posted in','harmony'); ?> <?php the_category(', ') ?> |
      <?php comments_popup_link(__('No Comments &#187;','harmony'), __('1 Comment &#187;','harmony'), __('% Comments &#187;','harmony')); ?>
    </footer>
  
  </article>

<?php endwhile; ?>

<?php else : ?>

  <h2><?php _e('Nothing Found','harmony'); ?></h2>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
