<!-- sidebar -->
<aside class="sidebar">

	<?php get_template_part('searchform'); ?>

<!--	<div class="sidebar-widget">-->
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('about-sidebar')) ?>
<!--	</div>-->

</aside>
<!-- /sidebar -->
