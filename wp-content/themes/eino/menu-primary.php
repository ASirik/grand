<?php if ( has_nav_menu( 'primary' ) ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container'       => 'nav',
			'container_id'    => 'menu-primary',
			'container_class' => 'menu',
			'menu_id'         => 'menu-primary-items',
			'menu_class'      => 'menu-items',
			'fallback_cb'     => '',
			'items_wrap'      => '<div class="assistive-text skip-link"><a href="#content" title="' . esc_attr__( 'Skip to content', 'eino' ) . '">' . __( 'Skip to content', 'eino' ) . '</a></div><h3 class="menu-toggle" title="' . esc_attr__( 'Menu', 'eino' ) . '"> ' . __( 'Menu', 'eino' ) . '</h3><div class="wrap"><ul id="%1$s" class="%2$s">%3$s</ul></div>'
		)
	);

} ?>