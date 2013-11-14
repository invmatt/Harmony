<?php get_header(); ?>
        
        <!-- section -->
        <section role="main">
        
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                        <!-- post thumbnail -->
                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                                </a>
                        <?php endif; ?>
                        <!-- /post thumbnail -->
                        
                        <!-- post title -->
                        <h1>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <!-- /post title -->
                        
                        <!-- post details -->
                        <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                        <span class="author"><?php _e( 'Published by', 'harmony' ); ?> <?php the_author_posts_link(); ?></span>
                        <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'harmony' ), __( '1 Comment', 'harmony' ), __( '% Comments', 'harmony' )); ?></span>
                        <!-- /post details -->
                        
                        <?php the_content(); // Dynamic Content ?>
                        
                        <?php the_tags( __( 'Tags: ', 'harmony' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
                        
                        <p><?php _e( 'Categorised in: ', 'harmony' ); the_category(', '); // Separated by commas ?></p>
                        
                        <p><?php _e( 'This post was written by ', 'harmony' ); the_author(); ?></p>
                        
                        <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
                        
                        <?php comments_template(); ?>
                        
                </article>
                <!-- /article -->
                
        <?php endwhile; ?>
        
        <?php else: ?>
        
                <!-- article -->
                <article>
                        
                        <h1><?php _e( 'Sorry, nothing to display.', 'harmony' ); ?></h1>
                        
                </article>
                <!-- /article -->
        
        <?php endif; ?>
        
        </section>
        <!-- /section -->
        
<?php get_sidebar(); ?>

<?php get_footer(); ?>