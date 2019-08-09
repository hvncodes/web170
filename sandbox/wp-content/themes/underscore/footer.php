<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
    
	</div><!-- #content end wrapper -->
    
	<footer id="colophon" class="site-footer">
        
        
        <?php echo do_shortcode('[widget id="custom_html-4"]'); ?>
        
        
        
        <div id="copyright">
            <div class="wrapper">
                <ul class="right">
                    <li>Copyright &copy; 2019</li>
                    <li>All Rights Reserved</li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Web Design by John</a></li>
                    <li><a href="http://validator.w3.org/check?uri=referer">HTML5</a></li>
                    <li><a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow" title="Validate CSS">CS3S</a></li>
                </ul>
            </div><!-- end copyright wrapper -->
        </div><!-- end copyright -->
        
        
        
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscore' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'underscore' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscore' ), 'underscore', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
