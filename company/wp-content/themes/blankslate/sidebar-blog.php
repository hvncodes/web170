<aside id="sidebar">
<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
<div id="primary" class="widget-area">
<!--<ul class="xoxo">-->
<?php dynamic_sidebar( 'sidebar-blog' ); ?>
<!--</ul>-->
</div>
<?php endif; ?>
</aside>