<div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
    <div class="sidebar-content">
		<?php
		if ( is_active_sidebar( 'main-sidebar' ) ) {
			dynamic_sidebar( 'main-sidebar' );
		}
		?>
    </div>
</div>