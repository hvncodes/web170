<?php get_header(); 
/* Template Name: About Page*/
?>
<!-- section -->
<section class="clearfix">

	<main>
       
        <div class="inner">
           
            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <p>This text is in the about page file.</p>
   
            <?php the_content(); ?>

<!--                <br class="clear">-->

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
	
	</main>

    <?php get_sidebar('about'); ?>
</section>
<!-- /section -->

<?php get_footer(); ?>