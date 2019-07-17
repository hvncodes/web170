			<!-- footer -->
			<footer class="footer">
               
                <div id="footer-left-content">
                    <p><?php bloginfo('name'); ?></p>
                    <!-- copyright -->
                    <p class="copyright">
                        Copyright &copy; <?php echo date('Y'); ?> <a href="#">John Nguyen</a>. All Rights Reserved. <?php _e('Powered by', 'html5blank'); ?>
                        <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
                    </p>
                    <!-- /copyright -->
                    <p>
                      Validate <a href="http://validator.w3.org/check?uri=referer">HTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
                    </p>
		        </div>
                
                <div class="clear"></div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
        <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
	</body>
</html>
