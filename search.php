<?php get_header(); ?>

        <?php if (have_posts()) : ?>

                <h2><?php _e('Search Results','harmony'); ?></h2>


                <?php while (have_posts()) : the_post(); ?>

                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                                <h2><?php the_title(); ?></h2>


                                <div class="entry">

                                        <?php the_excerpt(); ?>

                                </div>

                        </article>

                <?php endwhile; ?>

        <?php else : ?>

                <h2><?php _e('Nothing Found','harmony'); ?></h2>

        <?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>