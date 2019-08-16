<?php get_header(); 
/* Template Name: Front Page*/
?>

    <!-- section -->
    <section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            
            <div class="inner">
               
                <?php the_content(); ?>
                
                <?php edit_post_link(); ?>
                
            </div>
            
            

        </article>
        <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

        <!-- article -->
        <article>

            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

    <?php endif; ?>

    </section>
    <!-- /section -->

<?php get_footer(); ?>
