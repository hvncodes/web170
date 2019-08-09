<aside id="sidebar">
<?php if ( is_active_sidebar( 'sidebar-about' ) ) : ?>
  <div id="primary" class="widget-area">
  <!--<ul class="xoxo">-->
  <?php dynamic_sidebar( 'sidebar-about' ); ?>
  <!--</ul>-->
  </div>
<?php endif; ?>
</aside>