<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<!--h1><php _e( 'Page not found', 'html5blank' ); ?></h1-->
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'html5blank' ); ?></h1>
				
				<!--h2>
					<a href="<php echo home_url(); ?>"><php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2-->
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'html5blank' ); ?></p>
                
                <?php
                get_search_form();
                echo do_shortcode('[widget id="recent-posts-4"]');
                ?>
                
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<!--php get_sidebar(); ?-->

<?php get_footer(); ?>
