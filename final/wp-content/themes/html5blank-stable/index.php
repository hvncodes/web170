<?php get_header(); ?>

	<!-- section -->
    <section class="clearfix">
       
        <main>
            <div class="inner">
               
                <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>
                
            </div>
        </main>
        
        <?php get_sidebar('blog'); ?>

    </section>
    <!-- /section -->
	

<?php get_footer(); ?>
