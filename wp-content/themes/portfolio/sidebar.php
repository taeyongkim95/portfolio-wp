<?php
/**
 * The Sidebar containing the main widget area
 *
 */
?>

<div class="sidebar">
	
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="standardSidebar" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
	
</div><!--sidebar-->