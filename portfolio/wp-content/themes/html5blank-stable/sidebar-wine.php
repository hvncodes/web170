<!-- sidebar is winebar by default-->
<aside class="sidebar">

	<?php get_template_part('searchform'); ?>

<!--	<div class="sidebar-widget">-->
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('wines-sidebar')) ?>
<!--	</div>-->

</aside>
<!-- /sidebar -->
